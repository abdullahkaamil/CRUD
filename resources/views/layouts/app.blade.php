<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>School App</title>

    <!-- Scripts -->
    <script src="{{ asset('js/framework7.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Styles -->
    <link href="{{ asset('css/framework7-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/f7.colo.css') }}" rel="stylesheet">
    <link href="{{ asset('css/f7.material.css') }}" rel="stylesheet">

</head>
<body>
<div class="panel-overlay"></div>
<div class="panel panel-left panel-reveal">
    <div class="content-block">
        <p><strong>Menu</strong></p>
        <p>  <a href="{{ url('/home') }}" class="link external">ADD New Student</a></p>
        <p>  <a href="#" class="link external" ></a>
            <a class="link" href="{{ route('logout') }}"
               onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form></p>
    </div>
</div>

<div class="views">
    <div class="view view-main">
        <div class="pages">
            <div data-page="home" class="page navbar-fixed">
                <div class="navbar">
                    <div class="navbar-inner">
                        <div class="left">
                            <a class="open-panel link">
                                <i class="icon icon-bars"></i>
                                <span>Menu</span>
                            </a>
                        </div>
                        <div class="center"><a href="{{url ('/index') }}" class="link external"> School APP</a></div>
                        <div class="right">
                            <a href="{{ url('/home') }}" class="link external">
                                <i class="icon f7-icons">add</i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="page-content">
                    <div class="content-block">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="/js/framework7.min.js"></script>
<script>var myApp = new Framework7();</script>
</body>
</html>
