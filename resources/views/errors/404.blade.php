<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
   <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <link href="{{ url('images/favicon/apple-touch-icon.png') }}" rel="apple-touch-icon" sizes="180x180">
    <link href="{{ url('images/favicon/favicon-32x32.png') }}" rel="icon" type="image/png" sizes="32x32">
    <link href="{{ url('imagess/favicon/favicon-16x16.png') }}" rel="icon" type="image/png" sizes="16x16">
    <link href="{{ url('images/favicon/site.webmanifest') }}" rel="manifest">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    
    <link href="{{ url('build/assets/reset.css') }}" rel="stylesheet" media="all" >
    <link href="{{ url('build/assets/v4-shims.css') }}" rel="stylesheet">
    <link href="{{ url('build/assets/fontawesome.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        <main class="py-4">
            <div class="flex-center position-ref full-height">
                <div class="content">
                    <div class="m-b-md">
                      <div class="logo">
                        <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ url('images/logo/signageadmin.svg') }}"/></a>
                      </div>
                    </div>
                    <div id="notfound">
                        <div class="notfound">
                          <div class="notfound-404">
                            <h3>Oops! Page not found</h3>
                            <h1><span>4</span><span>0</span><span>4</span></h1>
                          </div>
                          <h2>we are sorry, but the page you requested was not found</h2>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
