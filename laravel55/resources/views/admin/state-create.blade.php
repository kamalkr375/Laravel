@extends('layouts.admin.dashboard')
@section('content')

<div class="col-md-10 p-4 admin container" id="1Detail">
  <h1 class="redText font30 text-center">Add State</h1>

<form class="p-1 col-md-10 border-top mx-auto" method="post" action="{{ route('state.store') }}">

   {{ csrf_field() }}
   
   
   
   
 <div class="form-group col-md-5">
<label>Country</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-hand-pointer"></i>
</div></div>
<select class="form-control" name="country_id" required >
<option value="" >--Select--</option>
 @foreach($country as $cval)
 
     @if( old('country_id') == $cval->id)
	
             <option value="{{ $cval->id }}" selected="selected">{{ $cval->name }}</option>
	 
	 @else
		  <option value="{{ $cval->id }}">{{ $cval->name }}</option>
	 @endif
	 
	 
           
       @endforeach
</select>
</div> @if ($errors->has('country_id'))
          <span class="help-block">
              {{ $errors->first('country_id') }}
          </span>
      @endif
</div>
  
   
   
   

<div class="form-group col-md-6">
<label>Name</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-user"></i></div></div>
<input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Name" />
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