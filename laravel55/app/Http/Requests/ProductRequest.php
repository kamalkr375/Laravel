<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use App\Rules\CheckSlugRule;

class ProductRequest extends FormRequest
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
                'slug'=>['required',new CheckSlugRule ,'unique:products','max:100'],
                'category_id'=>'required | numeric',
                'subcategory_id'=>'required | numeric',
                'brand_id'=>'required | numeric',
                'vendor_id'=>'required | numeric',
                'code'=>'required',
                'barcode'=>'required',
                'quantity'=>'required | numeric',
                'inr_price'=>'required|regex:/^\d*(\.\d{1,2})?$/',
                'gender_id'=>'required | numeric',
                'status'=>'required | numeric'
              ];


              

                   /* if ($request->hasFile('image_2')) {


                       $rules['image_2']= 'required|mimes:jpeg,jpg,png|max:1020';
                  }

                   if ($request->hasFile('image_3')) {

                       $rules['image_3']= 'required|mimes:jpeg,jpg,png|max:1020';
                  } 

                  if ($request->hasFile('image_4')) {

                       $rules['image_4']= 'required|mimes:jpeg,jpg,png|max:1020';
                  } 

                   if ($request->hasFile('image_5')) {

                       $rules['image_5']= 'required|mimes:jpeg,jpg,png|max:1020';
                  }  */

                  return $rules; 
    

                }
                case 'PUT':
                case 'PATCH':
                {
                    $id=$this->route()->parameter('product');

                $rules= [
                    'name' => 'required',
                    'slug'=>['required',new CheckSlugRule,"unique:products,slug,$id.",'max:50'],
                    'category_id'=>'required | numeric',
                    'subcategory_id'=>'required | numeric',
                    'brand_id'=>'required | numeric',
                    'vendor_id'=>'required | numeric',
                    'code'=>'required',
                    'barcode'=>'required',
                    'quantity'=>'required | numeric',
                    'inr_price'=>'required|regex:/^\d*(\.\d{1,2})?$/',
                    'gender_id'=>'required | numeric',
                    'status'=>'required | numeric'
                 ];

                if ($request->hasFile('image_1')) 
                {

                       $rules['image_1']= 'required|mimes:jpeg,jpg,png|max:1020';
                }

               if ($request->hasFile('image_2'))
               {


                       $rules['image_2']= 'required|mimes:jpeg,jpg,png|max:1020';
               }

              if ($request->hasFile('image_3')) 
               {

                     $rules['image_3']= 'required|mimes:jpeg,jpg,png|max:1020';
               } 

             if ($request->hasFile('image_4')) 
               {

                       $rules['image_4']= 'required|mimes:jpeg,jpg,png|max:1020';
               } 

            if ($request->hasFile('image_5'))
             {

                       $rules['image_5']= 'required|mimes:jpeg,jpg,png|max:1020';
             } 



                  return $rules; 


                }

                default:break;
            }
        
    }
}
