<?php

namespace Sijot;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Categories
 *
 * @package Sijot
 */
class Categories extends Model
{
    /**
     * Mass-assign fields for the database.
     *
     * @var array
     */
    protected $fillable = ['name', 'description'];
}
