<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use App\Rules\CheckSlugRule;
use Illuminate\Http\Request;
use App\Color;
use Validator;
use DB;

class ColorController extends Controller
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
          $data = Color::orderBy('id', 'desc')->paginate(2);
          return view('admin.color-index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
          return view('admin.color-create');
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
                           'status'=>'required'
                       ]);

          Color::create( [ 'name' => $request->name,
                           'status'=>$request->status
                      ]);

      return redirect()->route('color.index')->with('success','Color added successfully');
   
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
          $data=Color::find($id);

        return view('admin.color-update')->with('data',$data);
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
                           'status'=>'required'
                       ]);


            Color::where('id', $id)->update([ 'name' => $request->name,
                                               'status'=>$request->status
                                           ]);

     return redirect()->route('color.index')->with('success','Color added successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            DB::table('colors')->delete($id);
          return redirect()->route('color.index')->with('success','Color deleted successfully');
    }
}
