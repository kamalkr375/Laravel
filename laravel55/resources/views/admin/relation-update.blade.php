@extends('layouts.admin.dashboard')
@section('content')

<div class="col-md-10 p-4 admin container" id="1Detail">
  <h1 class="redText font30 text-center">Update Relation</h1>

<form class="p-1 col-md-10 border-top mx-auto" enctype="multipart/form-data" method="post" 
action="{{ route('relation.update',$data->id) }}">

   {{ csrf_field() }}


      <input type="hidden" name="_method" value="PUT">

<div class="form-group col-md-6">
<label>Name</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-user"></i></div></div>
<input type="text" class="form-control" name="name" required value="{{ $data->name or old('name') }}" placeholder="Name" />
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
<input type="text" class="form-control" name="slug" required value="{{ $data->slug or old('slug') }}" placeholder="Slug" /> (ex. son-in-law)
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
{{ $data->description or old('description') }}
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
<input type="file" name="banner"  class="form-control col-md-6" id="imgInp"/>
<img id="enter_image" src="#" alt="your image" class="col-md-2" />


 @if($data->banner)
  <img src="{{URL::asset('public/images/relation/large/'.$data->banner)}}" width="90px" height="50px">
@endif 

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
<select class="form-control" required name="gender_id">
<option value="" >--Select--</option>

   
        @foreach($genders as $gender)

          @if ($data->gender_id == $gender->id)
                <option value="{{ $gender->id }}" selected > {{$gender->name}} </option>
          @else
               <option value="{{ $gender->id }}"> {{$gender->name}} </option>
          @endif

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

 @foreach([0=>'No',1=>'Yes'] as $sind=>$sval)

          @if ($data->city_relationship == $sind)
                <option value="{{ $sind }}" selected > {{$sval}} </option>
          @else
               <option value="{{ $sind }}"> {{$sval}} </option>
          @endif

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