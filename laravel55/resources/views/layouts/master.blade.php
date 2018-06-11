<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>{{ $meta_title or 'Archies Online' }}</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('public/css/frontend/header.css') }}" >
<link rel="stylesheet" href="{{ asset('public/css/frontend/global.css') }}" >
<link rel="stylesheet" href="{{ asset('public/css/frontend/home.css') }}" >
<link rel="stylesheet" href="{{ asset('public/css/frontend/footer.css') }}" >
<link rel="stylesheet" href="{{ asset('public/css/frontend/fontawesome-all.min.css') }}" >
<link href="{{ asset('public/css/frontend/jquery.mCustomScrollbar.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('public/css/frontend/jquery.bxslider.css') }}" rel="stylesheet" />

 @stack('css')

</head>
<body>

@include('common.header')

@yield('content')

@include('common.footer')

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>

<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

<script src="{{ asset('public/js/frontend/jquery.bxslider.js') }}"></script>
<script src="{{ asset('public/js/frontend/global.js') }}"></script>
<script src="{{ asset('public/js/frontend/jquery.mCustomScrollbar.js') }}"></script>

 @stack('js')
</body>
</html>





