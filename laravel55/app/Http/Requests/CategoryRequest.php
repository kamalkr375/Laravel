<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use App\Rules\CheckSlugRule;

class CategoryRequest extends FormRequest
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
                        'slug'=>['required',new CheckSlugRule ,'unique:categories','max:100'],
                        'status'=>'required|numeric'
                 ];



                 if ($request->hasFile('icon')) {
// 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:min_width=350,min_height=600',

                       $rules['icon']= 'required|mimes:jpeg,jpg,png,gif|max:1020';
                  }

                  return $rules; 
    

                }
                case 'PUT':
                case 'PATCH':
                {
                    $id=$this->route()->parameter('category');

                    $rules= [
                        'name' => 'required',
                        'slug'=>['required',new CheckSlugRule,"unique:categories,slug,$id.",'max:50'],
                        'status'=>'required | numeric'
                      ];
					  
                 if ($request->hasFile('icon')) {
// 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:min_width=350,min_height=600',

                       $rules['icon']= 'required|mimes:jpeg,jpg,png,gif|max:1020';
                  }

                  return $rules; 


                }

                default:break;
            }

    }
}
