@extends('layouts.admin.dashboard')
@section('content')

<div class="col-md-10 p-4 admin container" id="1Detail">
  <h1 class="redText font30 text-center">Add Create</h1>

<form class="p-1 col-md-10 border-top mx-auto" method="post" action="{{ route('admin.store') }}">

   {{ csrf_field() }}




<div class="form-group col-md-5">
<label>Role</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-hand-pointer"></i>
</div></div>
<select class="form-control" name="role_id">
<option value="" >--Select--</option>
@foreach($roles as $sval)
     @if (old('role_id') == $sval->id)
        <option value="{{ $sval->id }}" selected="selected"> {{$sval->name}} </option>
          @else
               <option value="{{ $sval->id }}"> {{$sval->name}} </option>
          @endif
 @endforeach
</select>
</div>   @if ($errors->has('role_id'))
          <span class="help-block">
              {{ $errors->first('role_id') }}
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

<div class="form-group col-md-6">
<label>Email</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-user"></i></div></div>
<input type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="Slug" />
</div>
@if ($errors->has('email'))
<span class="help-block">
    {{ $errors->first('email') }}
</span>
@endif

</div>







<div class="form-group col-md-6">
<label>Password</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-phone"></i>
</div></div>
<input type="password"  value="" name="password" placeholder="Password" class="form-control"  />
</div>
  @if ($errors->has('password'))
                                    <span class="help-block">
                                        {{ $errors->first('password') }}
                                    </span>
                                @endif
</div>


<div class="form-group col-md-6">
<label>Confirm Password</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-phone"></i>
</div></div>
<input type="password"  value="" name="password_confirmation" placeholder="Confirm Password" class="form-control"  />
</div>
  @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        {{ $errors->first('password_confirmation') }}
                                    </span>
                                @endif
</div>



<dl class="multipleChk">
 @foreach($admin_menu as $admnu)

  <dt><input type="checkbox" id="{{ $admnu->name }}" name="admin_menu_id[]" value="{{$admnu->id}}">
    <lable for="{{ $admnu->name }}">{{ $admnu->name}}</lable></dt>

   @foreach($admnu->submenu as $adsubmenu)
        <dd id="{{ $adsubmenu->name }}">
          <input type="checkbox" id="{{ $adsubmenu->name }}" name="admin_menu_id[]" value="{{$adsubmenu->id}}">
          <lable for="{{ $adsubmenu->name }}">{{ $adsubmenu->name}}</lable></dd>
   @endforeach

@endforeach

</dl>



<div class="form-group col-md-5">
<label>Status</label>
<div class="input-group">
<div class="input-group-prepend">
<div class="input-group-text"><i class="fa fa-hand-pointer"></i>
</div></div>
<select class="form-control" name="status">
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