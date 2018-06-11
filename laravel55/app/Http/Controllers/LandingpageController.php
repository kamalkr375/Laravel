<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Landingpage;
use App\LandingpageCategory;
Use App\LandingpageSubcategory;
use App\Subcategory;
use App\Category;
use App\Product; 
use App\Country; 
use App\State;
use App\City;
use Validator;
use Image;
use Auth;
use DB;

class LandingpageController extends Controller
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
           $dataval = Landingpage::orderBy('id', 'desc')->get();
		   
		   foreach($dataval as $dval){
			   
			         if($dval->page_type=='ocassion'){
						 
						$dval->page_type_category_name= $dval->occasion->name;
		
						 
					 }elseif($dval->page_type=='gender'){
						 
						 $dval->page_type_category_name= $dval->occasion->name;
						 
					 }elseif($dval->page_type=='relationship'){
						  
						  $dval->page_type_category_name= $dval->occasion->name;
					 }
		     }
			 
           return view('admin.landingpage-index',compact('dataval'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $country  = Country::all();
		$state    = State::all();
		$city     = City::all();
		$category= Category::all();
        return view('admin.landingpage-create')->with(['country'=>$country,'state'=>$state,'city'=>$city,'category'=>$category]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           
		   $imgList=array();
		   foreach($_FILES as $imgind=>$imgval){
		
		    	$filename=$imgind;
                $smallpath='/images/landingpage/small';
                $mediumpath='/images/landingpage/medium';
                $largepath='/images/landingpage/large';
                $imgname= $this->imageupload($filename,$smallpath,$mediumpath,$largepath);
			    $imgpo = str_replace('image-',"",$imgind);
			    $imgList[$imgpo]=array('priority'=>$imgpo, 'type'=>'img', 'name'=>$imgind,'value'=>$imgname);
		    }
	
		
		$imgList=$this->sortingimg($imgList);
	    $images= json_encode($imgList);
	  
	
		
		
		
        $myProductData=[
			  'page_type' => $request->page_type,
			  'page_type_category_id' => $request->page_type_category_id,
			  'name' => $request->name,
			  'heading_name' => $request->heading_name,
			  'images'=>$images,
			  'status'=>$request->status
           ];
		  
	 $landingpage=Landingpage::create($myProductData);


	 $landingpage_id=$landingpage->id;
		   
		   
		   
		  //======== Landing Menu  
	 

     if(!empty($request->menu)){

         if(count($request->menu)>0){
			 
			 //=== Category  

   	        foreach($request->menu as $menuVal):

                   $landingpageCategory =  LandingpageCategory::create([
                                                    'landingpage_id' => $landingpage_id,
		                                            'category_id' => $menuVal['category_id'],
													'priority'=>$menuVal['priority'],
                                               ]);
											   
				  $landingpage_category_id=$landingpageCategory->id;							   
											   
			         //=== Subcategory 								   
											   	   
							if(!empty($menuVal['subcategory_id'])){

										if(count($menuVal['subcategory_id'])>0){	

										      foreach($menuVal['subcategory_id'] as $subcatVal):
											  
											  $landingpageSubcategory =  LandingpageSubcategory::create([
                                                    'landingpage_id' => $landingpage_id,
		                                            'landingpage_category_id' => $landingpage_category_id,
													'subcategory_id'=>$subcatVal
                                               ]);
											  
											  endforeach;
										}
							  }								
											  
                    // End Subcategory						
											   
             endforeach;
          }
		  
		  
		  
		    return redirect()->route('landingpage.index')->with('success','Product added successfully');
		  
      }
		   
		   
		   
		   
		   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
		$state    = State::all();
		$city     = City::all();
		$category= Category::all();
		$data=Landingpage::findOrFail($id);
		
		             if($data->page_type=='ocassion'){
						 
						 $page_type_category = DB::table('occasions')->get();
						 
					 }elseif($data->page_type=='gender'){
						 
						  $page_type_category = DB::table('genders')->get();
						 
					 }elseif($data->page_type=='relationship'){
						  
						   $page_type_category = DB::table('relations')->get();
					 }
					 
		//===========
		
		
		
	     $categoryLists= DB::table('landingpage_categories')->where('landingpage_id',$id)->get();

	    foreach($categoryLists as $catdata){
		   
		   //Get All Subcategory from category id 
				$subcatList= DB::table('subcategories')->where('category_id',$catdata->category_id)->get();
				$catdata->subcategories=$subcatList;
		
		  //Get selected  Subcategory from category id 
		 
			$selectSubcatList= DB::table('landingpage_subcategories')->where('landingpage_category_id',$catdata->id)->get();
		    $catdata->selectsubcategory=$selectSubcatList;
	   }
	   
	   $data->categoryinfo = $categoryLists;
	   
      return view('admin.landingpage-update')->with(['data'=>$data,'country'=>$country,'state'=>$state,'city'=>$city,'category'=>$category,'page_type_category'=>$page_type_category]);
	  
	  
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
        
						   
        $imgList=array();
		foreach($_FILES as $imgind=>$imgval){
			
			
			
		      if(!empty($imgval['name']))
			  {
				   
					$filename=$imgind;
					$smallpath='/images/product/small';
					$mediumpath='/images/product/medium';
					$largepath='/images/product/large';
					$imgname= $this->imageupload($filename,$smallpath,$mediumpath,$largepath);
					$imgpo = str_replace('image-',"",$imgind);
					$imgList[$imgpo]=array('priority'=>$imgpo, 'type'=>'img', 'name'=>$imgind,'value'=>$imgname);
					
			  }else{
			
					$imgpo = str_replace('image-',"",$imgind);
					$hidenval =$_POST["hidden-image-$imgpo"];
					$imgList[$imgpo]=array('priority'=>$imgpo, 'type'=>'img', 'name'=>$imgind,'value'=>$hidenval); 
					
				  
			  }
		}
		
		$imgList=$this->sortingimg($imgList);
	
	    $images= json_encode($imgList);
		
		
			
        $myProductData=[
			  'page_type' => $request->page_type,
			  'page_type_category_id' => $request->page_type_category_id,
			  'name' => $request->name,
			  'heading_name' => $request->heading_name,
			  'images'=>$images,
			  'status'=>$request->status
           ];
		   
		   Landingpage::where('id', $id)->update($myProductData);
		
		
		
		 LandingpageCategory::where('landingpage_id',$id)->delete();
         LandingpageSubcategory::where('landingpage_id',$id)->delete();
		 
		 
		 
		 $landingpage_id=$id;
		 
		 
		 
		   
		  //======== Landing Menu  
	 

     if(!empty($request->menu)){

         if(count($request->menu)>0){
			 
			 //=== Category  

   	        foreach($request->menu as $menuVal):

                   $landingpageCategory =  LandingpageCategory::create([
                                                    'landingpage_id' => $landingpage_id,
		                                            'category_id' => $menuVal['category_id'],
													'priority'=>$menuVal['priority'],
                                               ]);
											   
				  $landingpage_category_id=$landingpageCategory->id;							   
											   
			         //=== Subcategory 								   
											   	   
							if(!empty($menuVal['subcategory_id'])){

										if(count($menuVal['subcategory_id'])>0){	

										      foreach($menuVal['subcategory_id'] as $subcatVal):
											  
											  $landingpageSubcategory =  LandingpageSubcategory::create([
                                                    'landingpage_id' => $landingpage_id,
		                                            'landingpage_category_id' => $landingpage_category_id,
													'subcategory_id'=>$subcatVal
                                               ]);
											  
											  endforeach;
										}
							  }								
											  
                    // End Subcategory						
											   
             endforeach;
          }
		  
		   return redirect()->route('landingpage.index')->with('success','Product Update successfully');
      }
		   
		
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
	
	
	
	public function getpagetypeajax()
	{
		$page_type =$_GET['page_type'];
		$table=Null;
		
		if($page_type=='ocassion'){
			
			$table='occasions';
			
		}elseif($page_type=='gender'){
			
			$table='genders';
			
		}elseif($page_type=='relationship'){
			
			$table='relations';
			
		}
		
		$data= DB::table($table)->get();
		return $data; 
	}
	
	
	 public function getsubcategoryajax()
	{
		$catid =$_GET['catid'];
		$data= DB::table('subcategories')->where('category_id',$catid)->get();
		return $data; 
    }
	
	
	public function menuajax($priority)
	{
		
		         $category=  Category::all();
				return view('admin.landingpage-menu-ajax')->with(['priority'=>$priority,'category'=>$category]);
    }
	
	
	public function imageajax($priorityimg)
	{
		$img='<div class="form-group col-md-12 oa-img-video-admin-section-'.$priorityimg.'">
			  <label>Image <i class="fa fa-close fa-2x" name="del_item" value="Delete" onclick="deleteimgvideo('.$priorityimg.');"></i></label>
			  <input type="file" required name="image-'.$priorityimg.'" class="form-control col-md-6"/>
			  </div>';
				  
		    return $img;
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
	
	
   public function sortingimg($imgList)
	{
	  ksort($imgList);
	  $arrayImgList=array();
	  $no=1;
	  
	  foreach($imgList as $ind => $val){

	    $val['priority']=$no;
	    $arrayImgList[$no]=$val;
		  
		  $no++;
	  }
	   return $arrayImgList;
	}



	
	
	
	
	
	
	
	
	
	
	
	
//============= Don't Delete ============	
	
}
