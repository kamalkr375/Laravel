<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
     protected $fillable = ['title', 'url', 'event_tracking','alt_tag','banner'];
}
