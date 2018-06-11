@extends('layouts.admin.dashboard')
@section('content')
<div class="col-md-10 p-4 admin container" id="1Detail">
  <h1 class="redText font30 text-center">Update Subcategory</h1>
<form class="whiteColor filterContainer clearfix mt-4" method="post" enctype="multipart/form-data" action="{{ route('admin.subcategory.update',$data->id) }}">
 
    {{ csrf_field() }}

      <input type="hidden" name="_method" value="PUT">

<ul>


<div class="form-group col-md-5">
<label>Category</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-hand-pointer"></i>
</div></div>
<select class="form-control" name="category_id" required>
<option value="" >--Select--</option>
   @foreach($category as $cval)
        @if ($data->category_id == $cval->id)
                <option value="{{ $cval->id }}" selected > {{ $cval->name }} </option>
          @else
              <option value="{{ $cval->id }}"> {{ $cval->name }} </option>
          @endif

       @endforeach
</select>
</div> @if ($errors->has('category_id'))
          <span class="help-block">
              {{ $errors->first('category_id') }}
          </span>
      @endif
</div>

<div class="form-group col-md-6">
<label>Name</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-user"></i></div></div>
<input type="text" class="form-control titlename" name="name" value="{{$data->name or old('name') }}" required placeholder="Name" />
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
<input type="text" class="form-control nameslug" name="slug" value="{{ $data->slug or old('slug') }}" required placeholder="Slug" /> 
</div>
@if ($errors->has('slug'))
<span class="help-block">
    {{ $errors->first('slug') }}
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
<input type="text" class="form-control" name="discount" value="{{ $data->discount or old('discount') }}" required placeholder="Discount" />
</div>
@if ($errors->has('discount'))
<span class="help-block">
    {{ $errors->first('discount') }}
</span>
@endif

</div>








<div class="form-group col-md-5">
<label>Status</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-hand-pointer"></i>
</div></div>
<select class="form-control" name="status">
<option value="" >--Select--</option>
@foreach([1=>'Active',0=>'Deactive'] as $sind=>$sval)
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


<div class="btn-action float-clear">
<label>Add / Remove Filters</label><br>
<i class="fa fa-plus-circle fa-3x cursorPointer pl-3 pr-3" onclick="addMore();"></i>
<i class="fa fa-minus-circle fa-3x cursorPointer" onclick="deleteRow();"></i>
<span class="success"></span>
</div>






    <li class="fullWidth">
      <div id="productx">
@php ($fno = 0)

    @foreach($data->filters as $filterval)

@php ($fno++)

@include('admin.subcategory-update-addmore-filter-ajax',['filterid'=>$fno,'filterval'=>$filterval->name,'filter_attribute'=>$filterval->attributes])

    @endforeach
      </div>
    </li>



<span class="d-block mt-5 pl-3">
  <button type="submit" class="btn btn1 mx-auto">Submit</button>

</span>

</ul>
</form>
</div>



@endsection




<script>
var filterid='{{ sizeof($data->filters) }}';


//console.log(filterid);
//alert(filterid);



function deleteRow() {
	
  $('div.product-item').each(function(index, item){
    jQuery(':checkbox', this).each(function () {
            if ($(this).is(':checked')) {
        $(item).remove();
            }
        });
  });
}



function addMore() {
   filterid++;
   var urlfilter='{{ route("admin.subcategory.addmorefilterajax",":filterid") }}';
   urlfilter = urlfilter.replace(':filterid', filterid);

  $("<DIV>").load(urlfilter, function() {
      $("#productx").append($(this).html());
  }); 
}



function addMoreAttribute(filterid) {


  var attributeid= $(".inputfilter-"+filterid+"-attribute").length;

  attributeid++;
  var urlattribute='{{ route("admin.subcategory.addmorefilterattributeajax",[":filterid",":attributeid"]) }}';

  urlattribute = urlattribute.replace(':filterid', filterid);

  urlattribute = urlattribute.replace(':attributeid', attributeid);


  $("<DIV>").load(urlattribute, function() {
    $(".filterno-"+filterid+"  .attribute").append($(this).html());
  }); 


  //


  //
}


function deleteRowAttribute(filterid,attributeid){

  

  var deleteAttributeClass='filter-'+filterid+'-attribute-'+attributeid;
  $("div."+deleteAttributeClass).remove();

}


</script>