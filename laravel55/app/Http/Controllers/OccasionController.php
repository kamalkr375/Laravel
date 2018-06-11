<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\OccasionRequest;
use Illuminate\Support\Facades\Input;
use App\Occasion;
use App\Gender;
use Validator;
use DB;
use Image;

class OccasionController extends Controller
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
           $data = Occasion::orderBy('id', 'desc')->paginate(10);
           return view('admin.occasion-index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
              $genders=Gender::All();
        return view('admin.occasion-create')->with(['genders'=>$genders]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OccasionRequest $request)
    {
        
            $banner_1=NULL;
            $banner_2=NULL;
            $banner_3=NULL;
            $banner_4=NULL;
            $banner_5=NULL;


         if ($request->hasFile('banner_1'))
           {

                $filename='banner_1';
                $smallpath='/images/occasion/small';
                $mediumpath='/images/occasion/medium';
                $largepath='/images/occasion/large';

                $banner_1= $this->imageupload($filename,$smallpath,$mediumpath,$largepath);

          }

          if ($request->hasFile('banner_2'))
           {


            $filename='banner_2';
            $smallpath='/images/occasion/small';
            $mediumpath='/images/occasion/medium';
            $largepath='/images/occasion/large';

            $banner_2= $this->imageupload($filename,$smallpath,$mediumpath,$largepath);
               
          }

         if ($request->hasFile('banner_3'))
           {

            $filename='banner_3';
            $smallpath='/images/occasion/small';
            $mediumpath='/images/occasion/medium';
            $largepath='/images/occasion/large';
            $banner_3= $this->imageupload($filename,$smallpath,$mediumpath,$largepath);
               
          }


           if ($request->hasFile('banner_4'))
           {

            $filename='banner_4';
            $smallpath='/images/occasion/small';
            $mediumpath='/images/occasion/medium';
            $largepath='/images/occasion/large';
            $banner_4= $this->imageupload($filename,$smallpath,$mediumpath,$largepath);
               
          }


         if ($request->hasFile('banner_5'))
           {

            $filename='banner_5';
            $smallpath='/images/occasion/small';
            $mediumpath='/images/occasion/medium';
            $largepath='/images/occasion/large';
            $banner_5= $this->imageupload($filename,$smallpath,$mediumpath,$largepath);
               
          }

           
        
          Occasion::create( [ 'name' => $request->name,
                              'slug' => $request->slug,
                              'description' => $request->description,
                              'banner_1' =>$banner_1,
                              'banner_2' =>$banner_2,
                              'banner_3' =>$banner_3,
                              'banner_4' =>$banner_4,
                              'banner_5' =>$banner_5,
                              'status'=>$request->status,
                              'gender_id'=>$request->gender_id,
                          ]);


        return redirect()->route('occasion.index')->with('success','Ocassion added successfully');
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
         $data=Occasion::find($id);

         $genders=Gender::All();

         return view('admin.occasion-update')->with(['data'=>$data,'genders'=>$genders]);
          




    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(OccasionRequest $request, $id)
    { 
                    $data=  [ 'name' => $request->name,
                              'slug' => $request->slug,
                              'description' => $request->description,
                              'status'=>$request->status,
                              'gender_id'=>$request->gender_id
                          ];

         if ($request->hasFile('banner_1'))
           {

                $filename='banner_1';
                $smallpath='/images/occasion/small';
                $mediumpath='/images/occasion/medium';
                $largepath='/images/occasion/large';

                $banner_1= $this->imageupload($filename,$smallpath,$mediumpath,$largepath);
                $data['banner_1']=$banner_1;

          }

          if ($request->hasFile('banner_2'))
           {


            $filename='banner_2';
            $smallpath='/images/occasion/small';
            $mediumpath='/images/occasion/medium';
            $largepath='/images/occasion/large';

            $banner_2= $this->imageupload($filename,$smallpath,$mediumpath,$largepath);
            $data['banner_2']=$banner_2;
               
          }

         if ($request->hasFile('banner_3'))
           {

            $filename='banner_3';
            $smallpath='/images/occasion/small';
            $mediumpath='/images/occasion/medium';
            $largepath='/images/occasion/large';
            $banner_3= $this->imageupload($filename,$smallpath,$mediumpath,$largepath);
            $data['banner_3']=$banner_3;

               
          }


           if ($request->hasFile('banner_4'))
           {

            $filename='banner_4';
            $smallpath='/images/occasion/small';
            $mediumpath='/images/occasion/medium';
            $largepath='/images/occasion/large';
            $banner_4= $this->imageupload($filename,$smallpath,$mediumpath,$largepath);
            $data['banner_4']=$banner_4;
               
          }


         if ($request->hasFile('banner_5'))
           {

            $filename='banner_5';
            $smallpath='/images/occasion/small';
            $mediumpath='/images/occasion/medium';
            $largepath='/images/occasion/large';
            $banner_5= $this->imageupload($filename,$smallpath,$mediumpath,$largepath);
            $data['banner_5']=$banner_5;
               
          }

         Occasion::where('id', $id)->update($data);
        return redirect()->route('occasion.index')->with('success','Occasion updated successfully');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function destroy($id)
    {
       DB::table('occasions')->delete($id);
       return redirect()->route('occasion.index')->with('success','Occasion deleted successfully');
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
