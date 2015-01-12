<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Real Top</title>
        <link href="css/bootstrap.css" rel="stylesheet" media="screen">
        <link href="css/styles.css" rel="stylesheet" media="screen">
    </head>
    <body>
        <nav class="navbar navbar-default" role="navigation">
            <!—Logo e pulsante per barra ridimensionata -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                  <span class="sr-only">Espandi barra di navigazione</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Real Top</a>
            </div>
            <!—Elementi della barra -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
                  <li class="active"><a href="index.php">Home</a></li>
                  <li><a href="register.php">Registrati</a></li>
                  <li><a href="javascript:showAlert();">Profile</a></li>
                  <li><a href="#">Lorem</a></li>
                  <li><a href="#">Ipsum</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
        <div class="container">
            <div class="row">
                <div class="jumbotron">
                    <h1>Benvenuto <small>su Real Top</small></h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum faucibus dolor varius arcu lacinia aliquam. Suspendisse non nulla mollis sem scelerisque egestas. Praesent nec pellentesque felis...</p>
                    <p><a href="register.php" class="btn btn-primary btn-lg">Registrati!</a></p>
                </div>
            </div>
            
        </div>
        <div class="container">
            <div class="row">
                <?php
                    require_once "Controller.php";
                    $o = new Controller();
                    $o->getList();
                ?>
            </div>
            
        </div>

        <!-- jQuery e plugin JavaScript  -->
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>