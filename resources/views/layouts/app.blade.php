

<!DOCTYPE html>
<!-- fonte do template: https://github.com/BlackrockDigital/startbootstrap-simple-sidebar -->
<html lang="pt-BR">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script>window.Laravel = { csrfToken: '{{ csrf_token() }}' }</script>

  <title>PortFólio</title>
  <link href="{{mix('css/app.css')}}" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

</head>

<body>

<div id="app">
<div class="d-flex" id="wrapper">

    <ap-side-menu app-title="{{ config('app.name', 'Laravel') }}"></ap-side-menu>

    <!-- Page Content -->
    <div id="page-content-wrapper">

    <ap-nav-bar></ap-nav-bar>

      <div  class="container-fluid">
        @yield('main')
        
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  </div>





<script src="{{mix('js/app.js')}}" type="text/javascript"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>