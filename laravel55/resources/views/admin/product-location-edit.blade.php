@extends('layouts.admin.dashboard')
@section('content')

<div class="col-md-10 p-4 admin container" id="1Detail">
  <h1 class="redText font30 text-center">Update Location </h1>

<form class="p-1 col-md-10 border-top mx-auto"  method="post" action="{{ route('product-location.update',$data->id) }}">

   {{ csrf_field() }}
   
   
     <input type="hidden" name="_method" value="PUT">
   
 <div class="form-group col-md-5">
<label>Country</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-hand-pointer"></i>
</div></div>
<select class="form-control admin_country_id" name="country_id" required  data-stateajax="{{route('city.getstateajax') }}">
<option value="" >--Select--</option>
 @foreach($country as $cval)

        @if( $data->country_id == $cval->id)
	
            <option value="{{ $cval->id }}" selected >{{ $cval->name }} </option>
	 
	 @else
		<option value="{{ $cval->id }}">{{ $cval->name }}</option>
	 @endif
	 
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
 
 
  @foreach($state as $sval)

        @if( $data->state_id == $sval->id)
	
            <option value="{{ $sval->id }}" selected >{{ $sval->name }} </option>
	 
	 @else
		<option value="{{ $sval->id }}">{{ $sval->name }}</option>
	 @endif
	 
 @endforeach
 
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


  @foreach($city as $cval)

        @if( $data->city_id == $cval->id)
	
            <option value="{{ $cval->id }}" selected >{{ $cval->name }} </option>
	 
	 @else
		<option value="{{ $cval->id }}">{{ $cval->name }}</option>
	 @endif
	 
 @endforeach

 
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
 @foreach($category as $catval)

           
     @if( $data->category_id == $catval->id)
	
            <option value="{{ $catval->id }}" selected >{{ $catval->name }} </option>
	 @else
		<option value="{{ $catval->id }}">{{ $catval->name }}</option>
	 @endif
           
           
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
 
 @foreach($subcategory as $subcatval)

           
     @if( $data->subcategory_id == $subcatval->id)
	
            <option value="{{ $subcatval->id }}" selected >{{ $subcatval->name }} </option>
	 @else
		<option value="{{ $subcatval->id }}">{{ $subcatval->name }}</option>
	 @endif
           
           
 @endforeach
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
 @foreach($products as $pval)
   
   @php($mcheck=false)
     
	@foreach($data->products as $dval)
	
	 
	         @if($dval->id == $pval->id)
	 
	               <option value="{{ $pval->id }}" selected>{{ $pval->name }}</option>
				   
				    @php($mcheck=true)
			 
			 @break
				 
		     @endif
			 
			 
			 
	@endforeach
   
    @if($mcheck==false)
		
	  <option value="{{ $pval->id }}">{{ $pval->name }}</option>
	
	@endif 
   
 
 @endforeach
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