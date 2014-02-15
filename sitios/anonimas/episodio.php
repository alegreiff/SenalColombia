<!DOCTYPE html>
<html lang="en">
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
    <link rel="stylesheet" href="../css/ekko-lightbox.min.css">

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
            <img src="http://dummyimage.com/1200x150&text=Logo imagen Anónimas" alt="" class="img_responsive">
          </div>
        </div>


        <div class="row">
          <nav class="navbar navbar-default navbar-static-top" role="navigation">
            <!-- We use the fluid option here to avoid overriding the fixed width of a normal container within the narrow content columns. -->
            <div class="container">
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
                  
                  <li><a href="#">Sobre Anónimas extraordinarias</a></li>
                  <li><a href="#">Nuestras anónimas</a></li>
                  <li><a href="#">Fotógrafas</a></li>
                  <li><a href="#">Postula tu anónima</a></li>
                  
                  <li><a href="#">Créditos</a></li>
                  
                </ul>
              </div><!-- /.navbar-collapse -->
            </div>
          </nav>
        </div>
        <div class="row">
          <div class="col-md-8">
            <img src="http://dummyimage.com/850x420/09f/fff.png" alt="" class="img_responsive">
          </div>
          <div class="col-md-4">
            <h3>Título</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, corporis, est porro esse aperiam adipisci dignissimos ullam animi veritatis mollitia officia velit sequi accusamus nihil labore impedit cupiditate. Numquam, laudantium!</p>
          </div>
        </div>
        <div class="row miniaturas_anonimas">
          <div class="col-md-1 col-md-offset-1"><a href="#"><img src="http://dummyimage.com/100/09f/fff.png" alt="" class="img_responsive"></a></div>
          <div class="col-md-1"><a href="#"><img src="http://dummyimage.com/100/09f/fff.png" alt="" class="img_responsive"></a></div>
          <div class="col-md-1"><a href="#"><img src="http://dummyimage.com/100/09f/fff.png" alt="" class="img_responsive"></a></div>
          <div class="col-md-1"><a href="#"><img src="http://dummyimage.com/100/09f/fff.png" alt="" class="img_responsive"></a></div>
          <div class="col-md-1"><a href="#"><img src="http://dummyimage.com/100/09f/fff.png" alt="" class="img_responsive"></a></div>
          <div class="col-md-1"><a href="#"><img src="http://dummyimage.com/100/09f/fff.png" alt="" class="img_responsive"></a></div>
          <div class="col-md-1"><a href="#"><img src="http://dummyimage.com/100/09f/fff.png" alt="" class="img_responsive"></a></div>
          <div class="col-md-1"><a href="#"><img src="http://dummyimage.com/100/09f/fff.png" alt="" class="img_responsive"></a></div>
          <div class="col-md-1"><a href="#"><img src="http://dummyimage.com/100/09f/fff.png" alt="" class="img_responsive"></a></div>
          <div class="col-md-1"><a href="#"><img src="http://dummyimage.com/100/09f/fff.png" alt="" class="img_responsive"></a></div>
        </div>



      </div>
    </div>
<?php include_once('../footer.php') ?>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../js/ekko-lightbox.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function ($) {

        // delegate calls to data-toggle="lightbox"
        $(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
          event.preventDefault();
          return $(this).ekkoLightbox({
            onShown: function() {
              if (window.console) {
                return console.log('Checking our the events huh?');
              }
            }
          });
        });


      });
    </script>
  </body>
</html>


