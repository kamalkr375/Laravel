@extends('layouts.admin.dashboard')
@section('content')

<div class="col-md-10 p-4 admin container" id="1Detail">
  <h1 class="redText font30 text-center">Edit Category</h1>

<form class="p-1 col-md-10 border-top mx-auto" method="post" enctype="multipart/form-data" action="{{ route('category.update',$data->id) }}">

   {{ csrf_field() }}

     <input type="hidden" name="_method" value="PUT">

<div class="form-group col-md-6">
<label>Name</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-user"></i></div></div>
<input type="text" class="form-control titlename" required name="name" value="{{ $data->name or old('name') }}" placeholder="Name"/>
</div>

@if ($errors->has('name'))
                                    <span class="help-block">
                                        {{ $errors->first('name') }}
                                    </span>
                                @endif

</div>




<div class="form-group col-md-6">
<label>Slug (ex. birthday-gifts)</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-user"></i></div></div>
<input type="text" class="form-control nameslug" required name="slug" value="{{ $data->slug or old('slug') }}" placeholder="Slug" />
</div>
@if ($errors->has('slug'))
<span class="help-block">
    {{ $errors->first('slug') }}
</span>
                                @endif

</div>







<div class="form-group col-md-12">
<label>Meta Description</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-phone"></i>
</div></div>
<textarea name="meta_description" class="form-control ckeditor">
       {{ $data->meta_description or  old('meta_description') }}
</textarea>
</div>
  @if ($errors->has('meta_description'))
                                    <span class="help-block">
                                        {{ $errors->first('meta_description') }}
                                    </span>
                                @endif
</div>






<div class="form-group col-md-12">
<label>Icon</label>
<input type="file" name="icon" class="form-control col-md-6" id="imgInp"/>
<img id="enter_image" src="#" alt="your image" class="col-md-2" />

@if($data->icon)
 <img src="{{URL::asset('public/images/category/'.$data->icon)}}" width="90px" height="50px">
 @endif

@if ($errors->has('icon'))
    <span class="help-block">
        {{ $errors->first('icon') }}
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
<label>Status</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-hand-pointer"></i>
</div></div>
<select class="form-control" name="status" required>
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







<span class="d-block mt-5 pl-3">
  <button type="submit" class="btn btn1 mx-auto">Submit</button>

</span>
</form>
</div>
@endsection