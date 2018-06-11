<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubcategoryRequest;
use Illuminate\Support\Facades\Input;
use App\SubcategoryFilterAttribute;
use Illuminate\Http\Request;
use App\SubcategoryFilter;
use App\Subcategory;
use App\Category;
use Validator;
use Image;
use DB;


class SubcategoryController extends Controller
{
		public function __construct()
		{
		   $this->middleware('auth:admin');
		}

		public function index()
		{

			 $data= Subcategory::orderBy('id', 'desc')->with(['filters','filters.attributes'])->get();
			 
			 return view('admin.subcategory-index',compact('data'));
		}

		public function create()
		{
			$category=Category::all();

		    return view('admin.subcategory-create',compact('category'));
		}

	  public function store(SubcategoryRequest $request)
       {
            
				 //Add Subcategory 
				
			$subcategory= Subcategory::create( [ 'name' => $request->name,
											     'slug' => $request->slug,
											     'status'=>$request->status,
												  'discount_type'=>$request->discount_type,
			                                       'discount'=>$request->discount,
											     'category_id'=>$request->category_id,
								  ]);

			$subcategory_id=$subcategory->id;


            if(!empty($request->filter)){

					if(count($request->filter)>0){


							foreach($request->filter as $filterInd => $filterVal):

							//Add Filter 
							$subcategoryFilter=SubcategoryFilter::create([
																		   'subcategory_id' => $subcategory_id,
																		   'name' => $filterVal['name']
																	    ]);

							$subcategory_filter_id= $subcategoryFilter->id;

							if(sizeof($filterVal['value'])>0){

									 foreach($filterVal['value'] as $filterAttrubute):

									//Add Filter Attribute 

											   $SubcategoryFilterAttribute=SubcategoryFilterAttribute::create([
																					   'subcategory_filter_id' => $subcategory_filter_id,
																					   'filter_value' => $filterAttrubute
																					  ]);
									 endforeach;
													  
									  }

							   endforeach; 
					   }
			}

    return redirect()->route('admin.subcategory.index')->with('success','Category added successfully');
         
    }


    public function addMoreFilterAjax($filterid)
     {
          return view('admin.subcategory-addmore-filter-ajax')->with('filterid',$filterid);
     }

    public function addMoreFilterAttributeAjax($filterid,$attributeid)
     {
         return view('admin.subcategory-addmore-filter-attribute-ajax')->with(['attributeid'=>$attributeid,'filterid'=>$filterid]);
     }





      public function edit($id)
    {

          $data= Subcategory::with(['filters','filters.attributes'])->findOrFail($id);

          $category=Category::all();

        /*  echo '<pre>';

          print_r($data->filters);
          die(); */

         return view('admin.subcategory-update')->with(['data'=>$data,'category'=>$category]);
    }
   public function update(SubcategoryRequest $request, $id)
    {
        

                    $data=  [ 'name' => $request->name,
                              'slug' => $request->slug,
                              'status'=>$request->status,
							  'discount_type'=>$request->discount_type,
			                  'discount'=>$request->discount,
                              'category_id'=>$request->category_id
                          ];





//Add Subcategory 
          Subcategory::where('id', $id)->update($data);

   $subcategory_id=$id;

   //Delete All Records 
    SubcategoryFilter::where('subcategory_id',$id)->delete();
  
    if(!empty($request->filter)){
		
	     if(count($request->filter)>0){


					foreach($request->filter as $filterInd => $filterVal):

				//Add Filter 
				   $subcategoryFilter=SubcategoryFilter::create([
																   'subcategory_id' => $subcategory_id,
																   'name' => $filterVal['name']
															   ]);

				  $subcategory_filter_id= $subcategoryFilter->id;
				  
				  

				 if(sizeof($filterVal['value'])>0){

							 foreach($filterVal['value'] as $filterAttrubute):

							//Add Filter Attribute 

									   $SubcategoryFilterAttribute=SubcategoryFilterAttribute::create([
																			   'subcategory_filter_id' => $subcategory_filter_id,
																			   'filter_value' => $filterAttrubute
																			  ]);
							 endforeach;
											  

							  }

					   endforeach; 

		    }
					   
	}

        return redirect()->route('admin.subcategory.index')->with('success','Subcategory updated successfully');;

        //========= Update Data
    }



     public function destroy($id)
    {
	   DB::table('subcategories')->delete($id);
	  return redirect()->route('admin.subcategory.index')->with('success','Subcategory deleted successfully');
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

//========== Don't Delete 

}
