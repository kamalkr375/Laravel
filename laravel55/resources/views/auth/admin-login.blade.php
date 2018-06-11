@extends('layouts.admin.home')

@push('css')
  <link rel="stylesheet" href="{{ asset('public/css/admin/bootstrap.min.css') }}"" type="text/css" />
  <link rel="stylesheet" href="{{ asset('public/css/admin/admin-login.css') }}""  type="text/css" />
@endpush

@section('content')
<div class="card col-sm-4 offset-sm-4 p-3 mt-5">
<div class="card-body">
<img src="{{ asset('public/images/archies.svg') }}" alt="Archies Online" width="180px" height="70px;" />
@if(Session::has('message'))
<p class="alert alert-info">{{ Session::get('message') }}</p>
@endif
<form class="" method="POST" action="{{ route('admin.login.submit') }}">
       {{ csrf_field() }}

<div class="field">
<input name="email" id="email" type="email" placeholder="Enter User Id" value="{{ old('email') }}" required>
<label for="email">Login Id</label></div>
 @if ($errors->has('email'))
                                    <span class="help-block">
                                        {{ $errors->first('email') }}
                                    </span>
                                @endif
<div class="mt-3 field"><input name="password" id="password" placeholder="Enter Your Password" type="password" required><label for="password">Password</label>
	</div>
 @if ($errors->has('password'))
                                    <span class="help-block">
                                        {{ $errors->first('password') }}
                                    </span>
                                @endif



<div class="mt-5"><button type="submit" class="btn orangeColor pr-3 pl-3 whiteText float-left">Login</button>
<small class="redText cursorPointer float-right"><a href="{{ route('admin.password.request') }}" class="redText">Forgot Password</a></small></div>
</form>  
  <div>
</div>
</div>
</div>
@endsection

@push('js')


<script src="{{ asset('public/js/admin/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('public/js/admin/bootstrap.min.js') }}"></script>

@endpush
