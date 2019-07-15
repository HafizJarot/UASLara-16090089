<!DOCTYPE html>
<html lang="en">

@include('frontend.partials._head')

<body id="page-top">

  <!-- Navigation -->
@include('frontend.partials._nav')

  <!-- Header -->
  @include('frontend.partials._header')

@yield('content')

  <!-- Footer -->
  @include('frontend.partials._footer')

  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('frontend/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Plugin JavaScript -->
  <script src="{{asset('frontend/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Contact form JavaScript -->
  <script src="{{asset('frontend/js/jqBootstrapValidation.js')}}"></script>
  <script src="{{asset('frontend/js/contact_me.js')}}"></script>

  <!-- Custom scripts for this template -->
  <script src="{{asset('frontend/js/agency.min.js')}}"></script>

</body>

</html>
