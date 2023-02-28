<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> {{ @config('app.name') }} - @yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/frontend/img/logo.png') }}" rel="icon">
  <link href="{{ asset('assets/frontend/img/logo.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor css') }} Files -->
  <link href="{{ asset('assets/frontend/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/frontend/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/frontend/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/frontend/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/frontend/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main css') }} File -->
  <link href="{{ asset('assets/frontend/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: eNno - v4.10.0
  * Template URL: https://bootstrapmade.com/enno-free-simple-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  @include('frontend.partials.header')
  <!-- End Header -->

  <!-- ======= Main Section ======= -->
  <main id="main">
    @yield('content')
  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('frontend.partials.footer')
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor js') }} Files -->
  <script src="{{ asset('assets/frontend/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('assets/frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/frontend/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/frontend/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/frontend/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/frontend/vendor/php-email-form/validate.js') }}"></script>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
          integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- Template Main js') }} File -->
  <script src="{{ asset('assets/frontend/js/main.js') }}"></script>
  <script src="{{ mix('/js/app.js') }}"></script>
@stack('js_script')

<script>

    @php if (\Session::get('error')){ @endphp
    Swal.fire({
        title: 'Error!',
        text: "{{Session::get('error')}}",
        icon: 'error',
        confirmButtonText: 'OK'
    })
    @php } @endphp

    @php if (\Session::get('success')){ @endphp
    Swal.fire({
        title: 'Success!',
        text: "{{Session::get('success')}}",
        icon: 'success',
        confirmButtonText: 'OK'
    })
    @php } @endphp
</script>
</body>

</html>
