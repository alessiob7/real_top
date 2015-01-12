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
                  <li><a href="index.php">Home</a></li>
                  <li><a href="register.php">Registrati</a></li>
                  <li class="active"><a href="#">Profile</a></li>
                  <li><a href="#">Lorem</a></li>
                  <li><a href="#">Ipsum</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
        <div class="container">
            <div class="row">
                <?php
                        require_once "Controller.php";
                        $o = new Controller();
                        $o->makeProfilePage($_GET["id"]);
                        for($i=0;$i<3;$i++){
                            echo "<p class='lipsum'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vel nibh ut est efficitur fringilla non in sapien. Nulla aliquam ipsum tellus, at interdum nibh suscipit ac. Nulla diam magna, feugiat non tristique quis, auctor ac erat. Vivamus ultrices nisi in blandit consequat. Phasellus tempus varius rhoncus. Morbi non accumsan sapien. Proin semper turpis at nibh lobortis, dapibus facilisis neque porta. Donec non bibendum nibh. Nulla volutpat odio ac magna tempor, a volutpat mauris molestie. Sed ut lectus congue, euismod orci vitae, euismod dui. Integer ut blandit lorem. Etiam eleifend magna sed est aliquam laoreet. Donec iaculis, turpis id sollicitudin vehicula, dolor turpis fringilla dolor, ac gravida libero lectus in ante. </p>";
                        }
                    ?>
            </div>         
        </div>

        <!-- jQuery e plugin JavaScript  -->
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>