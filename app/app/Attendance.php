<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    /**
    * Get the user associated with the attendance.
    */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    /**
    * Get the meeting associated with the attendance.
    */
    public function meeting()
    {
        return $this->belongsTo('App\Meeting');
    }
}
