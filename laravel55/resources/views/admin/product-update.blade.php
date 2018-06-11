@extends('layouts.admin.dashboard')
@section('content')

<div class="col-md-10 p-4 admin container" id="1Detail">
  <h1 class="redText font30 text-center">Add Product</h1>

<form class="p-1 col-md-10 border-top mx-auto" enctype="multipart/form-data" method="post" 
action="{{ route('product.update',$data->id) }}">

   {{ csrf_field() }}

       <input type="hidden" name="_method" value="PUT">

<div class="form-group col-md-6">
<label>Name *</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-user"></i></div></div>
<input type="text" class="form-control titlename" required name="name" value="{{ $data->name or old('name') }}" placeholder="Name" />
</div>

@if ($errors->has('name'))
                                    <span class="help-block">
                                        {{ $errors->first('name') }}
                                    </span>
                                @endif

</div>




<div class="form-group col-md-6">
<label>Slug</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-user"></i></div></div>
<input type="text" class="form-control nameslug" name="slug" value="{{ $data->slug or old('slug') }}" placeholder="Slug" />  
</div>
@if ($errors->has('slug'))
<span class="help-block">
    {{ $errors->first('slug') }}
</span>
                                @endif

</div>





<div class="form-group col-md-6">
<label>Title</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-user"></i></div></div>
<input type="text" class="form-control" name="title" value="{{ $data->title or old('title') }}" placeholder="Title" />
</div>
@if ($errors->has('title'))
<span class="help-block">
    {{ $errors->first('title') }}
</span>
                                @endif

</div>




<div class="form-group col-md-12">
<label>Product Info</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-user"></i></div></div>
<textarea name="info" class="form-control ckeditor">
{{ $data->info or old('info') }}
</textarea>
</div>
@if ($errors->has('info'))
<span class="help-block">
    {{ $errors->first('info') }}
</span>
                                @endif

</div>


<div class="form-group col-md-12">
<label>Product Description</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-user"></i></div></div>

<textarea name="info" class="form-control ckeditor">
{{ $data->description or old('description') }}
</textarea>
</div>
@if ($errors->has('description'))
<span class="help-block">
    {{ $errors->first('description') }}
</span>
                                @endif

</div>


<div class="form-group col-md-6">
<label>Bar Code</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-user"></i></div></div>
<input type="text" class="form-control" name="barcode" value="{{ $data->barcode or old('barcode') }}" placeholder="Barcode" />
</div>
@if ($errors->has('barcode'))
<span class="help-block">
    {{ $errors->first('barcode') }}
</span>
                                @endif

</div>



<div class="form-group col-md-6">
<label>Product Code</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-user"></i></div></div>
<input type="text" class="form-control" name="code" value="{{ $data->code or old('code') }}" placeholder="Code" />
</div>
@if ($errors->has('code'))
<span class="help-block">
    {{ $errors->first('code') }}
</span>
                                @endif

</div>



<div class="form-group col-md-6">
<label>Rack</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-user"></i></div></div>
<input type="text" class="form-control" name="rack" value="{{ $data->rack or old('rack') }}" placeholder="Code" />
</div>
@if ($errors->has('rack'))
<span class="help-block">
    {{ $errors->first('rack') }}
</span>
                                @endif

</div>



<div class="form-group col-md-5">
<label>Category</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-hand-pointer"></i>
</div></div>
<select class="form-control admin-cat-ajax" name="category_id"  required data-catajaxurl="{{ route('product.categoryajax') }}">
<option value="" >--Select--</option>
   @foreach($categories as $cat)
 
              @if($cat->id == $data->category_id)

                <option value="{{$cat->id}}" selected="selected">{{$cat->name}}</option>

             @else

               <option value="{{$cat->id}}">{{$cat->name}}</option>
                 
             @endif
    @endforeach
</select>
</div>   
@if ($errors->has('category_id'))
    <span class="help-block">
        {{ $errors->first('category_id') }}
    </span>
@endif
</div>




<div class="form-group col-md-5">
<label>Subcategory *</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-hand-pointer"></i>
</div></div>
<select class="form-control admin-subcat-ajax" required name="subcategory_id"  data-subcatfilterajaxurl="{{ route('product.subcatfilterajax') }}">
<option value="">--Select Subcategory-- </option>
  @foreach($subcategoryList as $subcat)

          @if($subcat->id ==$data->subcategory_id)
           
            <option value="{{$subcat->id}}" selected="selected">{{$subcat->name}}</option>

          @else

            <option value="{{$subcat->id}}">{{$subcat->name}}</option>

          @endif

       @endforeach
