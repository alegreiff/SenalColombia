<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Plantilla base</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sticky-footer-navbar.css" rel="stylesheet">

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
    <div class="row">
      <div class="col-md-12">
        <div id="placeholder">
          Hola
        </div>
      </div>
    </div>
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
            <a class="navbar-brand" href="#">Sitios de transición</a>
          </div>
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Inicio</a></li>
              <li><a href="anonimas/">Anónimas</a></li>
              <li><a href="aislados/">Aislados</a></li>
              <li><a href="danza/">Danza</a></li>
              
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>

      <!-- Begin page content -->
      <div class="container">
        <div class="page-header">
          <h1>Tres tristes sitios de transición</h1>
        </div>
        
        
      </div>
      <div class="container">
      <div class="col-md-7">

      </div>
      <div class="col-md-5">Hola mundo</div>
      </div>
    </div>

    <?php 
    include('footer.php'); ?>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <script>

    var url = "http://nuestrapolla.com/apps/menu/index.php";
    var browser = navigator.userAgent;
    var IEversion = 99; //Give a default value for non-IE browsers
     
    if (browser.indexOf("MSIE") > 1) { //Detects if IE
        IEversion = parseInt(browser.substr(browser.indexOf("MSIE")+5, 5));
    }
    if (IEversion < 10) {                
        xdr = new XDomainRequest();   // Creates a new XDR object.
        xdr.open("GET", url); // Creates a cross-domain connection with our target server using GET method. 
        xdr.send(); //Send string data to server
        xdr.onload = function () { //After load, parse data returned by xdr.responseText            
            mainfunction($.parseJSON(xdr.responseText));
        };              
    } else {
        $.getJSON(url, function(data) {
            mainfunction(data);
        })
    }
 
    function mainfunction(data) {
      var datax = $.parseJSON(data);
           console.log(datax);
           //Your main cross domain function here.

    }
</script>

  </body>
</html>


