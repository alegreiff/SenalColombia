<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>HOME Anónimas</title>

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
      <div class="navbar navbar-default navbar-fixed-top" role="navigation">

        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Anónimas extraordinarias</a>
          </div>
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="../index.php">Inicio</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li class="dropdown-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated Jimmy</a></li>
                </ul>
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>

      <!-- Begin page content -->
      <div class="container">

        <div class="row">
          <div class="col-md-12">
            <img src="http://dummyimage.com/1200x150&text=Logo imagen Anónimas" alt="" class="img_responsive">
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
                  <li class="active"><a href="#">Anónimas</a></li>
                  
                  <li><a href="#" data-toggle="modal" data-target="#datos_serie">Sobre Anónimas extraordinarias</a></li>
                  <li><a href="#">Nuestras anónimas</a></li>
                  <li><a href="#">Fotógrafas</a></li>
                  <li><a href="#">Postula tu anónima</a></li>
                  
                  <li><a href="#" data-toggle="modal" data-target="#creditos_serie">Créditos</a></li>
                  
                </ul>
              </div><!-- /.navbar-collapse -->
            </div>
          </nav>
        </div>
        <div class="row">
          <div class="col-md-8">
            <div id="myCarousel" class="carousel slide">
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
                <li data-target="#myCarousel" data-slide-to="4"></li>
              </ol>
              <!-- Carousel items -->
              <div class="carousel-inner">
                <div class="active item"><img  src="http://lorempixel.com/850/350/business/2" alt="banner1" />
                  
                </div>
                <div class="item"><img  src="http://dummyimage.com/850x350&text=Carrusel anónimas" alt="banner2" />
                  
                </div>
                <div class="item"><img  src="http://lorempixel.com/850/350/business/4" alt="banner3" />
                  
                </div>
                <div class="item"><img  src="http://lorempixel.com/850/350/business/5" alt="banner4" />
                  
                </div>
                <div class="item"><img  src="http://lorempixel.com/850/350/business/6" alt="banner5" />
                  
                </div>
              </div>
              <!-- Carousel nav -->
              <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
              <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
          </div>            
          </div>
          <div class="col-md-4">
            <p class="redesSociales"> compartir en redes </p>
            <div class="textoIntro">
            <h3>{NOMBRE SERIE}</h3>
            <p class="alineaInferior">{SINOPSIS SERIE}</p>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- -->
          <div class="col-md-2 col-sm-3 col-xs-4">
            <a href="episodio.php" class="thumbnail"><img src="http://dummyimage.com/120/09f/fff.png" alt="piedefoto"></a>
          </div>
          <div class="col-md-2 col-sm-3 col-xs-4">
            <a href="episodio.php" class="thumbnail"><img src="http://dummyimage.com/120/09f/fff.png" alt="piedefoto"></a>
          </div>
          <div class="col-md-2 col-sm-3 col-xs-4">
            <a href="episodio.php" class="thumbnail"><img src="http://dummyimage.com/120/09f/fff.png" alt="piedefoto"></a>
          </div>
          <div class="col-md-2 col-sm-3 col-xs-4">
            <a href="episodio.php" class="thumbnail"><img src="http://dummyimage.com/120/09f/fff.png" alt="piedefoto"></a>
          </div>
          <div class="col-md-2 col-sm-3 col-xs-4">
            <a href="episodio.php" class="thumbnail"><img src="http://dummyimage.com/120/09f/fff.png" alt="piedefoto"></a>
          </div>
          <div class="col-md-2 col-sm-3 col-xs-4">
            <a href="episodio.php" class="thumbnail"><img src="http://dummyimage.com/120/09f/fff.png" alt="piedefoto"></a>
          </div>
          

        </div>
        <div class="row">
          <!-- -->
          <div class="col-md-2 col-sm-3 col-xs-4">
            <a href="episodio.php" class="thumbnail"><img src="http://dummyimage.com/120/09f/fff.png" alt="piedefoto"></a>
          </div>
          <div class="col-md-2 col-sm-3 col-xs-4">
            <a href="episodio.php" class="thumbnail"><img src="http://dummyimage.com/120/09f/fff.png" alt="piedefoto"></a>
          </div>
          <div class="col-md-2 col-sm-3 col-xs-4">
            <a href="episodio.php" class="thumbnail"><img src="http://dummyimage.com/120/09f/fff.png" alt="piedefoto"></a>
          </div>
          <div class="col-md-2 col-sm-3 col-xs-4">
            <a href="episodio.php" class="thumbnail"><img src="http://dummyimage.com/120/09f/fff.png" alt="piedefoto"></a>
          </div>
          <div class="col-md-2 col-sm-3 col-xs-4">
            <a href="episodio.php" class="thumbnail"><img src="http://dummyimage.com/120/09f/fff.png" alt="piedefoto"></a>
          </div>
          <div class="col-md-2 col-sm-3 col-xs-4">
            <a href="episodio.php" class="thumbnail"><img src="http://dummyimage.com/120/09f/fff.png" alt="piedefoto"></a>
          </div>
          

        </div>
        <div class="row">
          <!-- -->
          <div class="col-md-2 col-sm-3 col-xs-4">
            <a href="episodio.php" class="thumbnail"><img src="http://dummyimage.com/120/09f/fff.png" alt="piedefoto"></a>
          </div>
          <div class="col-md-2 col-sm-3 col-xs-4">
            <a href="episodio.php" class="thumbnail"><img src="http://dummyimage.com/120/09f/fff.png" alt="piedefoto"></a>
          </div>
          <div class="col-md-2 col-sm-3 col-xs-4">
            <a href="episodio.php" class="thumbnail"><img src="http://dummyimage.com/120/red/fff.png" alt="piedefoto"></a>
          </div>
          <div class="col-md-2 col-sm-3 col-xs-4">
            <a href="episodio.php" class="thumbnail"><img src="http://dummyimage.com/120/09f/fff.png" alt="piedefoto"></a>
          </div>
          <div class="col-md-2 col-sm-3 col-xs-4">
            <a href="episodio.php" class="thumbnail"><img src="http://dummyimage.com/120/09f/fff.png" alt="piedefoto"></a>
          </div>
          <div class="col-md-2 col-sm-3 col-xs-4">
            <a href="episodio.php" class="thumbnail"><img src="http://dummyimage.com/120/09f/fff.png" alt="piedefoto"></a>
          </div>
          

        </div>
        <div class="row">
          <!-- -->
          <div class="col-md-2 col-sm-3 col-xs-4">
            <a href="episodio.php" class="thumbnail"><img src="http://dummyimage.com/120/09f/fff.png" alt="piedefoto"></a>
          </div>
          <div class="col-md-2 col-sm-3 col-xs-4">
            <a href="episodio.php" class="thumbnail"><img src="http://dummyimage.com/120/09f/fff.png" alt="piedefoto"></a>
          </div>
          <div class="col-md-2 col-sm-3 col-xs-4">
            <a href="episodio.php" class="thumbnail"><img src="http://dummyimage.com/120/09f/fff.png" alt="piedefoto"></a>
          </div>
          <div class="col-md-2 col-sm-3 col-xs-4">
            <a href="episodio.php" class="thumbnail"><img src="http://dummyimage.com/120/09f/fff.png" alt="piedefoto"></a>
          </div>
          <div class="col-md-2 col-sm-3 col-xs-4">
            <a href="episodio.php" class="thumbnail"><img src="http://dummyimage.com/120/09f/fff.png" alt="piedefoto"></a>
          </div>
          <div class="col-md-2 col-sm-3 col-xs-4">
            <a href="episodio.php" class="thumbnail"><img src="http://dummyimage.com/120/09f/fff.png" alt="piedefoto"></a>
          </div>
          

        </div>
        <div class="row">
          <!-- -->
          <div class="col-md-2 col-sm-3 col-xs-4">
            <a href="episodio.php" class="thumbnail"><img src="http://dummyimage.com/120/09f/fff.png" alt="piedefoto"></a>
          </div>
          <div class="col-md-2 col-sm-3 col-xs-4">
            <a href="episodio.php" class="thumbnail"><img src="http://dummyimage.com/120/09f/fff.png" alt="piedefoto"></a>
          </div>
          
          

        </div>
        <div class="row">
          <!-- Modal Sobre anónimas extraordinarias-->
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
          </div><!-- Fin Ventana modal Sobre anónimas extraordinarias-->


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


