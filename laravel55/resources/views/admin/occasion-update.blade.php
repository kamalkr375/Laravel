@extends('layouts.admin.dashboard')
@section('content')

<div class="col-md-10 p-4 admin container" id="1Detail">
  <h1 class="redText font30 text-center">Add Occasion</h1>

<form class="p-1 col-md-10 border-top mx-auto" enctype="multipart/form-data" method="post" action="{{ route('occasion.update',$data->id) }}">

   {{ csrf_field() }}

    <input type="hidden" name="_method" value="PUT">

<div class="form-group col-md-6">
<label>Name</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-user"></i></div></div>
<input type="text" class="form-control titlename" name="name"  required value="{{ $data->name or old('name') }}" placeholder="Name" />
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
<input type="text" class="form-control nameslug" name="slug" required value="{{ $data->slug or old('slug') }}" placeholder="Slug" /> 
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
<label>Banner 1</label>
<input type="file" name="banner_1" class="form-control col-md-6" id="imgInp"/>
<img id="enter_image" src="#" alt="your image" class="col-md-2" />

 @if($data->banner_1)
  <img src="{{URL::asset('public/images/occasion/large/'.$data->banner_1)}}" width="90px" height="50px">
@endif 

@if ($errors->has('banner_1'))
    <span class="help-block">
        {{ $errors->first('banner_1') }}
    </span>
@endif 
</div>




<div class="form-group col-md-12">
<label> Banner 2</label>
<input type="file" name="banner_2" class="form-control col-md-6" id="imgInp"/>
<img id="enter_image" src="#" alt="your image" class="col-md-2" />

 @if($data->banner_2)
  <img src="{{URL::asset('public/images/occasion/large/'.$data->banner_2)}}" width="90px" height="50px">
@endif 

@if ($errors->has('banner_2'))
    <span class="help-block">
        {{ $errors->first('banner_2') }}
    </span>
@endif 
</div>



<div class="form-group col-md-12">
<label>Banner 3</label>
<input type="file" name="banner_3" class="form-control col-md-6" id="imgInp"/>
 @if($data->banner_3)
  <img src="{{URL::asset('public/images/occasion/large/'.$data->banner_3)}}" width="90px" height="50px">
@endif 
<img id="enter_image" src="#" alt="your image" class="col-md-2" />

@if ($errors->has('banner_3'))
    <span class="help-block">
        {{ $errors->first('banner_3') }}
    </span>
@endif 
</div>


<div class="form-group col-md-12">
<label>Banner 4</label>
<input type="file" name="banner_4" class="form-control col-md-6" id="imgInp"/>
 @if($data->banner_4)
  <img src="{{URL::asset('public/images/occasion/large/'.$data->banner_4)}}" width="90px" height="50px">
@endif 
<img id="enter_image" src="#" alt="your image" class="col-md-2" />

@if ($errors->has('banner_4'))
    <span class="help-block">
        {{ $errors->first('banner_4') }}
    </span>
@endif 
</div>

<div class="form-group col-md-12">
<label>Banner 5</label>
<input type="file" name="banner_5" class="form-control col-md-6" id="imgInp"/>
 @if($data->banner_5)
  <img src="{{URL::asset('public/images/occasion/large/'.$data->banner_5)}}" width="90px" height="50px">
@endif 
<img id="enter_image" src="#" alt="your image" class="col-md-2" />

@if ($errors->has('banner_5'))
    <span class="help-block">
        {{ $errors->first('banner_5') }}
    </span>
@endif 
</div>








<div class="form-group col-md-5">
<label>Gender</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-hand-pointer"></i>
</div></div>
<select class="form-control" name="gender_id" required >
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
<label>Status</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-hand-pointer"></i>
</div></div>
<select class="form-control" name="status"  required>
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