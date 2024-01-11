<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-111135298-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-111135298-1');
    </script> -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="author" content="@yield('author')">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title></title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <link href="{{ url('images/favicon/apple-touch-icon.png') }}" rel="apple-touch-icon" sizes="180x180">
    <link href="{{ url('images/favicon/favicon-32x32.png') }}" rel="icon" type="image/png" sizes="32x32">
    <link href="{{ url('imagess/favicon/favicon-16x16.png') }}" rel="icon" type="image/png" sizes="16x16">
    <link href="{{ url('images/favicon/site.webmanifest') }}" rel="manifest">
    
    <!-- Styles -->
    <link href="{{ url('build/assets/reset.css') }}" rel="stylesheet" media="all" >
    <link href="{{ url('build/assets/v4-shims.css') }}" rel="stylesheet">
    <link href="{{ url('build/assets/fontawesome.css') }}" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

  </head>

  <body>

    <div class="app-header-container">
      <div class="app-header-wrap">
        @foreach ($page as $id)
        <div class="app-heading-wrapper">
          <div class="app-heading-container">
            <div class="app-heading-col">
              <a href="{{ url('marshall') }}" class="app-heading-{{ $id->active }}">
                <i class="fa fa-chevron-left"></i>
              </a>
            </div>
            <div class="app-heading-col">
               
              <span class="app-heading">{{ $id->active }}</span>

            </div>
          </div>
        </div>

        @include('includes.header_alerts_button_'.$id->active)
        
        
        @endforeach
      </div>
    </div>

    @yield('content')

  </body>
</html>