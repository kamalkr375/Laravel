<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
      protected $fillable = ['name', 'slug', 'meta_description','icon','discount_type','discount','status'];

 /*   public function colorbelongsto() 
    {
       return $this->belongsTo('App\Color','color_id','id');

    } */

   public function subcategory()
    {
    	return $this->hasMany('App\Subcategory');
    }

}
