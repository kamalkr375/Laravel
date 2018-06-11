<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RelationRequest;
use Illuminate\Support\Facades\Input;
use App\Relation;
use App\Gender;
use Validator;
use DB;
use Image;


class RelationController extends Controller
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
           $data = Relation::orderBy('id', 'desc')->paginate(10);
           return view('admin.relation-index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
              $genders=Gender::All();
        return view('admin.relation-create')->with(['genders'=>$genders]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RelationRequest $request)
    {
        
            $banner=NULL;
            

         if ($request->hasFile('banner'))
           {

                $filename='banner';
                $smallpath='/images/relation/small';
                $mediumpath='/images/relation/medium';
                $largepath='/images/relation/large';

                $banner= $this->imageupload($filename,$smallpath,$mediumpath,$largepath);

          }

          
           
        
          Relation::create( [ 'name' => $request->name,
                              'slug' => $request->slug,
                              'description' => $request->description,
                              'banner' =>$banner,
                              'gender_id'=>$request->gender_id,
                              'city_relationship'=>$request->city_relationship,
                              'status'=>$request->status
                          ]);


        return redirect()->route('relation.index')->with('success','Relation added successfully');
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
         $data=Relation::find($id);

         $genders=Gender::All();

         return view('admin.relation-update')->with(['data'=>$data,'genders'=>$genders]);
          




    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RelationRequest $request, $id)
    { 
                    $data=  [ 'name' => $request->name,
                              'slug' => $request->slug,
                              'description' => $request->description,
                              'status'=>$request->status,
                              'city_relationship'=>$request->city_relationship,
                              'gender_id'=>$request->gender_id
                          ];

         if ($request->hasFile('banner'))
           {

                $filename='banner';
                $smallpath='/images/relation/small';
                $mediumpath='/images/relation/medium';
                $largepath='/images/relation/large';
                $banner= $this->imageupload($filename,$smallpath,$mediumpath,$largepath);
                $data['banner']=$banner;

          }

         

         Relation::where('id', $id)->update($data);
       return redirect()->route('relation.index')->with('success','Relation updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  
       public function destroy($id)
    {
       DB::table('relations')->delete($id);
       return redirect()->route('relation.index')->with('success','Relation deleted successfully');
    }





 public function imageupload($filename,$smallpath,$mediumpath,$original)
    {


            $image = Input::file($filename);
            $imageOriginalName = $image->getClientOriginalName();
            $getFileName = pathinfo($imageOriginalName, PATHINFO_FILENAME);

            $filename  = $getFileName.time() . '.' . $image->getClientOriginalExtension();


             if(!empty($smallpath)):

                  $path = public_path($smallpath  .'/'. $filename);
                  Image::make($image->getRealPath())->resize(200, 200)->save($path);

             endif;


            if(!empty($mediumpath)):

                   $path = public_path($mediumpath .'/' . $filename);
                   Image::make($image->getRealPath())->resize(300, 300)->save($path);

             endif;

     

            //Original / large 

                $destinationPath = public_path($original);
                $image->move($destinationPath,$filename);

                return $filename;

    }





//======== Don't Delete 

}
