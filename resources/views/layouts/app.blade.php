<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Myweb</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    @include('inc.navbar')
    <div class="container">
      @if(Request::is('/'))
      @include('inc.showcase')
      @endif
      <div class="row">
        <div class="col-md-8 col-lg-8">
        @include('inc/messages')
         @yield('content')
        </div>
        <div class="col-md-4 col-lg-4">
           @include('inc.sidebar')
        </div>
      </div>
    </div>

  <footer class="footer text-center">
    <p>Copyright 2019 &copy; Myweb</p>
  </footer>




  </body>
</html>
