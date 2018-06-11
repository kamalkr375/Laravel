<!DOCTYPE HTML>
<html>
<head>
	
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<title>{{ $meta_title or 'Archies Online' }}</title>
<meta name="description" content="Archies Online">
<meta name="keywords" content="Archies Online"/>

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<link rel="stylesheet" href="{{ asset('public/css/admin/bootstrap.min.css') }}" type="text/css" />
<link rel="stylesheet" href="{{ asset('public/css/admin/global.css') }}"  type="text/css" />



<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css" />


<script src="{{ asset('public/js/admin/jquery-3.3.1.min.js') }}" ></script>
 @stack('css')
</head>
<body>

<header class="clearfix " style="background-color:#fff;">
<a href="{{ route('admin.dashboard') }}">
<img src="{{URL::asset('public/images/archies.svg')}}" alt="Archies Online" width="180px" height="60px;" class="float-left"></a>
<h5 class="d-inline float-right redText font14 mr-4 mt-4"> Welcome Abhi</h5>
<div class="col-md-3">
<img src="">
</div>
</header>
<div class="container-fluid">
<div class="row">


@include('admin.menu')

<!--Login form-->
@yield('content')
<!-- end of form-->

</div>
</div>

    <!-- Scripts -->
<script src="{{ asset('public/js/admin/bootstrap.min.js') }}" ></script>
<script src="{{ asset('public/js/admin/popper.min.js') }}" ></script>
<script src="{{ asset('public/ckeditor/ckeditor.js') }}" ></script>
<script src="{{ asset('public/js/admin/common.js') }}" ></script>

   @stack('js')


</body>
</html>