<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductLocation extends Model
{
    
	public $timestamps = false;
	protected $fillable = ['country_id','state_id','city_id','category_id','subcategory_id'];


	public function countrybelongsto()
	{
	    return $this->belongsTo('App\Country','country_id','id');
	}


	public function statebelongsto()
	{
	   return $this->belongsTo('App\State','state_id','id');
	}

   public function citybelongsto()
	{
	   return $this->belongsTo('App\City','city_id','id');
	}
	

   public function categorybelongsto()
	{
	   return $this->belongsTo('App\Category','category_id','id');
	}

   public function subcategorybelongsto()
	{
	     return $this->belongsTo('App\Subcategory','subcategory_id','id');
	}
	
	
   public function products()
    {
        //return $this->hasMany('App\ProductLocationList');
		
		 return $this->belongsToMany('App\Product','product_location_products');
    }
	
	
	
	
	
	
	
	
}
