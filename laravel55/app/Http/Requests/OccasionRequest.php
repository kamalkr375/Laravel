<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use App\Rules\CheckSlugRule;

class OccasionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(Request $request)
    {
        switch($this->method())
            {
                case 'GET':
                case 'DELETE':
                {
                    return [];
                }
                case 'POST':
                {
                    
                     
        $rules= [

                'name' => 'required',
                'slug'=>['required',new CheckSlugRule ,'unique:occasions','max:100'],
                'gender_id'=>'required | numeric',
                'status'=>'required|numeric'
            ];


                if ($request->hasFile('banner_1')) {
// 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:min_width=350,min_height=600',

                       $rules['banner_1']= 'required|mimes:jpeg,jpg,png|max:1020';
                  }

                   if ($request->hasFile('banner_2')) {


                       $rules['banner_2']= 'required|mimes:jpeg,jpg,png|max:1020';
                  }

                   if ($request->hasFile('banner_3')) {

                       $rules['banner_3']= 'required|mimes:jpeg,jpg,png|max:1020';
                  } 

                  if ($request->hasFile('banner_4')) {

                       $rules['banner_4']= 'required|mimes:jpeg,jpg,png|max:1020';
                  } 

                   if ($request->hasFile('banner_5')) {

                       $rules['banner_5']= 'required|mimes:jpeg,jpg,png|max:1020';
                  } 

                  return $rules; 
    

                }
                case 'PUT':
                case 'PATCH':
                {
                    $id=$this->route()->parameter('occasion');

            $rules= [
            'name' => 'required',
            'slug'=>['required',new CheckSlugRule,"unique:occasions,slug,$id.",'max:50'],
            'gender_id'=>'required | numeric',
            'status'=>'required | numeric'
            ];

                if ($request->hasFile('banner_1')) 
                {

                       $rules['banner_1']= 'required|mimes:jpeg,jpg,png|max:1020';
                }

               if ($request->hasFile('banner_2'))
               {


                       $rules['banner_2']= 'required|mimes:jpeg,jpg,png|max:1020';
               }

              if ($request->hasFile('banner_3')) 
               {

                     $rules['banner_3']= 'required|mimes:jpeg,jpg,png|max:1020';
               } 

             if ($request->hasFile('banner_4')) 
               {

                       $rules['banner_4']= 'required|mimes:jpeg,jpg,png|max:1020';
               } 

            if ($request->hasFile('banner_5'))
             {

                       $rules['banner_5']= 'required|mimes:jpeg,jpg,png|max:1020';
             } 



                  return $rules; 


                }

                default:break;
            }
        
    }
}
