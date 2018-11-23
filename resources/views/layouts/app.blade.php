<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>School App</title>
    <!-- Styles -->
    <link href="{{ asset('css/framework7-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/f7.colo.css') }}" rel="stylesheet">
    <link href="{{ asset('css/f7.material.css') }}" rel="stylesheet">


</head>
<body class="framework7-root">
<div class="panel-overlay" style=""></div>
<div class="panel panel-left panel-reveal" style="">
    <div class="content-block">
        <p><strong>Menu</strong></p>
        <p ><a class="link external" href="{{ url('/home') }}">Add New Student</a></p>
        <p>
            <a class="link" href="{{ route('logout') }}"
               onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">

                <i class="icon f7-icons">exit</i>   </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        </p>
    </div>
</div>
<div class="views">
    <div class="view view-main" data-page="home">
        <div class="pages">
            <div data-page="home" class="page navbar-fixed">
                <div class="navbar">
                    <div class="navbar-inner">
                        <div class="left" style="left: 0px;"><a href="#" class="open-panel"><i class="icon icon-bars"></i></a></div>
                        <div class="center"><a href="{{url ('/index') }}" class="link external"> School APP</a></div>
                        <div class="right">
                            <a href="{{ url('/home') }}" class="link external">
                                <i class="icon f7-icons">add</i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="page-content">
                        @yield('content')
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="{{ asset('js/script.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script type="text/javascript" src="/js/framework7.min.js"></script>
<script>var myApp = new Framework7();</script>

</body>
</html>
