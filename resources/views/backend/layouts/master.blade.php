<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-menu-fixed">
  <head>
    @include('backend.layouts.head')
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

       @include('backend.layouts.sidebar')
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          @include('backend.layouts.nav')

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            @yield('content')

            <!-- / Content -->

         @include('backend.layouts.footer')
  </body>
</html>
