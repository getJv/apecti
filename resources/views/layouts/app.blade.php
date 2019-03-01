

<!DOCTYPE html>
<!-- fonte do template: https://github.com/BlackrockDigital/startbootstrap-simple-sidebar -->



<html lang="pt-BR">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Apect - PMO</title>

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
  

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">
  <!-- icons request -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

</head>

<body>

<div class="d-flex" id="wrapper">

  <!-- Sidebar -->
  <div class="bg-light border-right" id="sidebar-wrapper">
    <div class="sidebar-heading"> PMO  Formulários </div>
    <div class="list-group list-group-flush">
      <a href="#" class="list-group-item list-group-item-action bg-light">DONE</a>
      <a href="#" class="list-group-item list-group-item-action bg-light">Questionários</a>
      <a href="#" class="list-group-item list-group-item-action bg-light">Plano de Projeto</a>
     </div>
  </div>
  <!-- /#sidebar-wrapper -->

  <!-- Page Content -->
  <div id="page-content-wrapper">

    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
      <button class="btn btn-primary" id="menu-toggle">Menu</button>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
<!--
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Dropdown
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
        </ul>
      </div>
-->
    </nav>

    <div class="container-fluid">

      @yield('main')
    

  


    </div>
  </div>
  <!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->


<script src="{{mix('js/app.js')}}" type="text/javascript"></script>
<link href="{{mix('css/app.css')}}" rel="stylesheet" type="text/css">
<!-- Bootstrap core JavaScript -->
<script src="js/jquery/jquery.min.js"></script>
<script src="js/bootstrap/bootstrap.bundle.min.js"></script>

<!-- Menu Toggle Script -->
<script>
  $("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
  });
</script>

</body>

</html>