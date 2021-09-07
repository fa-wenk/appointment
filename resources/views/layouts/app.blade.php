<!--
=========================================================
* Argon Dashboard - v1.2.0
=========================================================
* Product Page: https://www.creative-tim.com/product/argon-dashboard


* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.com



=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">

  @yield('title')
  @include('layouts.script')
</head>

<body>
  <!-- Sidenav -->
  @include('layouts.sidenav')
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    @include('layouts.topnav')
  <!-- Header -->
  <div class="header bg-primary pb-6">
      <div class="container-fluid">
      <div class="header-body">
          <div class="row align-items-center py-4">
              @yield('header')
          </div>
      </div>
      </div>
  </div>
  <!-- Page content -->
  <div class="container-fluid mt--6">
      @yield('content')
      <!-- Footer -->
      <footer class="footer pt-0">
      <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6">
          <div class="copyright text-center  text-lg-left  text-muted">
              &copy; 2020 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
          </div>
          </div>
      </div>
      </footer>
  </div>
    
  </div>
  
</body>

</html>
