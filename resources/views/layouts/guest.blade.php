<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Travl : Hotel Admin Dashboard Bootstrap 5 Template">
	<meta property="og:title" content="Travl : Hotel Admin Dashboard Bootstrap 5 Template">
	<meta property="og:description" content="Travl : Hotel Admin Dashboard Bootstrap 5 Template">
	<meta property="og:image" content="https://travl.dexignlab.com/xhtml/social-image.png">
	<meta name="format-detection" content="telephone=no">

	<!-- PAGE TITLE HERE -->
	<title>Travl Hotel Admin Dashboard</title>

	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="{{asset('backend/images/favicon.png')}}">
    <link href="{{asset('backend/css/style.css')}}" rel="stylesheet">

</head>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                {{ $slot }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{asset('backend/vendor/global/global.min.js')}}"></script>
    <script src="{{ asset('backend/js/custom.min.js')}}"></script>
    <script src="{{asset('backend/js/dlabnav-init.js')}}"></script>
	<script src="{{ asset('backend/js/styleSwitcher.js') }}"></script>
</body>
</html>
