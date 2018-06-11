<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class BannerRequest extends FormRequest
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
                                'title' => 'required',
                                'url'=>'required',
                                'banner'=>'required|mimes:jpeg,jpg,png,gif|max:2000'
                          ];
                }
                case 'PUT':
                case 'PATCH':
                {

                     $id=$this->route()->parameter('banner');

                     $rules= [

                            'title'=>'required',
                            'url'  =>'required'
                      ];

                    if($request->hasFile('banner'))
                        {
                              $rules['banner']= 'required|mimes:jpeg,jpg,png,gif|max:2000';
                        }

                  return $rules;


                }

                default:break;
            }



        //============ End Use Content =======

       
 


    }
}
