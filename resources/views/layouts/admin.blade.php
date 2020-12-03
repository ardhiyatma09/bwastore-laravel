<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>@yield('title')</title>

    <!-- Style -->
    @stack('prepend-style')
    @include('includes.admin.style')
    @stack('addon-style')
    <!-- End Style -->
  </head>

  <body>
    <div class="page-dashboard">
      <div class="d-flex" id="wrapper" data-aos="fade-right">
        <!-- Sidebar -->
        @include('includes.admin.sidebar')
        <!-- End Sidebar -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
          <!-- Navbar -->
          @include('includes.admin.navbar')
          <!-- End Navbar -->

          <!-- Content -->
          @yield('page-content')
          <!-- End Content -->
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    @stack('prepend-script')
    @include('includes.admin.script')
    @stack('addon-script')
    <!-- End Bootstrap core JavaScript -->
  </body>
</html>