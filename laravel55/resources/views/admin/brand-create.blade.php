
@extends('layouts.admin.dashboard')
@section('content')

<div class="col-md-10 p-4 admin container" id="1Detail">
  <h1 class="redText font30 text-center">Add Brand</h1>

<form class="p-1 col-md-10 border-top mx-auto" enctype="multipart/form-data" method="post" action="{{ route('admin.brand.store') }}">

   {{ csrf_field() }}

<div class="form-group col-md-6">
<label>Name</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-user"></i></div></div>
<input type="text" class="form-control titlename" required name="name" value="{{ old('name') }}" placeholder="Name" />
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







<div class="form-group col-md-10">
<label>Description</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-phone"></i>
</div></div>
<textarea  name="description" placeholder="Description" required class="form-control ckeditor"  />
{{ old('description') }}
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