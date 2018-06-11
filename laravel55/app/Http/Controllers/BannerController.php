<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use App\Http\Requests\BannerRequest;
use Illuminate\Http\Request;
use App\Banner;
use Validator;
use Image;
use DB;

class BannerController extends Controller
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
         $banner = Banner::orderBy('id', 'desc')->paginate(10);
        return view('admin.banner-index',compact('banner'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.banner-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BannerRequest $request)
    {

            if ($request->hasFile('banner'))
             {

                $filename='banner';
                $smallpath='/images/banner/small';
                $mediumpath='/images/banner/medium';
                $largepath='/images/banner/large';
                $new_banner_name= $this->imageupload($filename,$smallpath,$mediumpath,$largepath);
             }
        

           Banner::create(['title' => $request->title,
                          'url' => $request->url,
                          'event_tracking' => $request->event_tracking,
                          'alt_tag' =>$request->alt_tag,
                          'banner' =>$new_banner_name]);

           return redirect()->route('banner.index')
                        ->with('success','Banner created successfully');

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
          $banner=Banner::find($id);

        return view('admin.banner-update')->with('banner',$banner);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BannerRequest $request, $id)
    {
        

            $data= [ 'title' => $request->title,
                     'url' => $request->url,
                     'event_tracking' => $request->event_tracking,
                     'alt_tag' =>$request->alt_tag
                  ];


         if ($request->hasFile('banner'))
           {

                $filename='banner';
                $smallpath='/images/banner/small';
                $mediumpath='/images/banner/medium';
                $largepath='/images/banner/large';

                $new_banner_name= $this->imageupload($filename,$smallpath,$mediumpath,$largepath);
    
                $data['banner']=$new_banner_name;
          }

        Banner::where('id', $id)->update($data);
        return redirect()->route('banner.index')->with('success','Banner updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('banners')->delete($id);
       return redirect()->route('banner.index')->with('success','Banner deleted successfully');
    }





public function imageupload($filename,$smallpath,$mediumpath,$original){


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




}
