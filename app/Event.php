<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'event_title', 'starts_at', 'ends_at','event_description','event_type',
        'event_topic','organisers_name','event_image'
    ];
}
