@extends('layouts.admin.dashboard')
@section('content')

<div class="col-md-10 p-4 admin container" id="1Detail">
  <h1 class="redText font30 text-center">Add Product Location</h1>

<form class="p-1 col-md-10 border-top mx-auto"  method="post" action="{{ route('product-location.store') }}">

   {{ csrf_field() }}
   
   
   
   
 <div class="form-group col-md-5">
<label>Country</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-hand-pointer"></i>
</div></div>
<select class="form-control admin_country_id" name="country_id" required  data-stateajax="{{route('city.getstateajax') }}">
<option value="" >--Select--</option>
 @foreach($country as $cval)

             <option value="{{ $cval->id }}">{{ $cval->name }}</option>
           
 @endforeach
</select>
</div> @if ($errors->has('country_id'))
          <span class="help-block">
              {{ $errors->first('country_id') }}
          </span>
      @endif
</div>
  
   
<div class="form-group col-md-5">
<label>State</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-hand-pointer"></i>
</div></div>
<select class="form-control state_id" name="state_id"   data-cityajax="{{route('product-location.getcityajax') }}">
<option value="" >--Select--</option>
 
</select>
</div> @if ($errors->has('state_id'))
          <span class="help-block">
              {{ $errors->first('state_id') }}
          </span>
      @endif
</div>


<div class="form-group col-md-5">
<label>City</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-hand-pointer"></i>
</div></div>
<select class="form-control city_id" name="city_id"   >
<option value="" >--Select--</option>
 
</select>
</div> @if ($errors->has('city_id'))
          <span class="help-block">
              {{ $errors->first('city_id') }}
          </span>
      @endif
</div>
   
   
   
 

<div class="form-group col-md-5">
<label>Category</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-hand-pointer"></i>
</div></div>
<select class="form-control admin_category_id" name="category_id" required   data-subcategory="{{route('product-location.getsubcategoryajax') }}">
 <option value="" >--Select--</option>
 @foreach($category as $cval)

             <option value="{{ $cval->id }}">{{ $cval->name }}</option>
           
 @endforeach
</select>
</div> @if ($errors->has('category_id'))
          <span class="help-block">
              {{ $errors->first('category_id') }}
          </span>
      @endif
</div>
   
   
 
<div class="form-group col-md-5">
<label>Subcategory</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-hand-pointer"></i>
</div></div>
<select class="form-control admin_subcategory_id" name="subcategory_id" required   data-product="{{route('product-location.getproductajax') }}">
<option value="" >--Select--</option>
 
</select>
</div> @if ($errors->has('subcategory_id'))
          <span class="help-block">
              {{ $errors->first('subcategory_id') }}
          </span>
      @endif
</div>


<div class="form-group col-md-5">
<label>Product</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-hand-pointer"></i>
</div></div>
<select class="form-control admin_product_id" name="product_id[]" required multiple  >
<option value="" >--Select--</option>
 
</select>
</div> @if ($errors->has('product_id'))
          <span class="help-block">
              {{ $errors->first('product_id') }}
          </span>
      @endif
</div>
   







<span class="d-block mt-5 pl-3">
  <button type="submit" class="btn btn1 mx-auto">Submit</button>

</span>
</form>
</div>


@endsection