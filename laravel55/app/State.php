<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
     public $timestamps = false;
     protected $fillable = ['name','country_id'];
	 
	 
	 
	
	public function countrybelongsto()
    {
    	return $this->belongsTo('App\Country','country_id','id');
    }
	 
	 
}
