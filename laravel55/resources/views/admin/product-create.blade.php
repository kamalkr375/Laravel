@extends('layouts.admin.dashboard')
@section('content')

<div class="col-md-10 p-4 admin container" id="1Detail">
  <h1 class="redText font30 text-center">Add Product</h1>

<form class="p-1 col-md-10 border-top mx-auto" enctype="multipart/form-data" method="post" 
action="{{ route('product.store') }}">

   {{ csrf_field() }}

<div class="form-group col-md-6">
<label>Name *</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-user"></i></div></div>
<input type="text" class="form-control titlename" required  name="name" value="{{ old('name') }}" placeholder="Name" />
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
<input type="text" class="form-control nameslug" required name="slug" value="{{ old('slug') }}" placeholder="Slug" />  
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
<input type="text" class="form-control" name="title" value="{{ old('title') }}" placeholder="Title" />
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
{{ old('info') }}
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

<textarea name="description" class="form-control ckeditor">
{{ old('description') }}
</textarea>


</div>
@if ($errors->has('description'))
<span class="help-block">
    {{ $errors->first('description') }}
</span>
                                @endif

</div>


<div class="form-group col-md-6">
<label>Bar Code *</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-user"></i></div></div>
<input type="text" class="form-control" name="barcode" required value="{{ old('barcode') }}" placeholder="Barcode" />
</div>
@if ($errors->has('barcode'))
<span class="help-block">
    {{ $errors->first('barcode') }}
</span>
                                @endif

</div>



<div class="form-group col-md-6">
<label>Product Code *</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-user"></i></div></div>
<input type="text" class="form-control" name="code" required  value="{{ old('code') }}" placeholder="Code" />
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
<input type="text" class="form-control" name="rack" value="{{ old('rack') }}" placeholder="Code" />
</div>
@if ($errors->has('rack'))
<span class="help-block">
    {{ $errors->first('rack') }}
</span>
                                @endif

</div>



<div class="form-group col-md-5">
<label>Category * </label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-hand-pointer"></i>
</div></div>
<select class="form-control admin-cat-ajax" required  name="category_id" data-catajaxurl="{{ route('product.categoryajax') }}">
<option value="" >--Select--</option>
   @foreach($categories as $cat)
         <option value="{{$cat->id}}">{{$cat->name}}</option>
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
</select>
</div>   
@if ($errors->has('subcategory_id'))
    <span class="help-block">
        {{ $errors->first('subcategory_id') }}
    </span>
@endif
</div>


<div id="subcatfilter">
      


    </div>


<div class="form-group col-md-5">
<label>Brand *</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-hand-pointer"></i>
</div></div>
<select class="form-control" required  name="brand_id">
<option value="">--Select Brand-- </option>
    @foreach($brands as $brand)
	@php ($bid=$brand->id)
         <option value="{{$brand->id}}" @if ( old('brand_id') == $bid && old('brand_id')!='') selected="selected" @endif>{{$brand->name}}</option>
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
<select class="form-control" required name="vendor_id">
      @foreach($vendors as $vendor)
	  
	  @php( $vid= $vendor->id)
           <option value="{{$vendor->id}}" @if ( old('vendor_id') == $vid && old('vendor_id')!='') selected="selected" @endif >{{$vendor->name}}</option>
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
         <option value="{{$occasion->id}}">{{$occasion->name}}</option>
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
       <option value="{{$relation->id}}">{{$relation->name}}</option>
     @endforeach
</select>
</div>   
@if ($errors->has('relation_id'))
    <span class="help-block">
        {{ $errors->first('relation_id') }}
    </span>
@endif
</div>

<div class="form-group col-md-6">
<label>Is Combo</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-user"></i></div></div>
<input type="checkbox" class="form-control" name="is_combo" value="1" placeholder="Is Combo" />
</div>
@if ($errors->has('is_combo'))
<span class="help-block">
    {{ $errors->first('is_combo') }}