</select>
</div>   
@if ($errors->has('subcategory_id'))
    <span class="help-block">
        {{ $errors->first('subcategory_id') }}
    </span>
@endif
</div>


<div id="subcatfilter">
       <div id="subcatfilter">
      
@include('admin.product-subcategory-update-filter-ajax',['data'=>$filters,'attributes'=>$attributes])


    </div>


    </div>


<div class="form-group col-md-5">
<label>Brand *</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-hand-pointer"></i>
</div></div>
<select class="form-control" name="brand_id" required>
<option value="">--Select Brand-- </option>
    @foreach($brands as $brand)

        @if($brand->id == $data->brand_id)
       
           <option value="{{$brand->id}}" selected="selected">{{$brand->name}}</option>

        @else
          
            <option value="{{$brand->id}}" >{{$brand->name}}</option>

        @endif

    @endforeach
</select>
</div>   
@if ($errors->has('brand_id'))
    <span class="help-block">
        {{ $errors->first('brand_id') }}
    </span>
@endif
</div>


<div class="form-group col-md-5">
<label>Vendor</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-hand-pointer"></i>
</div></div>
<select class="form-control" name="vendor_id">
<option value="">--Select Vendor--</option>
    @foreach($vendors as $vendor)

      @if($vendor->id == $data->vendor_id)
       
         <option value="{{$vendor->id}}" selected="selected">{{$vendor->name}}</option>
          

        @else
          
            <option value="{{$vendor->id}}" >{{$vendor->name}}</option>

        @endif
    @endforeach
</select>
</div>   
@if ($errors->has('vendor_id'))
    <span class="help-block">
        {{ $errors->first('vendor_id') }}
    </span>
@endif
</div>





<div class="form-group col-md-5">
<label>Occasion</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-hand-pointer"></i>
</div></div>
<select class="form-control" name="occasion_id[]" multiple="multiple">
<option value="">--Select Occasion--</option>
        @foreach($occasions as $occasion)

         @php ($occv=true)

          @foreach($data->occasions as $occval)

            @if($occasion->id == $occval->id)

                    <option value="{{$occasion->id}}" selected="selected">
                     {{$occasion->name}}</option>
                 @php ($occv=false)
           
                  @break

            @endif
 
         @endforeach

          @if($occv==true)
            <option value="{{$occasion->id}}">{{$occasion->name}}</option>
        @endif     


       
    @endforeach
</select>
</div>   
@if ($errors->has('occasion_id'))
    <span class="help-block">
        {{ $errors->first('occasion_id') }}
    </span>
@endif
</div>




<div class="form-group col-md-5">
<label>Relation</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-hand-pointer"></i>
</div></div>
<select class="form-control" name="relation_id[]" multiple="multiple">
<option value="">--Select Relation--</option>
    @foreach($relations as $relation)

     @php ($relv=true)

          @foreach($data->relations as $relval)

            @if($relation->id == $relval->id)
                   <option value="{{$relation->id}}" selected="selected">{{$relation->name}}</option>
                 @php ($relv=false)
           
                  @break

            @endif
 
         @endforeach

          @if($relv==true)
       <option value="{{$relation->id}}">{{$relation->name}}</option>
            
        @endif     

  @endforeach
</select>
</div>   
@if ($errors->has('relation_id'))
    <span class="help-block">
        {{ $errors->first('relation_id') }}
    </span>
@endif
</div>



 @if($data->is_combo ==1)
           @php ($checked='checked')
        @else
           @php ($checked='')
        @endif

<div class="form-group col-md-6">
<label>Is Combo</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-user"></i></div></div>
<input type="checkbox" {{$checked}} class="form-control" name="is_combo" value="1" placeholder="Is Combo" />
</div>
@if ($errors->has('is_combo'))
<span class="help-block">
    {{ $errors->first('is_combo') }}
</span>
@endif

</div>


 @if($data->quantity ==1)
           @php ($checked='checked')

         @else
           @php ($checked='')
        @endif

