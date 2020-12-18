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

    <!-- CSS  -->
    @stack('prepend-style')
    @include('includes.style')
    @stack('addon-style')
    <!-- END CSS  -->

  </head>

  <body>
    <!-- Navbar  -->
    @include('includes.navbar')
    <!-- End Navbar  -->

    <!-- Page Content -->
    @yield('page-content')
    <!-- End Page Content -->
    

    <!-- Footer  -->
    @include('includes.footer')
    <!-- End Footer  -->

    <!-- Bootstrap core JavaScript -->
    @stack('prepend-script')
    @include('includes.script')
    @stack('addon-script')
    <!-- End Bootstrap core JavaScript -->
  </body>
</html>