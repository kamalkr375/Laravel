@extends('layouts.admin.dashboard')
@section('content')

<div class="col-md-10 p-4 admin container" id="1Detail">
  <h1 class="redText font30 text-center">Add Brand</h1>

<form class="p-1 col-md-10 border-top mx-auto"  method="post" action="{{ route('admin.brand.update',$brand->id) }}" enctype="multipart/form-data">

   {{ csrf_field() }}

  <input type="hidden" name="_method" value="PUT">

<div class="form-group col-md-6">
<label>Name</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-user"></i></div></div>
<input type="text" class="form-control titlename" required name="name" value="{{ $brand->name or old('name') }}"  placeholder="Name" />
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
<input type="text" class="form-control nameslug" required name="slug" value="{{ $brand->slug or old('slug') }}" placeholder="Slug" />
</div>
@if ($errors->has('slug'))
<span class="help-block">
    {{ $errors->first('slug') }}
</span>
                                @endif

</div>







<div class="form-group col-md-10">
<label>Description</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-phone"></i>
</div></div>
<textarea  name="description" required placeholder="Description" class="form-control ckeditor"  />
{{$brand->description or old('description') }}
</textarea>
</div>
  @if ($errors->has('description'))
                                    <span class="help-block">
                                        {{ $errors->first('description') }}
                                    </span>
                                @endif
</div>




<div class="form-group col-md-12">
<label>Select File</label>
<input type="file" name="logo" class="form-control col-md-6" id="imgInp"/>
<img id="enter_image" src="#" alt="your image" class="col-md-2" />

  @if($brand->logo)
<img src="{{URL::asset('public/images/brands/'.$brand->logo)}}" width="90px" height="50px">
  @endif

@if ($errors->has('logo'))
    <span class="help-block">
        {{ $errors->first('logo') }}
    </span>
@endif 
</div>

<span class="d-block mt-5 pl-3">
  <button type="submit" class="btn btn1 mx-auto">Submit</button>
</span>
</form>
</div>
@endsection