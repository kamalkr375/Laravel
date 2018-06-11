<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubcategoryFilter extends Model
{
    //

     protected $fillable = ['subcategory_id','name'];

     public function subcategorybelongsto()
    {
       return $this->belongsTo('App\Subcategory');
    }

     public function attributes(){

    	return $this->hasMany('App\SubcategoryFilterAttribute');
    }


}
