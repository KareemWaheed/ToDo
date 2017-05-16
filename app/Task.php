<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //Create the fillable columns to use create method
    protected $fillable = [
        'name',
        'body',
        'user_id',
        'priority',
        'state'
    ];

    /**
     * The Task Belongs To one User
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
