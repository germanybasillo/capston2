<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="keywords" content="Slide Login Form template Responsive, Login form web template, Flat Pricing tables, Flat Drop downs Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        	<!-- Custom Theme files -->
	    <link href="{{asset('style_account/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
	    <link href="{{asset('style_account/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" media="all" />
	    <!-- //Custom Theme files -->
	    <!-- web font -->
	    <link href="{{asset('style_account///fonts.googleapis.com/css?family=Hind:300,400,500,600,700')}}" rel="stylesheet">
	    <!-- //web font -->
        <title>{{ config('app.name') }}</title>
    </head>
    <body>


 <div class="w3layouts-main"> 
    <div class="bg-layer">
        <h1></h1>
        <div class="header-main">
            {{ $slot }}
        </div>
    </div>
 </div>

         <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

    </body>
</html>
