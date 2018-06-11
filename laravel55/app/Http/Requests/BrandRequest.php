<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\CheckSlugRule;
use Illuminate\Http\Request;
class BrandRequest extends FormRequest
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


        //===================== How To Use Content 

   
          switch($this->method())
            {
                case 'GET':
                case 'DELETE':
                {
                    return [];
                }
                case 'POST':
                {
                    return [
                                'name' => 'required',
                                'slug'=>['required',new CheckSlugRule ,'unique:brands','max:50'],
                                'description'=>'required'
                           ];
							
							
				      if($request->hasFile('logo'))
                        {
                              $rules['logo']= 'required|mimes:jpeg,jpg,png,gif|max:50';
                        }			
							
                }
                case 'PUT':
                case 'PATCH':
                {

                     $id=$this->route()->parameter('brand');

                     $rules= [
                            'name' => 'required',
                            'slug'=>['required',new CheckSlugRule,"unique:brands,slug,$id.",'max:50'],
                            'description'=>'required'
                      ];

                    if($request->hasFile('logo'))
                        {
                              $rules['logo']= 'required|mimes:jpeg,jpg,png,gif|max:20';
                        }

                  return $rules;


                }

                default:break;
            }



        //============ End Use Content =======
    }
}
