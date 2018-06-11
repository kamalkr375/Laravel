<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\ProductLocationProduct;
use App\ProductLocation;
use App\Subcategory;
use App\Category;
use App\Product; 
use App\Country; 
use App\State;
use Validator;
use App\City;
use Auth;
use DB;

class ProductLocationController extends Controller
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
		    $data = ProductLocation::orderBy('id', 'desc')->paginate(20);
            return view('admin.product-location-index',compact('data'));	
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
        return view('admin.product-location-create')->with(['country'=>$country,'state'=>$state,'city'=>$city,'category'=>$category]);
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
								'country_id'=>'required',
								'category_id'=>'required',
								'subcategory_id'=>'required',
								'product_id' => 'required'
							  ]);


			 if(!empty($request->product_id)){
						 
						 
                        if(!empty($request->state_id)){
							
						      $stateid=$request->state_id;	  
						}else{
							
						      $stateid=0;
						}
						 
                        if(!empty($request->city_id)){
						      $cityid=$request->city_id;	  
						}else{
						      $cityid=0;
						}
						
						
						$data=[ 'country_id'=>$request->country_id,
								'state_id'=>$stateid,
								'city_id'=>$cityid,
								'category_id'=>$request->category_id,
								'subcategory_id'=>$request->subcategory_id
						      ];
							  

						$productLocation=		ProductLocation::create($data);
						$product_location_id=$productLocation->id;
						
						
						
									
						 foreach($request->product_id as $proid):
									
									  
								$data1=[
									     'product_location_id'=>$product_location_id,
									     'product_id' =>$proid
									  ];

                                ProductLocationProduct::create($data1);
								
					    endforeach;
					
					return redirect()->route('product-location.index')->with('success','Product added successfully');
					
			}else{
				
				return redirect()->route('product-location.index')->with('success','Product did not add successfully');
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
		
		$data=ProductLocation::find($id); 
		
		$country_id= $data->country_id;
		
		$state=DB::table('states')->where('country_id',$country_id)->get();
		
        $state_id= $data->state_id;
		
	    $category= Category::all();
		
		$category_id =$data->category_id;
		
		$subcategory_id= $data->subcategory_id;
		
		$subcategory = DB::table('subcategories')->where('category_id',$category_id)->get();
			
		$city=DB::table('cities')->where('state_id',$state_id)->get();
		
		
		$products=DB::table('products')->where('subcategory_id',$subcategory_id)->get();
	
	
        return view('admin.product-location-edit')->with(['data'=>$data,'country'=>$country,'state'=>$state,'city'=>$city,'category'=>$category,'subcategory'=>$subcategory,'products'=>$products]);
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
								'country_id'=>'required',
								'category_id'=>'required',
								'subcategory_id'=>'required',
								'product_id' => 'required'
							  ]);


			 if(!empty($request->product_id)){
						 
						 
                        if(!empty($request->state_id)){
							
						      $stateid=$request->state_id;	  
						}else{
							
						      $stateid=0;
						}
						 
                        if(!empty($request->city_id)){
						      $cityid=$request->city_id;	  
						}else{
						      $cityid=0;
						}
						
						
						$data=[ 'country_id'=>$request->country_id,
								'state_id'=>$stateid,
								'city_id'=>$cityid,
								'category_id'=>$request->category_id,
								'subcategory_id'=>$request->subcategory_id
						      ];
							  

					ProductLocation::where('id', $id)->update($data);		  
					$product_location_id=$id;
						
						
					 ProductLocationProduct::where('product_location_id',$id)->delete(); //Delete All Record 	
									
						 foreach($request->product_id as $proid):
									
									  
								$data1=[
									     'product_location_id'=>$product_location_id,
									     'product_id' =>$proid
									  ];

                                ProductLocationProduct::create($data1);
								
					    endforeach;
					
					return redirect()->route('product-location.index')->with('success','Product Location updated successfully');
					
			}else{
				
				return redirect()->route('product-location.index')->with('success','Product Location did not update successfully');
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
         DB::table('product_locations')->delete($id);
		 ProductLocationProduct::where('product_location_id',$id)->delete(); //Delete All Record 	
          return redirect()->route('product-location.index')->with('success','Product Location  deleted successfully');

    }
	
	
	
	
	public function getcityajax()
	{
		$sid =$_GET['sid'];
		$data= DB::table('cities')->where('state_id',$sid)->get();
		return $data; 
    }
	
	
    public function getsubcategoryajax()
	{
		$catid =$_GET['catid'];
		$data= DB::table('subcategories')->where('category_id',$catid)->get();
		return $data; 
    }
	
	public function getproductajax()
	{
		$subcatid =$_GET['subcatid'];
		$data= DB::table('products')->where('subcategory_id',$subcatid)->get();
		return $data; 
	}
	
	
	
	
	
}
