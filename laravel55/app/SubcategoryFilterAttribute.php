<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubcategoryFilterAttribute extends Model
{
    //
     protected $fillable = ['subcategory_filter_id','filter_value'];

     public function subcategoryfilterbelongsto()
    {
       return $this->belongsTo('App\SubcategoryFilter');
    }


}
