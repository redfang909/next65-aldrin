<?php

namespace App\GraphQL\Queries;

use App\User;

class LatestUser
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
        return User::all()->last();
        //return 'xerewrwe';
    }
}
