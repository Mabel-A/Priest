<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from demos.codexcoder.com/labartisan/html/heaven-hands-demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Nov 2022 06:06:31 GMT -->

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Heaven Hands</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootsrarp Css -->
  <link rel="stylesheet" href="{{ asset('pay/assets/css/bootstrap.min.css') }}">
  <!-- Font Awesome Css -->
  <link rel="stylesheet" href="{{ asset('pay/assets/css/font-awesome.min.css') }}">
  <!-- Reset Css -->
  <link rel="stylesheet" href="{{ asset('pay/assets/css/normalize.css') }}">
  <!-- Flaticon css  -->
  <link rel="stylesheet" href="{{ asset('pay/assets/font/flaticon.css') }}">
  <!-- Swiper Css -->
  <link rel="stylesheet" href="{{ asset('pay/assets/css/swiper.min.css') }}">
  <!-- LightCase css -->
  <link rel="stylesheet" href="{{ asset('pay/assets/css/lightcase.css') }}">
  <!-- flexSlider css -->
  <link rel="stylesheet" href="{{ asset('pay/assets/css/flexslider.css') }}">
  <!-- nstSlider css -->
  <link rel="stylesheet" href="{{ asset('pay/assets/css/jquery.nstSlider.css') }}">
  <!-- Main css -->
  <link rel="stylesheet" href="{{ asset('pay/assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('pay/assets/css/responsive.css') }}">
  <script src="{{ asset('pay/assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>

<style>
  body {
    background: #f2f2f2;
  }

  .payment {
    border: 1px solid #f2f2f2;
    height: 280px;
    border-radius: 20px;
    background: #fff;
  }

  .payment_header {
    background: rgba(255, 102, 0, 1);
    padding: 20px;
    border-radius: 20px 20px 0px 0px;

  }

  .check {
    margin: 0px auto;
    width: 50px;
    height: 50px;
    border-radius: 100%;
    background: #fff;
    text-align: center;
  }

  .check i {
    vertical-align: middle;
    line-height: 50px;
    font-size: 30px;
  }

  .content {
    text-align: center;
  }

  .content h1 {
    font-size: 25px;
    padding-top: 25px;
  }

  .content a {
    width: 200px;
    height: 35px;
    color: #fff;
    border-radius: 30px;
    padding: 5px 10px;
    background: rgba(255, 102, 0, 1);
    transition: all ease-in-out 0.3s;
  }

  .content a:hover {
    text-decoration: none;
    background: #000;
  }
</style>

<body>

  <div class="container mt-5">
    <div class="row">
      <div class="col-md-6 mx-auto mt-5">
        <div class="payment">
          <div class="payment_header">
            <div class="check"><i class="fa fa-check" aria-hidden="true"></i></div>
          </div>
          <div class="content">
            <h1>Payment Success !</h1>
            <p class="mt-5">thanks for your generousity</p>
            <a href="{{ route('donate') }}">Go back</a>
          </div>

        </div>
      </div>
    </div>
  </div>

  <!-- End Footer Section -->
  <script src="../../../../code.jquery.com/jquery-1.12.0.min.js"></script>
  <script>
    window.jQuery || document.write('<script src="{{ asset('pay/assets/js/vendor/jquery-1.12.0.min.js"><\/script>') }}')
  </script>
  <!-- Bootstarp js -->
  <script src="{{ asset('pay/assets/js/bootstrap.min.js') }}"></script>
  <!-- Google Map -->
  <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAQlXnmyNPAeN3c3HNyWoUMqDk6bDF31Cg">
  </script>
  <script src="{{ asset('pay/assets/js/gmap.script.js') }}"></script>
  <!-- Progressbar Js -->
  <script src="{{ asset('pay/assets/js/circle.progress.js') }}"></script>
  <!-- Count Down -->
  <script src="{{ asset('pay/assets/js/TimeCircles.js') }}"></script>
  <!-- Custom ScrollBar  -->
  <script src="{{ asset('pay/assets/js/enscroll-0.6.2.min.js') }}"></script>
  <!-- LightCase  -->
  <script src="{{ asset('pay/assets/js/lightcase.js') }}"></script>
  <!-- Isotop -->
  <script src="{{ asset('pay/assets/js/isotope.pkgd.min.js') }}"></script>
  <!-- Masonry -->
  <script src="{{ asset('pay/assets/js/masonry.js') }}"></script>
  <!-- Swipper -->
  <script src="{{ asset('pay/assets/js/swiper.min.js') }}"></script>
  <!-- Flex Slider -->
  <script src="{{ asset('pay/assets/js/jquery.flexslider.js') }}"></script>
  <!-- NST slider -->
  <script src="assets/js/jquery.nstSlider.min.js') }}"></script>
  <!-- Main Js -->
  <script src="{{ asset('pay/assets/js/functions.js') }}"></script>
</body>

<!-- Mirrored from demos.codexcoder.com/labartisan/html/heaven-hands-demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Nov 2022 06:06:31 GMT -->

</html>
