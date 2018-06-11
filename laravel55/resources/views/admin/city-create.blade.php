@extends('layouts.admin.dashboard')
@section('content')

<div class="col-md-10 p-4 admin container" id="1Detail">
  <h1 class="redText font30 text-center">Add City</h1>

<form class="p-1 col-md-10 border-top mx-auto"  method="post" action="{{ route('city.store') }}">

   {{ csrf_field() }}
   
   
   
   
 <div class="form-group col-md-5">
<label>Country</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-hand-pointer"></i>
</div></div>
<select class="form-control admin_country_id" name="country_id" required  data-stateajax="{{route('city.getstateajax') }}">
<option value="" >--Select--</option>
 @foreach($country as $cval)

             <option value="{{ $cval->id }}">{{ $cval->name }}</option>
           
       @endforeach
</select>
</div> @if ($errors->has('country_id'))
          <span class="help-block">
              {{ $errors->first('country_id') }}
          </span>
      @endif
</div>
  
   
   <div class="form-group col-md-5">
<label>State</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-hand-pointer"></i>
</div></div>
<select class="form-control state_id" name="state_id"  required >
<option value="" >--Select--</option>
 
</select>
</div> @if ($errors->has('state_id'))
          <span class="help-block">
              {{ $errors->first('state_id') }}
          </span>
      @endif
</div>
   
   

<div class="form-group col-md-6">
<label>Name</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-user"></i></div></div>
<input type="text" class="form-control"  name="name" value="{{ old('name') }}" required placeholder="Name" />
</div>

@if ($errors->has('name'))
                                    <span class="help-block">
                                        {{ $errors->first('name') }}
                                    </span>
                                @endif

</div>









<span class="d-block mt-5 pl-3">
  <button type="submit" class="btn btn1 mx-auto">Submit</button>

</span>
</form>
</div>


@endsection