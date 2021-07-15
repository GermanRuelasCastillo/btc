<!DOCTYPE html>
<!--
	Indus by TEMPLATE STOCK
	templatestock.co @templatestock
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
    Mejoras por German Elard Ruelas Castillo
-->

<html lang="en" class="no-js">
	<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Valor del Bitcoin</title>

        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,400italic,500italic,700' rel='stylesheet' type='text/css'>
        @if( Request::is('vue'))
            <link rel="stylesheet" href="{{ url('') }}/css/app.css">
        @endif
	</head>
	<body>

        <!-- Preloader -->
        <div class="animationload">
            <div class="loader">
                Loading...
            </div>
        </div>
        <!-- End Preloader -->
        @yield('content')

        <!-- JAVASCRIPTS -->
        <script src="js/jquery.min.js"></script>
        <script src="js/animated.js"></script>
        <script src="js/main.js"></script>
        @if( Request::is('/'))
        <script src="js/custom.js"></script>
        @endif

        @if( Request::is('vue'))
            <script src="{{ url('') }}/js/app.js" defer></script>
        @endif
	</body>
</html>
