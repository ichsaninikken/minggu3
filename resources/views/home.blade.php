<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Paradise Cafe @yield('title')
    </title>
    <!-- Template-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Damion' rel='stylesheet' type='text/css'>
    <link href="{{ asset('cafe/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('cafe/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('cafe/css/templatemo-style.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('cafe/img/favicon.ico') }}" type="image/x-icon" />
  </head>
  <body>
    <!-- Preloader -->
    <div id="loader-wrapper">
      <div id="loader">
      </div>
      <div class="loader-section section-left">
      </div>
      <div class="loader-section section-right">
      </div>
    </div>
    <!-- End Preloader -->

    <!-- HEADER -->
    <div class="tm-top-header">
      @yield('header')
    </div>
    <!-- END HEADER -->

    <!-- SIDEBAR -->
    <div class="sidebar">
      @section('sidebar')
      <nav class="main-menu">
        <ul>
          <li>
            <a href="http://127.0.0.1:8000/home">
                <i class="fa fa-home fa-2x"></i>
                <span class="nav-text">
                    Home
                </span>
            </a>
          </li>
        <li class="has-subnav">
          <a href="http://127.0.0.1:8000/profile">
              <i class="fa fa-female"></i>
              <span class="nav-text">
                  Profile
              </span>
          </a>
        </li>
        <li class="has-subnav">
          <a href="#">
            <i class="fa fa-list-alt"></i>
              <span class="nav-text">
                  Menu
              </span>
          </a>
        </li>
        <li class="has-subnav">
          <a href="#">
            <i class="fa fa-phone"></i>
              <span class="nav-text">
                  Contact
              </span>
          </a>
        </li>
    @show
    <!--END SIDEBAR-->

    <!-- CONTENT -->
    <section class="tm-welcome-section">
      <div class="container tm-position-relative">
        @yield('content')
      </div>          
    </section>
    </div>
    </div>
    <!-- END CONTENT -->

    <!-- FOOTER -->
    <footer>
      <div class="tm-black-bg">
        @yield('footer')
      </div>
    </footer>
    <!-- END FOOTER -->  
    
    <!-- JS -->
    <script type="text/javascript" src="{{ asset('cafe/js/jquery-1.11.2.min.js') }}">
    </script>  

    <!-- jQuery -->
    <script type="text/javascript" src="{{ asset('cafe/js/templatemo-script.js') }}">
    </script>  
    <!-- Templatemo Script -->
</body>
</html>
