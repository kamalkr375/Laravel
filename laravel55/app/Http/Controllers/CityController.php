<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Country; 
use App\State;
use Validator;
use App\City;
use Auth;
use DB;


class CityController extends Controller
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
         $data = City::orderBy('id', 'desc')->paginate(20);
          return view('admin.city-index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		 $country  = Country::all();
		 $state  = State::all();
        return view('admin.city-create')->with(['country'=>$country,'state'=>$state]);
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
		                    'country_id'=>'required',
							'state_id'=>'required',
                            'name' => 'required | unique:cities',
                          ]);

          City::create(['country_id'=>$request->country_id,'state_id'=>$request->state_id,'name' => $request->name]);

          return redirect()->route('city.index')->with('success','City added successfully');
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
		    $country  = Country::all();
			$data=City::find($id);
			$country_id= $data->country_id;
			$state=DB::table('states')->where('country_id',$country_id)->get();
			return view('admin.city-update')->with(['data'=>$data ,'state'=>$state,'country'=>$country]);
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
		                      'country_id'=>'required',
							  'state_id'=>'required',
                              'name' => "required | unique:cities,name,$id"
                       ]);
					
       City::where('id', $id)->update([ 'name' => $request->name,'state_id'=>$request->state_id,'country_id'=>$request->country_id]);

                   return redirect()->route('city.index')->with('success','City Update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          DB::table('cities')->delete($id);
          return redirect()->route('city.index')->with('success','City deleted successfully');
    }
	
	
	
    public function getstateajax()
    {  
	       $cid =$_GET['cid'];
		   
		   
		   $data= DB::table('states')->where('country_id',$cid)->get();
		   
		   return $data; 
		   
    }
	
	
	
	//================================================= Don't Touch ================================
}
