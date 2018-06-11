@extends('layouts.admin.dashboard')
@section('content')

<div class="col-md-10 p-4 admin container" id="1Detail">
  <h1 class="redText font30 text-center">Landing Page Create</h1>

<form class="p-1 col-md-10 border-top mx-auto"  method="post" action="{{ route('landingpage.update',$data->id) }}" 
 enctype="multipart/form-data">

  {{ csrf_field() }}

       <input type="hidden" name="_method" value="PUT">

   
<div class="form-group col-md-5">
<label>Page Type</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-hand-pointer"></i>
</div></div>
<select class="form-control admin_page_type" name="page_type" required  data-url="{{route('landingpage.getpagetypeajax') }}">
<option value="" >--Select--</option>
 @foreach(['ocassion'=>'Ocassion','gender'=>'Gender','relationship'=>'Relationship'] as $pi=>$pv)
  @if($pi==$data->page_type)
	  
             <option value="{{ $pi }}" selected>{{ $pv }}</option>
  @else
	  
             <option value="{{ $pi }}">{{ $pv }}</option>
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
<label>Landing Page Category</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-hand-pointer"></i>
</div></div>
<select class="form-control landing_page_id" name="page_type_category_id"   data-url="{{route('product-location.getcityajax') }}">
<option value="" >--Select--</option>
  @foreach($page_type_category as $ptc)
     
	   @if($ptc->id==$data->page_type_category_id)
	  
             <option value="{{ $ptc->id }}" selected >{{ $ptc->name }}</option>
  @else
	  
             <option value="{{ $ptc->id }}">{{ $ptc->name }}</option>
  @endif
             
           
 @endforeach
</select>
@if ($errors->has('page_type_category_id'))
          <span class="help-block">
              {{ $errors->first('page_type_category_id') }}
          </span>
      @endif
</div>
</div>


<div class="form-group col-md-6">
<label>Page Name</label>
<div class="input-group">
<div class="input-group-prepend">
</div>
<input type="text" class="form-control" name="name" required value="{{ $data->name or  old('name') }}" placeholder="Name" />
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
<input type="text" class="form-control" name="heading_name" required value="{{ $data->heading_name or old('heading_name') }}" placeholder="Heading Name" />
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




<!-- Add New Product -->


<!-- Remove New Product --> 

<div class="menu-section">

@php ($priority =0)
 
 @foreach($data->categoryinfo as $catinfoval)

   @php ($priority++)

			<div class="container  con-{{ $priority }}">
			<div class="row">
			<div class="form-group col-md-4">
			<label>Category</label>


			<select class="form-control admin_landing_category_id" name="menu[ {{$priority}} ][category_id]" required   data-subcategory="{{route('product-location.getsubcategoryajax') }}" data-landing-cat='1'>
			 <option value="" >--Select--</option>
			 @foreach($category as $cval)
			 
			              @if($cval->id == $catinfoval->category_id)

						     <option value="{{ $cval->id }}" selected >{{ $cval->name }}</option>
						 
						 @else
						
                            <option value="{{ $cval->id }}" >{{ $cval->name }}</option>					
						 
						 @endif
						 
					   
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
			<select class="form-control admin_landing_subcategory_id" name="menu[ {{ $priority }} ][subcategory_id][]" required multiple  data-landing-subcat='{{ $priority }}' >
			<option value="" >--Select--</option>
			
				@foreach($catinfoval->subcategories as $pval)

				@php($mcheck=false)

				@foreach($catinfoval->selectsubcategory as $dval)


				@if($dval->subcategory_id == $pval->id)

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
			 @if ($errors->has('product_id'))
					  <span class="help-block">
						  {{ $errors->first('product_id') }}
					  </span>
				  @endif
			</div>
				  
			<div class="form-group col-md-2">
			<label>Priority</label>
<input type="text" class="form-control" name="menu[ {{$priority}} ][priority]" required value="{{ $catinfoval->priority  or  old('name') }}" placeholder="Name" />
			@if ($errors->has('product_id'))
			  <span class="help-block">
				  {{ $errors->first('product_id') }}
			  </span>
			@endif</div>

 @if($priority >1)	
<div class="form-group col-md-2">
<i class="fa fa-close fa-2x" name="del_item" value="Delete" onclick="deleteMenu({{ $priority }});"></i>
</div>
@endif

			</div>

			</div>

  @endforeach


















</div>



<div class="btn-action float-clear">
<label>Add  Images/Videos</label><br>
<i class="fa fa-plus-circle fa-3x cursorPointer pl-3 pr-3" onclick="addImage();"> Image</i>
<span class="success"></span>
</div>




<div class="ao-img-video">

@php($images=json_decode($data->images))

@php ($priorityimg =0)
 
 @foreach($images as $img_index =>$img_val)
 
 @php ($priorityimg++)
 
     @if($img_val->type=='img')
		 
	 
			<div class="form-group col-md-12 oa-img-video-admin-section-{{ $priorityimg}}">
			<label>Image 
			
		@if($priorityimg > 1)	
			<i class="fa fa-close fa-2x" name="del_item" value="Delete" onclick="deleteimgvideo({{ $priorityimg}});"></i></label>
	    @endif
			
			
			<input type="file"  name="image-{{ $priorityimg}}"  class="form-control col-md-6"/>
			@if($img_val->value)
			<img src="{{URL::asset('public/images/landingpage/small/'.$img_val->value)}}" width="90px" height="50px">
			@endif
		 
			</div>
			
			
			<input type="hidden" name="hidden-image-{{ $priorityimg}}" value="{{$img_val->value}}">
			
	 
	 @else
		 
	 


	 @endif
 
 
 @endforeach


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

var priority='{{ $priority }}'; // one menu id define defalut

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

var priorityimg='{{ $priorityimg }}'; // one menu id define defalut

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