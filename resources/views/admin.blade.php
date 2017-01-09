<!DOCTYPE html>
<html>
    <head>
        <!-- Head Section -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>@yield('title')</title>

        <!-- Bootstrap Css-->
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Main Css -->
        <link rel="stylesheet" href="{{asset('css/admin.css')}}">
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
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <hr>
                    <div class="page-header">
                        <h1>لوحة التحكم<small>صالة التحرير</small></h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <ul class="nav nav-pills nav-stacked group-list">
                      <li role="presentation" class="active"><a href="{{ url('articles.index') }}">لوحة التحكم</a></li>
                      <li role="presentation"><a href="{{ url('articles/create') }}">إضافة موضوع جديد</a></li>
                      <li role="presentation"><a href="{{ url('articles/viewArticles') }}">عرض الموضوعات</a></li>
                      <li role="presentation"><a href="#">إضافة قسم جديد</a></li>
                      <li role="presentation"><a href="#">عرض الأقسام</a></li>
                      <li role="presentation"><a href="#">تعديل معلومات الموقع</a></li>
                      <li role="presentation"><a href="{{ Auth::logout() }}">تسجيل خروج</a></li>
                    </ul>
                </div>
                <div class="col-md-8 col-md-offset-1">
                    @yield('content')
                </div>
            </div>
        </div>

        <!-- Js Files And Secripts Section -->

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="{{ asset('jquery/jquery-3.1.1.min.js') }}"></script>

        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>

        <!-- Editor Script -->
        @yield('editor')

    </body>
</html>