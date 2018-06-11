@extends('layouts.admin.dashboard')
@section('content')

<div class="col-md-10 p-4 admin container" id="1Detail">
  <h1 class="redText font30 text-center">Update Affiliate </h1>

<form class="p-1 col-md-10 border-top mx-auto" method="post" action="{{ route('affiliate.update',$affiliate->id) }}">
 
   {{ csrf_field() }}

   <input type="hidden" name="_method" value="PUT">

<div class="form-group col-md-6">
<label>Name</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-user"></i></div></div>
<input type="text" class="form-control" name="name" required value="{{ $affiliate->name or old('name') }}" placeholder="Name" />
</div>

@if ($errors->has('name'))
                                    <span class="help-block">
                                        {{ $errors->first('name') }}
                                    </span>
                                @endif

</div>






<div class="form-group col-md-6">
<label>Address</label>
<div class="input-group">
  <span class="input-group-text p-3"><i class="fa fa-map-marker"></i></span>
<textarea class="form-control" name="address" required > {{ $affiliate->address or old('address') }}</textarea>
</div>
@if ($errors->has('address'))
    <span class="help-block">
        {{ $errors->first('address') }}
    </span>
@endif
</div>




<div class="form-group col-md-6">
<label>Phone Number</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-phone"></i>
</div></div>
<input type="text" required  value="{{ $affiliate->phone_number or old('phone_number') }}" name="phone_number" placeholder="Phone Number" class="form-control"  />
</div>
  @if ($errors->has('phone_number'))
                                    <span class="help-block">
                                        {{ $errors->first('phone_number') }}
                                    </span>
                                @endif
</div>



<div class="form-group col-md-6">
<label>Website</label>
<div class="input-group">
<span class="input-group-text p-3"><i class="fa fa-internet-explorer"></i></span>
<input type="text" class="form-control" required value="{{ $affiliate->website or old('website') }}" name="website"
   placeholder="Website">
</div>
 @if ($errors->has('website'))
                                    <span class="help-block">
                                        {{ $errors->first('website') }}
                                    </span>
                                @endif </li>
</div>



<div class="form-group col-md-6">
<label>Commission (%)</label>
<div class="input-group">
<span class="input-group-text p-3"><i class="fa fa-internet-explorer"></i></span>
<input type="text" class="form-control" required value="{{ $affiliate->commission or old('commission') }}" name="commission"
   placeholder="Commission">
</div>
 @if ($errors->has('commission'))
                                    <span class="help-block">
                                        {{ $errors->first('commission') }}
                                    </span>
                                @endif </li>
</div>



<span class="d-block mt-5 pl-3">
  <button type="submit" class="btn btn1 mx-auto">Submit</button>

</span>
</form>
</div>







@endsection