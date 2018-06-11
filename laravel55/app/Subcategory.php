<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    //
    protected $fillable = ['category_id','name', 'slug', 'description','large_banner_1','large_banner_2','large_banner_3',
	  'status','discount_type','discount'];

    public function filters(){

    	return $this->hasMany('App\SubcategoryFilter');
    }

    public function categorybelongsto()
    {
    	return $this->belongsTo('App\Category','category_id','id');
    }

    
}
