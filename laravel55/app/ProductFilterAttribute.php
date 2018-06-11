<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductFilterAttribute extends Model
{
    //

    protected $fillable = ['product_id','subcategory_filter_id','subcategory_filter_attribute_id'];
}
