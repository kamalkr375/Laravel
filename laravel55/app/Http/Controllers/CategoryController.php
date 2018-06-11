<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use Illuminate\Support\Facades\Input;
use App\Category;
use Validator;
use Image;
use Auth;
use DB;


class CategoryController extends Controller
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
        $category = Category::orderBy('id', 'desc')->paginate(10);
        return view('admin.category-index',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {

            $icon=NULL;



           if ($request->hasFile('icon'))
           {
                $filename='icon';
                $smallpath=NULL;
                $mediumpath=NULL;
                $original='/images/category';
                $icon= $this->imageupload($filename,$smallpath,$mediumpath,$original);
           }

		   
		   $mydata=[ 'name' => $request->name,
                              'slug' => $request->slug,
                              'meta_description' => $request->meta_description,
                              'icon' =>$icon,
							  'discount_type' =>$request->discount_type,
							  'discount'=>$request->discount,
                              'status'=>$request->status
                          ];
						  
						 
          Category::create($mydata);

        return redirect()->route('category.index')->with('success','Category added successfully');
         
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
          $data=Category::find($id);
          
          return view('admin.category-update')->with(['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, $id)
    {
        

                    $data=  [ 'name' => $request->name,
                              'slug' => $request->slug,
                              'meta_description' => $request->meta_description,
							  'discount_type' =>$request->discount_type,
							  'discount'=>$request->discount,
                              'status'=>$request->status
                      
                          ];

           if ($request->hasFile('icon'))
           {
                $filename='icon';
                $smallpath=NULL;
                $mediumpath=NULL;
                $original='/images/category';
                $icon= $this->imageupload($filename,$smallpath,$mediumpath,$original);

                $data['icon']=$icon;
           }

        Category::where('id', $id)->update($data);
        return redirect()->route('category.index')->with('success','Category updated successfully');;

        //========= Update Data
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
           DB::table('categories')->delete($id);
          return redirect()->route('category.index')->with('success','Category deleted successfully');
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
	
	
	
	

    
    //======== 
}
