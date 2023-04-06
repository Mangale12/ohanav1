@php
    $settings = DB::table('settings')->first();
@endphp
    <!DOCTYPE html>
<html lang="en">
    <title>{{$settings->company_name}}</title>
    <link rel="icon" type="image/x-icon" href="{{asset($settings->company_image)}}">
    <meta property="og:url" content="{{URL::to('/')}}"/>
    <meta property="og:type" content="construction"/>
    <meta property="og:title" content="{{$settings->company_name}}"/>
    <meta property="og:description"
          content="Ohana Technologies and Development is a software company. The company has the best quality of works. Currently the company employs more than 50 In house staffs. The company also works in "/>
    <meta property="og:image" content="{{URL::to('/').'/'.$settings->company_image}}"/>



    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />



    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Template Main CSS File -->
    <!-- Vendor CSS Files -->
    <link href="{{ asset('public/assets/css/style.css') }}" type="text/css" rel="stylesheet">
    <!--<link href="{{ asset('public/assets/vendor/aos/aos.css') }}" type="text/css" rel="stylesheet">-->
    <link href="{{ asset('public/assets/vendor/bootstrap/css/bootstrap.min.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('public/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('public/assets/vendor/boxicons/css/boxicons.min.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('public/assets/vendor/glightbox/css/glightbox.min.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('public/assets/vendor/remixicon/remixicon.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('public/assets/vendor/swiper/swiper-bundle.min.css') }}" type="text/css" rel="stylesheet">

  <script src="{{ asset('public/assets/vendor/purecounter/purecounter.js') }}"></script>
  <script src="{{ asset('public/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('public/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('public/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('public/assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="https://kit.fontawesome.com/00f1153250.js" crossorigin="anonymous"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>


</head>



<body>
    @include('frontend.inc.nav')
    @yield('content')
  <!-- ======= Footer ======= -->
    @include('frontend.inc.footer')

  <!-- <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div> -->





</body>

</html>

