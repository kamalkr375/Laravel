<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Affiliate extends Model
{
   protected $fillable = ['name', 'address', 'phone_number','website','commission'];
}
