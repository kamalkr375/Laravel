@extends('layouts.admin.dashboard')
@section('content')

<div class="col-md-10 p-4 admin container" id="1Detail">
  <h1 class="redText font30 text-center">Landing Page Create</h1>

<form class="p-1 col-md-10 border-top mx-auto"  method="post" action="{{ route('landingpage.store') }}" 
 enctype="multipart/form-data">

   {{ csrf_field() }}
   
<div class="form-group col-md-5">
<label>Page Type</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-hand-pointer"></i>
</div></div>
<select class="form-control admin_page_type" name="page_type" required  data-url="{{route('landingpage.getpagetypeajax') }}">
<option value="" >--Select--</option>
 @foreach(['ocassion'=>'Ocassion','gender'=>'Gender','relationship'=>'Relationship'] as $pi=>$pv)

             <option value="{{ $pi }}">{{ $pv }}</option>
 @endforeach
</select>
</div> @if ($errors->has('country_id'))
          <span class="help-block">
              {{ $errors->first('country_id') }}
          </span>
      @endif
</div>
  
   
<div class="form-group col-md-5">
<label>Landing Page Category</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-hand-pointer"></i>
</div></div>
<select class="form-control landing_page_id" name="page_type_category_id"   data-url="{{route('product-location.getcityajax') }}">
<option value="" >--Select--</option>
 
</select>
</div> @if ($errors->has('landing_page'))
          <span class="help-block">
              {{ $errors->first('landing_page') }}
          </span>
      @endif
</div>



<div class="form-group col-md-6">
<label>Page Name</label>
<div class="input-group">
<div class="input-group-prepend">
</div>
<input type="text" class="form-control" name="name" required value="{{ old('name') }}" placeholder="Name" />
</div>
@if ($errors->has('name'))
<span class="help-block">
    {{ $errors->first('name') }}
</span>
@endif

</div>

<div class="form-group col-md-6">
<label>Page Heading Name</label>
<div class="input-group">
<div class="input-group-prepend">
</div>
<input type="text" class="form-control" name="heading_name" required value="{{ old('heading_name') }}" placeholder="Heading Name" />
</div>
@if ($errors->has('heading_name'))
<span class="help-block">
    {{ $errors->first('heading_name') }}
</span>
@endif

</div>


<div class="btn-action float-clear">
<label>Menu</label><br>
<i class="fa fa-plus-circle fa-3x cursorPointer pl-3 pr-3" onclick="addMoreMenu();"> Menu</i>
<span class="success"></span>
</div>

<div class="menu-section">

<div class="container  con-1">
<div class="row">
<div class="form-group col-md-4">
<label>Category</label>


<select class="form-control admin_landing_category_id" name="menu[1][category_id]" required   data-subcategory="{{route('product-location.getsubcategoryajax') }}" data-landing-cat='1'>
 <option value="" >--Select--</option>
 @foreach($category as $cval)

             <option value="{{ $cval->id }}">{{ $cval->name }}</option>
           
 @endforeach
</select>
@if ($errors->has('category_id'))
          <span class="help-block">
              {{ $errors->first('category_id') }}
          </span>
      @endif
</div>




<div class="form-group col-md-4">
<label>Sub Category</label>
<select class="form-control admin_landing_subcategory_id" name="menu[1][subcategory_id][]" required multiple  data-landing-subcat='1' >
<option value="" >--Select--</option>
</select>
 @if ($errors->has('product_id'))
          <span class="help-block">
              {{ $errors->first('product_id') }}
          </span>
      @endif
</div>
	  
<div class="form-group col-md-2">
<label>Priority</label>
<input type="text" class="form-control" name="menu[1][priority]" required value="{{ old('name') }}" placeholder="Name" />
@if ($errors->has('product_id'))
  <span class="help-block">
	  {{ $errors->first('product_id') }}
  </span>
@endif</div>


</div>

</div>

</div>



<div class="btn-action float-clear">
<label>Add  Images/Videos</label><br>
<i class="fa fa-plus-circle fa-3x cursorPointer pl-3 pr-3" onclick="addImage();"> Image</i>
<span class="success"></span>
</div>


<div class="ao-img-video">

	      <div class="form-group col-md-12 oa-img-video-admin-section-1">
			<label>Image </label>
			<input type="file"  name="image-1" required  class="form-control col-md-6"/>
			</div>

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

var priority=1; // one menu id define defalut
function addMoreMenu() {
priority++;
var urlfilter='{{ route("landingpage.menuajax",":priority") }}';
urlfilter = urlfilter.replace(':priority', priority);
	
     $("<div>").load(urlfilter, function() {
            $(".menu-section").append($(this).html());
     });  
}


function deleteMenu(no)
{
	$(".con-"+no).remove();
}

var priorityimg=1; // one menu id define defalut

function addImage() {
	
	priorityimg++;
	var urlfilter='{{ route("product.imageajax",":priorityimg") }}';
	urlfilter = urlfilter.replace(':priorityimg', priorityimg);
		
		 $("<div>").load(urlfilter, function() {
				$(".ao-img-video").append($(this).html());
		 });  
}


function deleteimgvideo(no)
{
	$(".oa-img-video-admin-section-"+no).remove();
}



</script>