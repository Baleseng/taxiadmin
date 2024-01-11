<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<meta name="description" content="@yield('description')">
	  	<meta name="keywords" content="@yield('keywords')">
	  	<meta name="author" content="@yield('author')">
	<!-- CSRF Token -->
		<meta name="csrf-token" content="{{ csrf_token() }}">

		<title>@yield('title')</title>

		<!-- Scripts -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	
 		<!-- Fonts -->
    	<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    	<link href="{{ url('images/favicon/apple-touch-icon.png') }}" rel="apple-touch-icon" sizes="180x180">
    	<link href="{{ url('images/favicon/favicon-32x32.png') }}" rel="icon" type="image/png" sizes="32x32">
    	<link href="{{ url('imagess/favicon/favicon-16x16.png') }}" rel="icon" type="image/png" sizes="16x16">
    	<link href="{{ url('images/favicon/site.webmanifest') }}" rel="manifest">
  	
  		<!-- Styles -->
    	<link href="{{ url('build/assets/fontawesome.css') }}" rel="stylesheet">

      <!-- Scripts -->
      @vite(['resources/sass/app.scss', 'resources/js/app.js'])

      <script src="https://code.highcharts.com/highcharts.js"></script>
      <script src="https://code.highcharts.com/modules/data.js"></script>
      <script src="https://code.highcharts.com/highcharts-more.js"></script>
      <script src="https://code.highcharts.com/modules/exporting.js"></script>
      <script src="https://code.highcharts.com/modules/export-data.js"></script>
      <script src="https://code.highcharts.com/modules/accessibility.js"></script>
 
	</head>

	<body>
		
		<div class="admin-header-container">
			<div class="admin-header-wrap">
				
        <div class="logo-wrap">
					<div class="logo">
					  <a href="{{ url($url.'/') }}">
					  	<img src="{{ url('images/logo/signageadmin.svg') }}"/>
					  </a>
					</div>
				</div>

				@yield('searchfield')

				<div class="header-nav-btn">
					<span class="separetor hide"></span>
					<div class="naviconbtn">

						@yield('menubutton') 

					</div>
				</div>
			</div>
		</div>
	  
		@yield('content')

	</body>

</html>

