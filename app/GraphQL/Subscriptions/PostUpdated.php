<?php

namespace App\GraphQL\Subscriptions;

use App\User;
use App\Post;
use Illuminate\Support\Str;
use GraphQL\Type\Definition\ResolveInfo;
use Illuminate\Http\Request;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;
use Nuwave\Lighthouse\Schema\Types\GraphQLSubscription;
use Nuwave\Lighthouse\Subscriptions\Subscriber;

class PostUpdated extends GraphQLSubscription
{
    /**
     * Check if subscriber is allowed to listen to the subscription.
     *
     * @param  \Nuwave\Lighthouse\Subscriptions\Subscriber  $subscriber
     * @param  \Illuminate\Http\Request  $request
     * @return bool
     */
    public function authorize(Subscriber $subscriber, Request $request): bool
    {
        $user = $subscriber->context->user;
        $author = User::find($subscriber->args['user']);

        return $user->can('viewPosts', $author);
    }

    /**
     * Filter which subscribers should receive the subscription.
     *
     * @param  \Nuwave\Lighthouse\Subscriptions\Subscriber  $subscriber
     * @param  mixed  $root
     * @return bool
     */
    public function filter(Subscriber $subscriber, $root): bool
    {
        $user = $subscriber->context->user;

        // Don't broadcast the subscription to the same
        // person who updated the post.
        return $root->updated_by !== $user->id;
    }

     /**
     * Encode topic name.
     *
     * @param  \Nuwave\Lighthouse\Subscriptions\Subscriber  $subscriber
     * @param  string  $fieldName
     * @return string
     */
    public function encodeTopic(Subscriber $subscriber, string $fieldName): string
    {
        // Optionally create a unique topic name based on the
        // `author` argument.
        $args = $subscriber->args;

        return Str::snake($fieldName).':'.$args['user'];
    }

    /**
     * Decode topic name.
     *
     * @param  string  $fieldName
     * @param  \App\Post  $root
     * @return string
     */
    public function decodeTopic(string $fieldName, $root): string
    {
        // Decode the topic name if the `encodeTopic` has been overwritten.
        $author_id = $root->user_id;

        return Str::snake($fieldName).':'.$author_id;
    }

    /**
     * Resolve the subscription.
     *
     * @param  \App\Post  $root
     * @param  mixed[]  $args
     * @param  \Nuwave\Lighthouse\Support\Contracts\GraphQLContext  $context
     * @param  \GraphQL\Type\Definition\ResolveInfo  $resolveInfo
     * @return mixed
     */
    public function resolve($root, array $args, GraphQLContext $context, ResolveInfo $resolveInfo): Post
    {
        // Optionally manipulate the `$root` item before it gets broadcasted to
        // subscribed client(s).
        $root->load(['user', 'user.achievements']);

        return $root;
    }
}
