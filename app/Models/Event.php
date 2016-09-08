<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function performers()
    {
        return $this->belongsToMany('App\Models\Performer', 'performer_event', 'performer_id', 'event_id');
    }
}