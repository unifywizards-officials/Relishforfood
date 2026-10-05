<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
     <!-- Favicon -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="robots" content="noindex, nofollow">
    <link rel="icon" href="" alt="" type="image/x-icon">
    <!------------Css------------------->
    @include('layouts.guest.css')
    <!------------End Css------------------->

    <!------------Page level Style or Css------------------->
    @yield('page_level_style')
    <!------------End Page level Style or Css------------------->
</head>
<body>

<!-- End Google Tag Manager (noscript) -->
    <!------------Header------------------>
    @include('layouts.guest.header')

    <!------------End Header------------------->
    <main>
        <!------------Body Content------------------->
        @yield('content')
        <!------------End Body Content------------------->
    </main>

    <!------------Footer------------------->
    @include('layouts.guest.footer')
    <!------------EndFooter------------------->
    <!------------Scripts------------------->
    @include('layouts.guest.scripts')
    <!------------EndScripts------------------->


    <!------------Page level Scripts------------------->
    @yield('page_level_script')
    <!------------End Page level Scripts------------------->

   
