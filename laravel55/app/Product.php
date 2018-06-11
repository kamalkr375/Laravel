<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'slug', 'title','info','description','code','barcode','display_order','category_id','subcategory_id','brand_id','vendor_id','gender_id','images','is_combo','quantity','quantity_limitation_without_inventory',
    'negative_quantity_allow','inr_price','shipping_cost','audio_url','video_url','rack','image_1','image_2','image_3','image_4','image_5','new','home_menu','hot_seller','discount_type','discount','image_number','gift_card','status'];


   public function category(){

   	   return $this->belongsTo('App\Category');
   }

   public function subcategory()
   {

      	return $this->belongsTo('App\Subcategory');
   }

   public function brand()
    {

    	return $this->belongsTo('App\Brand');
    }


   public function vendor()
    {

    	return $this->belongsTo('App\Vendor');
    }

   public function gender()
    {

    	return $this->belongsTo('App\Gender');
    }

    public function occasions()
     {
     	return $this->belongsToMany('App\Occasion','product_occasions');
     }

    public function relations()
     {
     	return $this->belongsToMany('App\Relation','product_relations');
     }

     public function filters()   // 
      {
        return $this->belongsToMany('App\SubcategoryFilter','product_filter_attributes');
      }

     public function attributes()
      {

      	  return $this->belongsToMany('App\SubcategoryFilterAttribute','product_filter_attributes');
      }

	 public function productLocations()
	 {
                return $this->belongsToMany('App\ProductLocation');
     }	 
	  
 //========================  

}
