<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="{{ url('frontend/images/favicon.ico') }}"/>
  <title>
    @yield('title')
  </title>

  @stack('prepend-style')
  @include('includes.log-style')
  @stack('addon-style')

</head>
<body>

  @yield('content')
  
  @stack('prepend-script')
  @include('includes.script')
  @stack('addon-script')

</body>
</html>