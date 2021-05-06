<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" href="{{asset('assets/favicon.ico')}}">
  <title>I.E.Puerto Bocas | @yield('title','Inicio')</title>

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="{{asset('/node_modules/@fortawesome/fontawesome-free/css/all.min.css')}}">

  <!-- Animate CSS -->
  <link rel="stylesheet" href="{{asset('/node_modules/animate.css/animate.min.css')}}">

  <!-- Fancybox CSS -->
  <link rel="stylesheet" href="{{asset('/node_modules/@fancyapps/fancybox/dist/jquery.fancybox.min.css')}}">

  <!-- OWL carousel CSS -->
  <link rel="stylesheet" href="{{asset('/node_modules/owl.carousel/dist/assets/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('/node_modules/owl.carousel/dist/assets/owl.theme.default.min.css')}}">

  <!-- Main CSS -->
  <link rel="stylesheet" href="{{asset('/assets/css/style.min.css')}}">

  <!-- Google Font -->
  <link
    href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i&amp;subset=latin-ext"
    rel="stylesheet">
  <meta name="csrf-token" content="{{ csrf_token() }}">
</head>