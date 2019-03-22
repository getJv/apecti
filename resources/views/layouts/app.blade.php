

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

  <title>Pokemons</title>
  <link href="{{mix('css/app.css')}}" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template 
  <link href="css/simple-sidebar.css" rel="stylesheet">-->
  <!-- icons request -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

</head>

<body>
<div id="app">
 

  @yield('main')
      
 
</div>

<script src="{{mix('js/app.js')}}" type="text/javascript"></script>


</body>

</html>