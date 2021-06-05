<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="{{ url('frontend/images/favicon.ico') }}">
  <title>Admin | Yola Sofa</title>

  @stack('prepend-style')
  @include('includes.admin.style')
  @livewireStyles
  @stack('addon-style')

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">
    @include('includes.admin.sidebar')
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
      
      <!-- Main Content -->
      <div id="content">
        @include('includes.admin.navbar')
        @yield('content')
      </div>
      <!-- End of Main Content -->

      @include('includes.admin.footer')
    </div>
    <!-- End of Content Wrapper -->
  </div>
  <!-- End of Page Wrapper -->

  

  @include('includes.admin.utilities')

  @stack('prepend-script')
  @include('includes.admin.script')
  @livewireScripts
  @stack('addon-script')

</body>
</html>
