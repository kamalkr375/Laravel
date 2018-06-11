<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AffiliateRequest;
use App\Rules\CheckWebsiteUrlRule;
use App\Affiliate;
use Validator;
use DB;


class AffiliateController extends Controller
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
         $affiliate = Affiliate::orderBy('id', 'desc')->paginate(10);
        return view('admin.affiliate-index',compact('affiliate'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
           return view('admin.affiliate-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AffiliateRequest $request)
    {

        // dd($request->all());
          Affiliate::create($request->all());
           return redirect()->route('affiliate.index')
                        ->with('success','Affiliate created successfully');
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
          $affiliate=Affiliate::find($id);

          return view('admin.affiliate-update')->with('affiliate',$affiliate);
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
           $validatedData = $request->validate([
                                'name'=>'required',
                                'address'=>'required',
                                'phone_number'=>'required',
                                'website'=>['required', new CheckWebsiteUrlRule],
                                 'commission'=>'required|integer|between:1,100'
                            ]);

         Affiliate::where('id', $id)->update(['name' =>$request->name,
                                           'address' =>$request->address,
                                           'phone_number' =>$request->phone_number,
                                           'website' =>$request->website,
                                            'commission' =>$request->commission
                                        ]);

        return redirect()->route('affiliate.index')->with('success','Affiliate update successfully');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          DB::table('affiliates')->delete($id);
         return redirect()->route('affiliate.index')->with('success','Affiliate deleted successfully');
    }
}
