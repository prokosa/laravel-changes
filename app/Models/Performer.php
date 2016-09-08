<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Performer extends Model
{
    public function events()
    {
        return $this->belongsToMany('App\Models\Event', 'performer_event', 'performer_id', 'event_id');
    }
}