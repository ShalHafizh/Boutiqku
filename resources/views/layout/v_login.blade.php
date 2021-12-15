<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="endless admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, endless admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="http://laravel.pixelstrap.com/endless/assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="http://laravel.pixelstrap.com/endless/assets/images/favicon.png" type="image/x-icon">
    <title>SIPB | Login</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Google font-->
<link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<!-- Font Awesome-->
<link rel="stylesheet" type="text/css" href="http://laravel.pixelstrap.com/endless/assets/css/fontawesome.css">
<!-- ico-font-->
<link rel="stylesheet" type="text/css" href="http://laravel.pixelstrap.com/endless/assets/css/icofont.css">
<!-- Themify icon-->
<link rel="stylesheet" type="text/css" href="http://laravel.pixelstrap.com/endless/assets/css/themify.css">
<!-- Flag icon-->
<link rel="stylesheet" type="text/css" href="http://laravel.pixelstrap.com/endless/assets/css/flag-icon.css">
<!-- Feather icon-->
<link rel="stylesheet" type="text/css" href="http://laravel.pixelstrap.com/endless/assets/css/feather-icon.css">

<!-- Bootstrap css-->
<link rel="stylesheet" type="text/css" href="http://laravel.pixelstrap.com/endless/assets/css/bootstrap.css">
<!-- App css-->
<link rel="stylesheet" type="text/css" href="http://laravel.pixelstrap.com/endless/assets/css/style.css">
<link id="color" rel="stylesheet" href="http://laravel.pixelstrap.com/endless/assets/css/light-1.css" media="screen">
<!-- Responsive css-->
<link rel="stylesheet" type="text/css" href="http://laravel.pixelstrap.com/endless/assets/css/responsive.css">  </head>
  <body main-theme-layout="main-theme-layout-1">
    <!-- Loader starts-->
    <!-- <div class="loader-wrapper">
      <div class="loader bg-white">
        <div class="whirly-loader"> </div>
      </div>
    </div> -->
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper">
      
      <!-- Page Body Start-->
      <!-- login page start-->
    <main class="py-4">
      @yield('content')
  </main>
 
      <!-- login page end-->
            <!-- Page Body End-->
          </div>
        </body>
      </html>