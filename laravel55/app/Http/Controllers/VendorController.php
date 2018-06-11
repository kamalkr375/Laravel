<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\VendorRequest;
use App\Rules\CheckWebsiteUrlRule;
use App\Vendor;
use Validator;
use DB;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
     {
          $this->middleware('auth:admin');
     }

    public function index()
    {
        

          $vendor = Vendor::orderBy('id', 'desc')->paginate(2);
        return view('admin.vendor-index',compact('vendor'));
        // return view('admin.vendor-index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        

          return view('admin.vendor-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VendorRequest $request)
    {

        // dd($request->all());
          Vendor::create($request->all());
           return redirect()->route('vendor.index')
                        ->with('success','Vendor created successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $vendor=Vendor::find($id);

        return view('admin.vendor-update')->with('vendor',$vendor);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {  //"unique:brands,slug,$id."
          $validatedData = $request->validate([
                                'name'=>'required|unique:vendors,name,'.$id,
                                'address'=>'required',
                                'phone_number'=>'required',
                                'website'=>['required', new CheckWebsiteUrlRule,"unique:vendors,website,$id"]
                            ]);

         Vendor::where('id', $id)->update(['name' =>$request->name,
                                           'address' =>$request->address,
                                           'phone_number' =>$request->phone_number,
                                           'website' =>$request->website
                                        ]);
        return redirect()->route('vendor.index')->with('success','Vendor update successfully');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       DB::table('vendors')->delete($id);
       return redirect()->route('vendor.index')->with('success','Vendor deleted successfully');
    }
}
