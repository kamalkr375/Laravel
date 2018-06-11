<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LandingpageSubcategory extends Model
{
    public $timestamps = false;
	protected $fillable = ['landingpage_id','landingpage_category_id','subcategory_id'];
}
