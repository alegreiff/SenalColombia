<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>HOME Danza</title>

    <!-- Bootstrap core CSS -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/sticky-footer-navbar.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/estilos.css">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Wrap all page content here -->
    <div id="wrap">

      <!-- Fixed navbar -->
<?php include_once('../menusuperior.php') ?>

      <!-- Begin page content -->
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <img src="http://lorempixel.com/1200/150/sports/3" alt="" class="img_responsive">
          </div>
        </div>


        <div class="row">
          <nav class="navbar navbar-default navbar-static-top" role="navigation">
            <!-- We use the fluid option here to avoid overriding the fixed width of a normal container within the narrow content columns. -->
            <div class="container-fluid">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-8">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                
              </div>

              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-8">
                <ul class="nav navbar-nav">
                  <li class="active"><a href="#">Danza Colombia</a></li>
                  
                  <li><a href="#" data-toggle="modal" data-target="#datos_serie">Sobre trayecto Magdalena</a></li>
                  <li><a href="episodio.php?id=1">Origen</a></li>
                  <li><a href="episodio.php?id=2">Encuentros</a></li>
                  <li><a href="episodio.php?id=3">Mestizajes</a></li>
                  <li><a href="episodio.php?id=4">Corrientes</a></li>
                  <li><a href="episodio.php?id=5">Fuego</a></li>
                  <li><a href="#" data-toggle="modal" data-target="#creditos_serie">Créditos</a></li>
                  <li><a href="http://www.senalcolombia.tv/index.php?option=com_programas&view=micrositio&id_serie=405&Itemid=1" target="_self">Otros trayectos</a></li>
                </ul>
              </div><!-- /.navbar-collapse -->
            </div>
          </nav>
        </div>

        <div class="row imagen_rio">
          <div class="col-md-12">
            <a href="episodio.php?id=5"><img src="http://lorempixel.com/1200/220/people/3" alt="" class="img_responsive">
            <div class="overlay">
              <h2>Fuego</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate, soluta, deserunt, illum, eaque quaerat autem iusto vel corporis aliquid assumenda sit placeat ea dicta quae ipsam quisquam quia nisi et.</p>              
            </div></a>
          </div>
        </div>

        <div class="row imagen_rio">
          <div class="col-md-12">
            <a href="episodio.php?id=4"><img src="http://lorempixel.com/1200/220/people/4" alt="" class="img_responsive">

            
            <div class="overlay">
              <h2>Corrientes</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate, soluta, deserunt, illum, eaque quaerat autem iusto vel corporis aliquid assumenda sit placeat ea dicta quae ipsam quisquam quia nisi et.</p>              
            </div></a>
          </div>
        </div>

        <div class="row imagen_rio">
          <div class="col-md-12">
            <a href="episodio.php?id=3"><img src="http://lorempixel.com/1200/220/people/6" alt="" class="img_responsive">

            </a>
            <div class="overlay">
              <h2>Mestizajes</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate, soluta, deserunt, illum, eaque quaerat autem iusto vel corporis aliquid assumenda sit placeat ea dicta quae ipsam quisquam quia nisi et.</p>              
            </div>
          </div>
        </div>

        <div class="row imagen_rio">
          <div class="col-md-12">
            <a href="episodio.php?id=2"><img src="http://lorempixel.com/1200/220/people/9" alt="" class="img_responsive">

            </a>
            <div class="overlay">
              <h2>Encuentros</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate, soluta, deserunt, illum, eaque quaerat autem iusto vel corporis aliquid assumenda sit placeat ea dicta quae ipsam quisquam quia nisi et.</p>              
            </div>
          </div>
        </div>

        <div class="row imagen_rio">
          <div class="col-md-12">
            <a href="episodio.php?id=1"><img src="http://lorempixel.com/1200/220/people/2" alt="" class="img_responsive">

            </a>
            <div class="overlay">
              <h2>Origen</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate, soluta, deserunt, illum, eaque quaerat autem iusto vel corporis aliquid assumenda sit placeat ea dicta quae ipsam quisquam quia nisi et.</p>              
            </div>
          </div>
        </div>
        <div class="row">
          <!-- Modal Sobre Danza Colombia trayecto río Magdalena-->
          <div class="modal fade" id="datos_serie" tabindex="-1" role="dialog" aria-labelledby="etiquetaModal" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title" id="etiquetaModal">Sobre {NOMBRE SERIE}</h4>
                </div>
                <div class="modal-body">
                  {SINOPSIS SERIE}
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                  
                </div>
              </div>
            </div>
          </div><!-- Fin Ventana modal Sobre trayecto río Magdalena-->


          <!-- Modal Créditos-->
          <div class="modal fade" id="creditos_serie" tabindex="-1" role="dialog" aria-labelledby="etiquetaModal" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title" id="etiquetaModal">Créditos {NOMBRE SERIE}</h4>
                </div>
                <div class="modal-body">
                  {FICHA TÉCNICA SERIE}
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                  
                </div>
              </div>
            </div>
          </div><!-- Fin Ventana modal créditos-->


        </div>

      </div>
    </div>

<?php include_once('../footer.php') ?>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>


