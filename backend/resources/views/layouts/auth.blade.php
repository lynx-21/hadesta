<!doctype html>
<html lang="en">
  <head>
    @include('partials.app.header')
</head>
<body class="bodi">
    @include('partials.app.navbar')
    
    @yield('content')
    
    @include('partials.app.modals.login')
    @include('partials.app.footer')
  </body>
</html>