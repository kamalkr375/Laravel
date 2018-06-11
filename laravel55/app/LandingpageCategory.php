<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LandingpageCategory extends Model
{
    public $timestamps = false;
	protected $fillable = ['landingpage_id','category_id','priority'];
}