<div class="form-group col-md-6">
<label>Quantity *</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-user"></i></div></div>
<input type="text" class="form-control" name="quantity" value="{{ $data->quantity or old('quantity') }}" placeholder="Quantity" {{$checked}} />
</div>
@if ($errors->has('quantity'))
<span class="help-block">
    {{ $errors->first('quantity') }}
</span>
@endif

</div>


 @if($data->quantity_limitation_without_inventory ==1)
           @php ($checked='checked')
    @else
           @php ($checked='')
        @endif


		
 @if($data->quantity_limitation_without_inventory ==0)
           @php ($checked_0='checked')
    @else
           @php ($checked_0='')
        @endif



<div class="form-group col-md-6">
<label>Quantity Limitation without Inventory</label>
<div class="input-group">
<div class="input-group-prepend">
</div>
Yes 
<input type="radio" class="form-control product_inventory" {{$checked}} name="quantity_limitation_without_inventory" value="1" placeholder="Quantity Limitation without Inventory" />
No
<input type="radio" class="form-control product_inventory" {{ $checked_0 }}  name="quantity_limitation_without_inventory"  value="0" placeholder="Quantity Limitation without Inventory" />
</div>
@if ($errors->has('quantity_limitation_without_inventory'))
<span class="help-block">
    {{ $errors->first('quantity_limitation_without_inventory') }}
</span>
@endif
</div>



 @if($data->negative_quantity_allow ==1)
           @php ($checked='checked')
         @else
           @php ($checked='')
        @endif



@if($data->quantity_limitation_without_inventory ==1) 

<div class="form-group col-md-6 inventory_nqa  ">

@else

<div class="form-group col-md-6 inventory_nqa hide">	

@endif


<label>Negative Quantity Allow:</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-user"></i></div></div>
<input type="checkbox" class="form-control negative_quantity_allow" {{$checked}} name="negative_quantity_allow"   value="1" placeholder="Negative Quantity Allow" />
</div>
@if ($errors->has('negative_quantity_allow'))
<span class="help-block">
    {{ $errors->first('negative_quantity_allow') }}
</span>
@endif

</div>




<div class="form-group col-md-6">
<label>INR Price :*</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-user"></i></div></div>
<input type="text" class="form-control" required name="inr_price" value="{{ $data->inr_price or old('inr_price') }}" placeholder="INR Price" />
</div>
@if ($errors->has('inr_price'))
<span class="help-block">
    {{ $errors->first('inr_price') }}
</span>
@endif

</div>




<div class="form-group col-md-5">
<label>Gender *</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-hand-pointer"></i>
</div></div>
<select class="form-control" name="gender_id" required>
<option value="">-- Select Gender--</option>
      @foreach($genders as $gender)
          @if($gender->id==$data->gender_id)
        <option value="{{ $gender->id }}" selected="selected"> {{$gender->name}} </option>
          @else
          <option value="{{ $gender->id }}"> {{$gender->name}} </option>
          @endif
    
      @endforeach
</select>
</div>   
@if ($errors->has('gender_id'))
    <span class="help-block">
        {{ $errors->first('gender_id') }}
    </span>
@endif
</div>









<div class="btn-action float-clear">
<label>Add  Images/Videos</label><br>
<i class="fa fa-plus-circle fa-3x cursorPointer pl-3 pr-3" onclick="addImage();"> Image</i>
<i class="fa fa-plus-circle fa-3x cursorPointer pl-3 pr-3" onclick="addVideo();">Video</i>
<span class="success"></span>
</div>


<div class="ao-img-video">

@php($images=json_decode($data->images))

@php ($priority =0)
 
 @foreach($images as $img_index =>$img_val)
 
 @php ($priority++)
 
     @if($img_val->type=='img')
		 
	 
			<div class="form-group col-md-12 oa-img-video-admin-section-{{ $priority}}">
			<label>Image <i class="fa fa-close fa-2x" name="del_item" value="Delete" onclick="deleteimgvideo({{ $priority}});"></i></label>
			<input type="file"  name="image-{{ $priority}}"  class="form-control col-md-6"/>
			@if($img_val->value)
			<img src="{{URL::asset('public/images/product/small/'.$img_val->value)}}" width="90px" height="50px">
			@endif
		 
			</div>
			
			
			<input type="hidden" name="hidden-image-{{ $priority}}" value="{{$img_val->value}}">
			
	 
	 @else
		 
	 
	<div class="form-group col-md-12 oa-img-video-admin-section-{{ $priority}}">
	<label>Video <i class="fa fa-close fa-2x" name="del_item"  value="Delete" onclick="deleteimgvideo({{ $priority}});"></i></label>
	<input type="text" required name="video[{{ $priority}}]" value={{ $img_val->value }} class="form-control col-md-6" />
	</div>

	 @endif
 
 
 @endforeach


