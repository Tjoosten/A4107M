<?php

namespace Sijot;

use Illuminate\Database\Eloquent\Model;

/**
 * Class News
 *
 * @package Sijot
 */
class News extends Model
{
    /**
     * Mass-assign fields for the database.
     *
     * @var array
     */
    protected $fillable = ['author_id', 'title', 'sub_title', 'post'];

    /**
     * Categories for the news items.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function categories()
    {
        return $this->belongsToMany(Categories::class)->withTimestamps();
    }

    /**
     * Author information for the post.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }
}
