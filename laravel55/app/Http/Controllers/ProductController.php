<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\Input;
use App\ProductFilterAttribute;
use App\ProductOccasion;
use App\ProductRelation;
use App\Subcategory;
use App\Category;
use App\Occasion;
use App\Relation;
use App\Product;
use App\Gender;
Use App\Vendor;
Use App\Brand;
use Validator;
use Image;
use DB;


class ProductController extends Controller
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
          $dataval = Product::orderBy('id', 'desc')->with(['occasions','relations','filters','attributes'])->get();
          return view('admin.product-index',compact('dataval'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
              $genders=Gender::All();
              $categories =Category::All();
              $brands=Brand::All();
              $Vendors=Vendor::All();
              $occasions=Occasion::All();
              $relations=Relation::All();
        return view('admin.product-create')->with(['genders'=>$genders,'categories'=>$categories,
        	                                       'brands'=>$brands,'vendors'=>$Vendors,'occasions'=>$occasions,'relations'=>$relations]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
		
		$imgList=array();
		foreach($_FILES as $imgind=>$imgval){
		
		    	$filename=$imgind;
                $smallpath='/images/product/small';
                $mediumpath='/images/product/medium';
                $largepath='/images/product/large';
                $imgname= $this->imageupload($filename,$smallpath,$mediumpath,$largepath);
			    $imgpo = str_replace('image-',"",$imgind);
			    $imgList[$imgpo]=array('priority'=>$imgpo, 'type'=>'img', 'name'=>$imgind,'value'=>$imgname);
		}
		
		//For Video
		
		if(!empty($request->video)){	
			foreach($request->video as $vind=>$vval){
			
			     $imgList[$vind]=array('priority'=>$vind, 'type'=>'video', 'name'=>$vind,'value'=>$vval);
			}
		}
		
         
		$imgList=$this->sortingimg($imgList);
	    $images= json_encode($imgList);
		
        $myProductData=[
			  'name' => $request->name,
			  'slug' => $request->slug,
			  'title' => $request->title,
			  'info' => $request->info,
			  'description' => $request->description,
			  'code' => $request->code,
			  'barcode' => $request->barcode,
			  'category_id' => $request->category_id,
			  'subcategory_id' => $request->subcategory_id,
			  'brand_id' => $request->brand_id,
			  'vendor_id' => $request->vendor_id,
			  'gender_id' => $request->gender_id,
			  'images'=>$images,
			  'is_combo' => $request->is_combo or 0,
			  'quantity' => $request->quantity,
			  'quantity_limitation_without_inventory' => $request->quantity_limitation_without_inventory or 0,
			  'negative_quantity_allow' => $request->negative_quantity_allow or 0,
			  'inr_price' => $request->inr_price,
			  'rack' => $request->rack,
			  'new'=>$request->new or 0,
			  'home_menu'=>$request->home_menu or 0,
			  'hot_seller'=>$request->hot_seller or 0,
			  'discount_type'=>$request->discount_type,
			  'discount'=>$request->discount,
			  'status'=>$request->status
          ];
		  
	 $product=Product::create($myProductData);


	 $product_id=$product->id;



     
     //======== Product Occasion 
	 

     if(!empty($request->occasion_id)){

         if(count($request->occasion_id)>0){

   	        foreach($request->occasion_id as $occasionval):

                   $subcategoryFilter=ProductOccasion::create([
                                                    'product_id' => $product_id,
		                                            'occasion_id' => $occasionval
                                               ]);
             endforeach;
          }
      }


		    //======== Product Relation  
		if(!empty($request->relation_id)){

		      if(count($request->relation_id)>0){

		   	        foreach($request->relation_id as $relation):

		                   $subcategoryFilter=ProductRelation::create([
		                                                    'product_id' => $product_id,
				                                            'relation_id' => $relation
		                                               ]);
		             endforeach;
		         }

		    }

		         //======== Product Relation Attribute

		    if(!empty($request->filter)){

		                if(count($request->filter)>0){

		   	        foreach($request->filter as $findex=>$fval):


						foreach($fval['value'] as $fvall):

				                          ProductFilterAttribute::create([
						                                    'product_id' => $product_id,
						                                    'subcategory_filter_id' => $findex,
						                                    'subcategory_filter_attribute_id'=>$fvall
						                               ]);
						endforeach;

		             endforeach;
		          }

		      }


 

    return redirect()->route('product.index')->with('success','Product added successfully');
   }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
              $genders=Gender::All();
              $categories =Category::All();
              $brands=Brand::All();
              $Vendors=Vendor::All();
              $occasions=Occasion::All();
              $relations=Relation::All();

  $data=Product::with(['occasions','relations','filters','attributes'])->findOrFail($id);

  $subcategories=Category::with(['subcategory'])->findOrFail($data->category_id)->subcategory;

  $subCatFilters= Subcategory::with(['filters','filters.attributes'])->findOrFail($data->subcategory_id);

//=== Get spacific product's attribute of filter using laravel 
  $getfilterattr=ProductFilterAttribute::where('product_id', $id)->select('id','subcategory_filter_id','subcategory_filter_attribute_id')->get();

    $attributes=[];

   if(sizeof($getfilterattr) >0){

       foreach($getfilterattr as $getfilter):

            $attributes[]=$getfilter->subcategory_filter_attribute_id;

       endforeach;
   }

                
                $with=[
	                    'data'=>$data,
	              	    'genders'=>$genders,
	                    'categories'=>$categories,
	                    'subcategoryList'=>$subcategories,
	        	        'brands'=>$brands,
	        	        'vendors'=>$Vendors,
	        	        'occasions'=>$occasions,
	        	        'relations'=>$relations,
	        	        'filters'=>$subCatFilters,
	        	        'attributes'=>$attributes

        	      ];

         return view('admin.product-update')->with($with);
         

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
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
		
		
		
		//For Video
		
		if(!empty($request->video)){	
			foreach($request->video as $vind=>$vval){
			     $imgList[$vind]=array('priority'=>$vind, 'type'=>'video', 'name'=>$vind,'value'=>$vval);
			}
		}
		
         
		$imgList=$this->sortingimg($imgList);
	
	    $images= json_encode($imgList);
		
           $myProductData=[
			  'name' => $request->name,
			  'slug' => $request->slug,
			  'title' => $request->title,
			  'info' => $request->info,
			  'description' => $request->description,
			  'code' => $request->code,
			  'barcode' => $request->barcode,
			  'category_id' => $request->category_id,
			  'subcategory_id' => $request->subcategory_id,
			  'brand_id' => $request->brand_id,
			  'vendor_id' => $request->vendor_id,
			  'gender_id' => $request->gender_id,
			  'images'=>$images,
			  'is_combo' => $request->is_combo or 0,
			  'quantity' => $request->quantity,
			  'quantity_limitation_without_inventory' => $request->quantity_limitation_without_inventory or 0,
			  'negative_quantity_allow' => $request->negative_quantity_allow or 0,
			  'inr_price' => $request->inr_price,
			  'rack' => $request->rack,
			  'new'=>$request->new or 0,
			  'home_menu'=>$request->home_menu or 0,
			  'hot_seller'=>$request->hot_seller or 0,
			  'discount_type'=>$request->discount_type,
			  'discount'=>$request->discount,
			  'status'=>$request->status
          ];
		  

       Product::where('id', $id)->update($myProductData);
       $product_id = $id;

       //Delete All Records

    ProductOccasion::where('product_id',$id)->delete();
    ProductRelation::where('product_id',$id)->delete();
    ProductFilterAttribute::where('product_id',$id)->delete();

 //======== Product Occasion 

     if(!empty($request->occasion_id)){

         if(count($request->occasion_id)>0){

   	        foreach($request->occasion_id as $occasionval):

                   $subcategoryFilter=ProductOccasion::create([
                                                    'product_id' => $product_id,
		                                            'occasion_id' => $occasionval
                                               ]);
             endforeach;
          }
      }


		    //======== Product Relation  
		if(!empty($request->relation_id)){

		      if(count($request->relation_id)>0){

		   	        foreach($request->relation_id as $relation):

		                   $subcategoryFilter=ProductRelation::create([
		                                                    'product_id' => $product_id,
				                                            'relation_id' => $relation
		                                               ]);
		             endforeach;
		         }

		    }

		         //======== Product Relation Attribute

		    if(!empty($request->filter)){

		                if(count($request->filter)>0){

		   	        foreach($request->filter as $findex=>$fval):


						foreach($fval['value'] as $fvall):

				                          ProductFilterAttribute::create([
						                                    'product_id' => $product_id,
						                                    'subcategory_filter_id' => $findex,
						                                    'subcategory_filter_attribute_id'=>$fvall
						                               ]);
						endforeach;

		             endforeach;
		          }

		      }


        return redirect()->route('product.index')->with('success','Product updated successfully');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function destroy($id)
    {
       DB::table('products')->delete($id);
       return redirect()->route('product.index')->with('success','Product deleted successfully');
    }







public function categoryajax(Request $request){

	//echo $cid;

	$cid=$request->cid;

	$data= DB::table('subcategories')->where('category_id',$cid)->get();

	echo $data;
}


 public function subcatfilterajax(Request $request){

			$cid=$request->subcatid;

			$data= Subcategory::with(['filters','filters.attributes'])->findOrFail($cid);

			if($data->id){

				return view('admin.product-subcategory-filter-ajax')->with(['data'=>$data]);

			}else{

				return '';
			} 
    }
	
	public function imageajax($priority)
	{
		
			$img='<div class="form-group col-md-12 oa-img-video-admin-section-'.$priority.'">
			      <label>Image <i class="fa fa-close fa-2x" name="del_item" value="Delete" onclick="deleteimgvideo('.$priority.');"></i></label>
			      <input type="file" required name="image-'.$priority.'" class="form-control col-md-6"/>
			      </div>';
				  
		    return $img;
		
	}
	
	public function videoajax($priority)
	{
		
		$img='<div class="form-group col-md-12 oa-img-video-admin-section-'.$priority.'">
			      <label>Video <i class="fa fa-close fa-2x" name="del_item" value="Delete" onclick="deleteimgvideo('.$priority.');"></i></label>
			      <input type="text" required name="video['.$priority.']" class="form-control col-md-6"/>
				 
			      </div>  ';
				  
		    return $img;
		
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
