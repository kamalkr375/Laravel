<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Occasion extends Model
{
      protected $fillable = ['name', 'slug', 'description','banner_1','banner_2','banner_3','banner_4','banner_5','gender_id','status'];

      public function genderbelongsto()
      {

      	 return $this->belongsTo('App\Gender','gender_id','id');
      }


}
