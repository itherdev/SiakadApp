<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>@yield('title')</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{asset('assets/modules/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/modules/fontawesome/css/all.css')}}">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="../node_modules/jqvmap/dist/jqvmap.min.css">
  <link rel="stylesheet" href="../node_modules/weathericons/css/weather-icons.min.css">
  <link rel="stylesheet" href="../node_modules/weathericons/css/weather-icons-wind.min.css">
  <link rel="stylesheet" href="../node_modules/summernote/dist/summernote-bs4.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/components.css')}}">
</head>

<body class="layout-3">
  <div id="app">
    <div class="main-wrapper container">
      <div class="navbar-bg"></div>
      @include('layouts.components.header')
      @include('layouts.components.navbar')

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>@yield('title')</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Layout</a></div>
              <div class="breadcrumb-item">Top Navigation</div>
            </div>
          </div>

          <div class="section-body">
            @yield('content')
          </div>
        </section>
      </div>


      <!-- Footer -->
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2021 <div class="bullet"></div> Design By <a href="#">hohohoo</a>
        </div>
        <div class="footer-right">
          2.3.0
        </div>
      </footer>
    </div>
  </div>

 @stack('before-scripts')
  <!-- General JS Scripts -->
  <script src="{{asset('assets/modules/jquery.min.js')}}"></script>
  <script src="{{asset('assets/modules/popper.js')}}"></script>
  <script src="{{asset('assets/modules/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/modules/jquery.nicescroll.min.js')}}"></script>
  <script src="{{asset('assets/modules/moment.min.js')}}"></script>
  <script src="{{asset('assets/js/stisla.js')}}"></script>

  <!-- JS Libraies -->
  @stack('page-scripts')
 <script src="{{asset('assets/js/stisla.js')}}"></script>

  <!-- JS Libraies -->

   <!-- Template JS File -->
   <script src="{{asset('assets/js/scripts.js')}}"></script>
   <script src="{{asset('assets/js/custom.js')}}"></script>

   <!-- Page Specific JS File -->
   <script src="{{asset('assets/js/page/index-0.js')}}"></script>
</body>
</html>
