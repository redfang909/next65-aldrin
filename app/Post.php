<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use SoftDeletes;

    protected $fillable = ['title', 'description', 'type'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the post's image.
     */
    public function image()
    {
        return $this->morphMany('App\Image', 'imageable');
    }
}