</div>


        @if($data->new ==1)
           @php ($checked='checked')

         @else
            @php ($checked='')
        @endif

<div class="form-group col-md-6">
<label>Marked as New Product</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-user"></i></div></div>
<input type="checkbox" class="form-control" value="1" name="new" {{ $checked }} placeholder="Marked as New Product" />
</div>
@if ($errors->has('new'))
<span class="help-block">
    {{ $errors->first('new') }}
</span>
@endif

</div>

   @if($data->home_menu ==1)
           @php ($checked='checked')

         @else
            @php ($checked='')
        @endif

<div class="form-group col-md-6">
<label>Show on Home Menu</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-user"></i></div></div>
<input type="checkbox" class="form-control" {{ $checked}} value="1" name="home_menu"  placeholder="Show on Home Menu" />
</div>
@if ($errors->has('home_menu'))
<span class="help-block">
    {{ $errors->first('home_menu') }}
</span>
@endif

</div>

   @if($data->hot_seller ==1)
           @php ($checked='checked')

         @else
            @php ($checked='')
        @endif


<div class="form-group col-md-6">
<label>Marked as Hot Seller</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-user"></i></div></div>
<input type="checkbox" class="form-control" {{$checked}} value="1" name="hot_seller"  placeholder="Hot Seller" />
</div>
@if ($errors->has('hot_seller'))
<span class="help-block">
    {{ $errors->first('hot_seller') }}
</span>
@endif

</div>



<div class="form-group col-md-5">
<label>Discount Type</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-hand-pointer"></i>
</div></div>
<select class="form-control" name="discount_type">
<option value="" >--Select--</option>
 @foreach(['price'=>'Price','percent'=>'Percent (%)'] as $disind=>$disval)
      @if ($data->discount_type == $disind)
                <option value="{{ $disind }}" selected="selected" > {{$disval}} </option>
          @else
               <option value="{{ $disind }}"> {{$disval}} </option>
          @endif
 @endforeach
</select>
</div>   @if ($errors->has('discount_type'))
          <span class="help-block">
              {{ $errors->first('discount_type') }}
          </span>
      @endif
</div>


<div class="form-group col-md-6">
<label>Discount</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-user"></i></div></div>
<input type="text" class="form-control" name="discount" value="{{ $data->discount or old('discount') }}" placeholder="Discount" />
</div>
@if ($errors->has('discount'))
<span class="help-block">
    {{ $errors->first('discount') }}
</span>
@endif

</div>



<div class="form-group col-md-5">
<label>Status *</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-hand-pointer"></i>
</div></div>
<select class="form-control" name="status" required>
<option value="" >--Select--</option>
@foreach([1=>'Active',2=>'Available on Store Only',0=>'Deactive'] as $sind=>$sval)

          @if ($data->status == $sind)
                <option value="{{ $sind }}" selected > {{$sval}} </option>
          @else
               <option value="{{ $sind }}"> {{$sval}} </option>
          @endif

      @endforeach
</select>
</div>   @if ($errors->has('status'))
          <span class="help-block">
              {{ $errors->first('status') }}
          </span>
      @endif
</div>





<span class="d-block mt-5 pl-3">
  <button type="submit" class="btn btn1 mx-auto">Submit</button>

</span>
</form>
</div>
@endsection



<script>

var priority='{{ sizeof((array)$images) }}';
function addImage() {
	
priority++;
var urlfilter='{{ route("product.imageajax",":priority") }}';
urlfilter = urlfilter.replace(':priority', priority);
	
     $("<div>").load(urlfilter, function() {
            $(".ao-img-video").append($(this).html());
     });  
}

function addVideo() {
		priority++;
	var urlfilter='{{ route("product.videoajax",":priority") }}';
urlfilter = urlfilter.replace(':priority', priority);	
		
     $("<div>").load(urlfilter, function() {
            $(".ao-img-video").append($(this).html());
     });  
}

function deleteimgvideo(no)
{
	$(".oa-img-video-admin-section-"+no).remove();
}




</script>