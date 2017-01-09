<!-- Head Section -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>@yield('title')</title>

<!-- Bootstrap Css-->
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

<!-- Main Css -->
<link rel="stylesheet" href="{{asset('css/main.css')}}">
<link rel="stylesheet" href="{{asset('css/style.css')}}">

<!-- Css StyleSheets Will Loaded In Specfic Pages -->
@yield('stylesheet')

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Load Bootstrap RTL theme from RawGit -->
<link href="{{ asset('css/bootstrap-rtl.min.css') }}" rel="stylesheet">