<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class LeaseChanges
 *
 * @package App
 */
class LeaseChanges extends Model
{
    /**
     * Mass-assign fields for the database.
     *
     * @return array
     */
    protected $fillable = ['author_id', 'change'];
}
