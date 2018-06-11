<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BrandRequest;
use App\Brand;
use Validator;
use DB;

class BrandController extends Controller
{
    //
    public function __construct()
     {
          $this->middleware('auth:admin');
     }

    public function index()
    {
          $brand = Brand::orderBy('id', 'desc')->paginate(10);
          return view('admin.brand-index',compact('brand'));
      
    }

    public function create()
    {
          return view('admin.brand-create');
    }

    public function store(BrandRequest $request)
    {

	   $newLogoName='';

    	if ($request->hasFile('logo'))
       {
            $logo      = $request->file('logo'); //Temp Name
            $logo_extension= $logo->getClientOriginalExtension(); //Extension
            $logo_name_with_extension = $logo->getClientOriginalName(); //Name
            $logo_name_without_extension = pathinfo($logo_name_with_extension, PATHINFO_FILENAME);
            $newLogoName =$logo_name_without_extension.'-'.time().'.'.$logo_extension;
            $destinationPath = public_path('/images/brands');
            $logo->move($destinationPath,$newLogoName);
           
        }
        
          Brand::create(  ['name' => $request->name,
                          'slug' => $request->slug,
                          'description' => $request->description,
                          'logo' =>$newLogoName]);

           return redirect()->route('admin.brand.index')
                        ->with('success','Brand created successfully');
    }

    public function edit($id)
    {
        
        $brand=Brand::find($id);

        return view('admin.brand-update')->with('brand',$brand);
    }

    public function update(BrandRequest $request, $id)
    {
            

        $data=       ['name' => $request->name,
                      'slug' => $request->slug,
                      'description' => $request->description,
                      ];

      if ($request->hasFile('logo'))
       {
            $logo      = $request->file('logo'); //Temp Name
            $logo_extension= $logo->getClientOriginalExtension(); //Extension
            $logo_name_with_extension = $logo->getClientOriginalName(); //Name
            $logo_name_without_extension = pathinfo($logo_name_with_extension, PATHINFO_FILENAME);
            $newLogoName =$logo_name_without_extension.'-'.time().'.'.$logo_extension;
            $destinationPath = public_path('/images/brands');
            $logo->move($destinationPath,$newLogoName);
            $data['logo']=$newLogoName;
           
        }
          
         Brand::where('id', $id)->update($data);
        return redirect()->route('admin.brand.index')->with('success','Brand update successfully');;
    }

     public function destroy($id)
    {
       DB::table('brands')->delete($id);
       return redirect()->route('admin.brand.index')->with('success','Brand deleted successfully');
    }


   



}
