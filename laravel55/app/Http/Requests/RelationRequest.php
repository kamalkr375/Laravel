<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use App\Rules\CheckSlugRule;

class RelationRequest extends FormRequest
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
                'banner'=>'required|mimes:jpeg,jpg,png|max:1020',
                'slug'=>['required',new CheckSlugRule ,'unique:relations','max:100'],
                'city_relationship'=>'required | numeric',
                'gender_id'=>'required | numeric',
                'status'=>'required|numeric'
            ];



                  return $rules; 
    

                }
                case 'PUT':
                case 'PATCH':
                {
                    $id=$this->route()->parameter('relation');

        $rules= [
        'name' => 'required',
        'slug'=>['required',new CheckSlugRule,"unique:relations,slug,$id.",'max:50'],
        'gender_id'=>'required | numeric',
        'city_relationship'=>'required | numeric',
        'status'=>'required | numeric'
        ];


                  return $rules; 


                }

                default:break;
            }
        
    }
}
