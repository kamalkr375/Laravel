@extends('layouts.admin.dashboard')
@section('content')

<div class="col-md-10 p-4 admin container" id="1Detail">
  <h1 class="redText font30 text-center">Add Relation</h1>

<form class="p-1 col-md-10 border-top mx-auto" enctype="multipart/form-data" method="post" action="{{ route('relation.store') }}">

   {{ csrf_field() }}

<div class="form-group col-md-6">
<label>Name</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-user"></i></div></div>
<input type="text" class="form-control titlename" name="name" value="{{old('name') }}" required placeholder="Name" />
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







<div class="form-group col-md-12">
<label>Description</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-phone"></i>
</div></div>
<textarea name="description" class="form-control ckeditor">
{{  old('description') }}
</textarea>
</div>
  @if ($errors->has('description'))
                                    <span class="help-block">
                                        {{ $errors->first('description') }}
                                    </span>
                                @endif
</div>





<div class="form-group col-md-12">
<label>Banner</label>
<input type="file" name="banner" class="form-control col-md-6" required  id="imgInp"/>
<img id="enter_image" src="#" alt="your image" class="col-md-2" />

@if ($errors->has('banner'))
    <span class="help-block">
        {{ $errors->first('banner') }}
    </span>
@endif 
</div>




<div class="form-group col-md-5">
<label>Gender</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-hand-pointer"></i>
</div></div>
<select class="form-control" name="gender_id" required>
<option value="" >--Select--</option>
  @foreach($genders as $gender)
         <option value="{{$gender->id}}">{{$gender->name}}</option>
    @endforeach

</select>
</div> @if ($errors->has('gender_id'))
          <span class="help-block">
              {{ $errors->first('gender_id') }}
          </span>
      @endif
</div>




<div class="form-group col-md-5">
<label>City Relationship</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-hand-pointer"></i>
</div></div>
<select class="form-control" name="city_relationship" required>
<option value="" >--Select--</option>
    @foreach([0=>'No',1=>'Yes'] as $cid=>$cval)
         <option value="{{$cid}}">{{$cval}}</option>
    @endforeach

</select>
</div> @if ($errors->has('city_relationship'))
          <span class="help-block">
              {{ $errors->first('city_relationship') }}
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
     @if (old('status') == $sind)
                <option value="{{ $sind }}" > {{$sval}} </option>
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