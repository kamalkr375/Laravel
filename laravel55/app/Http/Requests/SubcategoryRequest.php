<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use App\Rules\CheckSlugRule;

class SubcategoryRequest extends FormRequest
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
                        'slug'=>['required',new CheckSlugRule ,'unique:subcategories','max:100'],
                        'category_id'=>'required | numeric',
                        'status'=>'required|numeric'
                 ];


                  return $rules; 
    

                }
                case 'PUT':
                case 'PATCH':
                {
                    $id=$this->route()->parameter('subcategory');

                    $rules= [
						'name' => 'required',
						'slug'=>['required',new CheckSlugRule,"unique:subcategories,slug,$id.",'max:50'],
						'category_id'=>'required | numeric',
						'status'=>'required | numeric'
                    ];

                  return $rules; 


                }

                default:break;
            }
        
    }








    //============ Don't Touch Under This Line 

}
