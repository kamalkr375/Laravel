<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Country;
use Validator;
use Auth;
use DB;


class CountryController extends Controller
{
	
	public function __construct()
     {
          $this->middleware('auth:admin');
     }	
	
	 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $data = Country::orderBy('id', 'desc')->paginate(20);
          return view('admin.country-index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.country-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->Validate($request,[
                            'name' => 'required | unique:countries'
                          ]);

          Country::create(['name' => $request->name]);

          return redirect()->route('country.index')->with('success','country added successfully');
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
                  $data=Country::find($id);
                  return view('admin.country-update')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
          $this->Validate($request,[
                              'name' => "required | unique:countries,name,$id"
                       ]);
					   
					   
                  Country::where('id', $id)->update([ 'name' => $request->name]);

                   return redirect()->route('country.index')->with('success','Country Update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          DB::table('countries')->delete($id);
          return redirect()->route('country.index')->with('success','Country deleted successfully');
    }
}
