<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>NIA COMPETENCES</title>

  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link  rel="icon" href="{{ asset( 'img/favicon.png') }} ">
  <link href="{{ asset( 'img/apple-touch-icon.png') }} " rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">


    <link rel="stylesheet" 
    href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
    crossorigin="anonymous">

  <!-- Vendor CSS Files -->
  <link href="{{ url( 'vendor/animate.css/animate.min.css') }} " rel="stylesheet">
  <link href="{{ url( 'vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ url( 'vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ url( 'vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ url( 'vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ url( 'vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ url( 'vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{('css/style.css')}}" rel="stylesheet">

</head>

<body>
    
    {{View::make('header')}}

    @yield('content')

    {{View::make('footer')}}


  <!-- Latest compiled and minified JavaScript -->

<script src="{{ url ('vendor/aos/aos.js') }}"></script>
<script src="{{ url ('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ url ('vendor/php-email-form/validate.js') }}"></script>
<script src="{{ url ('vendor/purecounter/purecounter.js')  }}"></script>
<script src="{{ url ('vendor/swiper/swiper-bundle.min.js')  }}"></script>
<script src="{{ url ('js/main.js') }}"></script>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>