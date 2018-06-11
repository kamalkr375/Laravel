
@extends('layouts.admin.dashboard')
@section('content')

<div class="col-md-10 p-4 admin container" id="1Detail">
  <h1 class="redText font30 text-center">Add Subcategory</h1>

<form class="p-1 col-md-10 border-top mx-auto" enctype="multipart/form-data" method="post" action="{{ route('admin.subcategory.store') }}">

   {{ csrf_field() }}


<div class="form-group col-md-5">
<label>Category</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-hand-pointer"></i>
</div></div>
<select class="form-control" name="category_id" required >
<option value="" >--Select--</option>
 @foreach($category as $cval)
 
     @if( old('category_id') == $cval->id)
	
             <option value="{{ $cval->id }}" selected="selected">{{ $cval->name }}</option>
	 
	 @else
		  <option value="{{ $cval->id }}">{{ $cval->name }}</option>
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
<input type="text" class="form-control titlename" name="name" value="{{ old('name') }}" required placeholder="Name" />
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
<input type="text" class="form-control nameslug" name="slug" value="{{ old('slug') }}" required placeholder="Slug" />
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
<select class="form-control" name="status" required>
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

<div class="btn-action float-clear">
<label>Add / Remove Filters</label><br>
<i class="fa fa-plus-circle fa-3x cursorPointer pl-3 pr-3" onclick="addMore();"></i>
<i class="fa fa-minus-circle fa-3x cursorPointer" onclick="deleteRow();"></i>
<span class="success"></span>
</div>

<div id="productx">

      </div>







<span class="d-block mt-5 pl-3">
  <button type="submit" class="btn btn1 mx-auto">Submit</button>

</span>
</form>
</div>
@endsection
<script>
var filterid=0;
function addMore() {
   filterid++;
   var urlfilter='{{ route("admin.subcategory.addmorefilterajax",":filterid") }}';
   urlfilter = urlfilter.replace(':filterid', filterid);

  $("<DIV>").load(urlfilter, function() {
      $("#productx").append($(this).html());
  }); 
}


function deleteRow() {
  $('DIV.product-item').each(function(index, item){
    jQuery(':checkbox', this).each(function () {
            if ($(this).is(':checked')) {
        $(item).remove();
            }
        });
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