<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Landingpage extends Model
{
    public $timestamps = false;
	protected $fillable = ['page_type','page_type_category','name','heading_name','images','status'];
	
	
	
	public function occasion()
	{
		return $this->belongsTo('App\Occasion', 'page_type_category_id');
	}
	
	public function gender()
	{
		
		return $this->belongsTo('App\Gender', 'page_type_category_id');
	}
	
	
	public function relation()
	{
		
		return $this->belongsTo('App\Relation', 'page_type_category_id');
	}
	
	
	
	
}
