<!DOCTYPE html>
<html>
<head>
    <title>
        @section('title')
        Laravel 4 - Tutorial
        @show
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS are placed here -->
    {{ HTML::style('css/bootswatch.less') }}
    {{ HTML::style('css/variable.less') }}
    {{ HTML::style('css/bootstrap.min.css') }}
    {{ HTML::style('css/bootstrap.watch.min.css') }}
    {{ HTML::style('css/bootstrap-responsive.css') }}

    <style>
        @section('styles')
            body {
                padding-top: 60px;
            }
        @show
    </style>
</head>

<body>
<!-- Navbar -->

@include('partials.navigation')


<!-- Container -->
<div class="container">

    <!-- Content -->
    <div class="span8">
        @yield('content')
    </div>

    <div class="span3">
        @yield('right-side')
    </div>

</div>

@include('partials.footer');

<!-- Scripts are placed here -->
{{ HTML::script('js/jquery.js') }}
{{ HTML::script('js/bootstrap.min.js') }}

</body>
</html>