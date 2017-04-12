<?php

namespace Sijot;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Lease
 * @package App
 */
class Lease extends Model
{
    /**
     * Mass-aéssign fields.
     *
     * @var array
     */
    protected $fillable = ['status_id', 'end_date', 'start_date', 'email_address', 'group_name', 'phone_number'];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['end_date', 'start_date'];

    /**
     * Format the timestamp format.
     *
     * @param  string $date The start time from the form
     * @return string
     */
    public function setStartDateAttribute($date)
    {
        // Use with Carbon instance:
        // -------
        // Carbon::createFromFormat('H:i', $date)->format('H:i');
        return $this->attributes['start_date'] = strtotime(str_replace('/', '-', $date));
    }

    /**
     * Format the timestamp format.
     *
     * @param  string $date The start time from the form
     * @return string
     */
    public function setEndDateAttribute($date)
    {
        // Use with Carbon instance:
        // -------
        // Carbon::createFromFormat('H:i', $date)->format('H:i');
        return $this->attributes['end_date'] = strtotime(str_replace('/', '-', $date));
    }

    /**
     * Get all the request changes for the lease.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function changeHistory()
    {
        return $this->belongsToMany(LeaseChanges::class)->withTimestamps();
    }
}
