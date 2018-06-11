<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
     public $timestamps = false;
     protected $fillable = ['country_id','state_id','name'];
	 
	 
	public function countrybelongsto()
    {
    	return $this->belongsTo('App\Country','country_id','id');
    }
	
	
	public function statebelongsto()
    {
    	return $this->belongsTo('App\State','state_id','id');
    }
	 
	 
}
