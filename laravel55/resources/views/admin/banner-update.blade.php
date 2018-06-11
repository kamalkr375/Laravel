
@extends('layouts.admin.dashboard')
@section('content')

<div class="col-md-10 p-4 admin container" id="1Detail">
  <h1 class="redText font30 text-center">Edit Banner</h1>

<form class="p-1 col-md-10 border-top mx-auto"  method="post" action="{{ route('banner.update',$banner->id) }}" enctype="multipart/form-data">

   {{ csrf_field() }}

  <input type="hidden" name="_method" value="PUT">

<div class="form-group col-md-6">
<label>Title</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-user"></i></div></div>
<input type="text" class="form-control" name="title" required value="{{ $banner->title or old('title') }}" placeholder="Title" />
</div>

@if ($errors->has('title'))
                                    <span class="help-block">
                                        {{ $errors->first('title') }}
                                    </span>
                                @endif

</div>



<div class="form-group col-md-6">
<label>Url</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-user"></i></div></div>
<input type="text" class="form-control" name="url" required value="{{ $banner->url or old('url') }}" placeholder="Url" />
</div>
@if ($errors->has('url'))
<span class="help-block">
    {{ $errors->first('url') }}
</span>
@endif

</div>



<div class="form-group col-md-6">
<label>Event Tracking</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-phone"></i>
</div></div>
<input type="text"  value="{{ $banner->event_tracking or old('event_tracking') }}" name="event_tracking" placeholder="Event Tracking" class="form-control"  />
</div>
  @if ($errors->has('event_tracking'))
                                    <span class="help-block">
                                        {{ $errors->first('event_tracking') }}
                                    </span>
                                @endif
</div>



<div class="form-group col-md-6">
<label>Alt Tag</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-phone"></i>
</div></div>
<input type="text"  value="{{ $banner->alt_tag or old('alt_tag') }}" name="alt_tag" placeholder="Alt Tag" class="form-control"  />
</div>
  @if ($errors->has('alt_tag'))
                                    <span class="help-block">
                                        {{ $errors->first('alt_tag') }}
                                    </span>
                                @endif
</div>

<div class="form-group col-md-12">
<label>Select File</label>
<input type="file" name="banner"  class="form-control col-md-6" id="imgInp"/>
<img id="enter_image" src="#" alt="your image" class="col-md-2" />



@if ($errors->has('banner'))
    <span class="help-block">
        {{ $errors->first('banner') }}
    </span>
@endif 


 @if($banner->banner)
<img src="{{URL::asset('public/images/banner/small/'.$banner->banner)}}" width="90px" height="50px">
  @endif



</div>

<span class="d-block mt-5 pl-3">
  <button type="submit" class="btn btn1 mx-auto">Submit</button>

</span>
</form>
</div>







@endsection