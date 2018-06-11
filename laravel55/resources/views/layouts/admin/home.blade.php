<!DOCTYPE HTML>
<html>
<head>
	
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<title>{{ $meta_title }}</title>
<meta name="description" content="Archies Online">
<meta name="keywords" content="Archies Online"/>

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

  @stack('css')

</head>
<body>

<!--Login form-->
@yield('content')
<!-- end of form-->

    <!-- Scripts -->
@stack('js')

</body>
</html>