</span>
@endif

</div>



<div class="form-group col-md-6">
<label>Quantity *</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-user"></i></div></div>
<input type="text" class="form-control" required  name="quantity" value="{{ old('quantity') }}" placeholder="Quantity" />
</div>
@if ($errors->has('quantity'))
<span class="help-block">
    {{ $errors->first('quantity') }}
</span>
@endif

</div>




<div class="form-group col-md-6">
<label>Quantity Limitation without Inventory</label>
<div class="input-group">
<div class="input-group-prepend">
</div>
Yes 
<input type="radio" class="form-control product_inventory"  name="quantity_limitation_without_inventory" value="1" placeholder="Quantity Limitation without Inventory" />
No
<input type="radio" class="form-control product_inventory" checked name="quantity_limitation_without_inventory"  value="0" placeholder="Quantity Limitation without Inventory" />
</div>
@if ($errors->has('quantity_limitation_without_inventory'))
<span class="help-block">
    {{ $errors->first('quantity_limitation_without_inventory') }}
</span>
@endif
</div>



<div class="form-group col-md-6 inventory_nqa  hide">
<label>Negative Quantity Allow:</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-user"></i></div></div>
<input type="checkbox" class="form-control negative_quantity_allow" name="negative_quantity_allow"   value="1" placeholder="Negative Quantity Allow" />
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
<input type="text" class="form-control" required name="inr_price" value="{{ old('inr_price') }}" placeholder="INR Price" />
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
<select class="form-control" name="gender_id" required >
<option value="">-- Select Gender--</option>
       @foreach($genders as $gender)
  @php( $gid= $gender->id)
  <option value="{{ $gender->id }}" @if ( old('gender_id') == $gid && old('gender_id')!='') selected="selected" @endif > {{$gender->name}} </option>
    
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

	      <div class="form-group col-md-12 oa-img-video-admin-section-1">
			<label>Image <i class="fa fa-close fa-2x" name="del_item" value="Delete" onclick="deleteimgvideo(1);"></i></label>
			<input type="file"  name="image-1" required  class="form-control col-md-6"/>
			</div>

</div>

<div class="form-group col-md-6">
<label>Marked as New Product</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-user"></i></div></div>
<input type="checkbox" class="form-control" value="1" name="new"  placeholder="Marked as New Product" />
</div>
@if ($errors->has('new'))
<span class="help-block">
    {{ $errors->first('new') }}
</span>
@endif

</div>



<div class="form-group col-md-6">
<label>Show on Home Menu</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-user"></i></div></div>
<input type="checkbox" class="form-control" value="1" name="home_menu"  placeholder="Show on Home Menu" />
</div>
@if ($errors->has('home_menu'))
<span class="help-block">
    {{ $errors->first('home_menu') }}
</span>
@endif

</div>




<div class="form-group col-md-6">
<label>Marked as Hot Seller</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-user"></i></div></div>
<input type="checkbox" class="form-control" value="1" name="hot_seller"  placeholder="Hot Seller" />
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
     
          
   <option value="{{ $disind }}" @if ( old('discount_type') == $disind && old('discount_type')!='') selected="selected" @endif> {{$disval}} </option>
       
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
<input type="text" class="form-control" name="discount" value="{{ old('discount') }}" placeholder="Discount" />
</div>
@if ($errors->has('discount'))
<span class="help-block">
    {{ $errors->first('discount') }}
</span>
@endif

</div>


<div class="form-group col-md-5">
<label>Status  </label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-hand-pointer"></i>
</div></div>
<select class="form-control" name="status" required  >
<option value="">--Select--</option>
@foreach([1=>'Active',0=>'Deactive'] as $sind=>$sval)
     
      <option value="{{ $sind }}" @if ( old('status') == $sind && old('status')!='') selected="selected" @endif> {{$sval}} </option>
        
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

var priority=1; // one image id define defalut
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
