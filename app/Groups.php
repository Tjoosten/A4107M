<?php

namespace Sijot;

use Illuminate\Database\Eloquent\Model;

class Groups extends Model
{
    /**
     * The group scope for the ORM layer.
     *
     * @param  string $query    >The orm query.
     * @param  string $selector The selector
     * @return mixed
     */
    public function scopeGetGroup($query, $selector)
    {
        return $query->where('selector', $selector);
    }
}
