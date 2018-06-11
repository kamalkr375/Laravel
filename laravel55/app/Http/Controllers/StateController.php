<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\State;
use App\Country; 
use Validator;
use Auth;
use DB;


class StateController extends Controller
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
         $data = State::orderBy('id', 'desc')->paginate(20);
          return view('admin.state-index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		 $country  = Country::all();
        return view('admin.state-create')->with(['country'=>$country]);
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
                            'name' => 'required | unique:states',
                          ]);

          State::create(['country_id'=>$request->country_id,'name' => $request->name]);

          return redirect()->route('state.index')->with('success','State added successfully');
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
			$data=State::find($id);
			return view('admin.state-update')->with(['data'=>$data ,'country'=>$country]);
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
                              'name' => "required | unique:states,name,$id"
                       ]);
					
                   State::where('id', $id)->update([ 'name' => $request->name,'country_id'=>$request->country_id]);

                   return redirect()->route('state.index')->with('success','State Update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          DB::table('states')->delete($id);
          return redirect()->route('state.index')->with('success','States deleted successfully');
    }
}
