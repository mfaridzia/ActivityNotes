<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $fillable = [
        'activity_name', 'start_date', 'start_time', 'end_date', 'end_time', 'status', 'user_id'
    ];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
