<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="../../assets/ico/favicon.png">

        <title>Scheduler</title>

        <!-- CSS -->
        <link href="{{ asset('css/global.css') }}" rel="stylesheet">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="{{ asset('js/html5shiv.js') }}"></script>
            <script src="{{ asset('js/respond.min.js') }}"></script>
        <![endif]-->
    </head>

    <body>

        <div id="main-container" class="container">
            <div id="primary-header" class="header">
                <ul class="nav nav-pills pull-right">
                    @if (Sentry::check())
                    <li><a href="{{ url('schedule') }}">Schedule</a></li>
                    <!-- <li><a href="{{ url('settings') }}">Settings</a></li> -->
                    <li><a href="{{ url('signout') }}">Sign Out</a></li>
                    @else
                    <li><a href="{{ url('/') }}">Sign In</a></li>
                    <li><a href="{{ url('signup') }}">Sign Up</a></li>
                    @endif
                </ul>
                @if (Sentry::check())
                <h3><a href="{{ url('schedule') }}">Scheduler</a></h3>
                @else
                <h3><a href="{{ url('/') }}">Scheduler</a></h3>
                @endif
            </div>

            <div class="row">
                @yield('content')
            </div>

            <div class="footer">
                <p>&copy; {{ date('Y') }} Adam Meech</p>
            </div>

        </div> <!-- /container -->


        <!-- Scripts -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="{{ asset('js/global.js') }}"></script>
    </body>
</html>
