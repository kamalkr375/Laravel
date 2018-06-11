<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Relation extends Model
{
     protected $fillable = ['name', 'slug', 'description','banner','city_relationship','gender_id','status'];


     public function genderbelongsto()
      {

      	 return $this->belongsTo('App\Gender','gender_id','id');
      }
}
