<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use App\Rules\CheckSlugRule;
use Illuminate\Http\Request;
use App\Gender;
use Validator;
use DB;


class GenderController extends Controller
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
        //
          $data = Gender::orderBy('id', 'desc')->paginate(10);
          return view('admin.gender-index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
          return view('admin.gender-create');
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
                           'name' => 'required',
                           'slug'=>['required',new CheckSlugRule ,'unique:genders','max:50'],
                           'status'=>'required'
                       ]);

          Gender::create( [ 'name' => $request->name,
                           'slug' => $request->slug,
                           'description' => $request->description,
                           'status'=>$request->status
                      ]);


        return redirect()->route('gender.index')->with('success','Gender added successfully');;
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
          $data=Gender::find($id);

        return view('admin.gender-update')->with('data',$data);
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
                           'name' => 'required',
                           'slug'=>['required',new CheckSlugRule,"unique:genders,slug,$id.",'max:50'],
                           'status'=>'required'
                       ]);


            Gender::where('id', $id)->update([ 'name' => $request->name,
                                               'slug' => $request->slug,
                                               'description' => $request->description,
                                               'status'=>$request->status
                                           ]);


        return redirect()->route('gender.index')->with('success','Gender added successfully');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            DB::table('genders')->delete($id);
          return redirect()->route('gender.index')->with('success','Gender deleted successfully');
    }
}
