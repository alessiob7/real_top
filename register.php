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
                  <li class="active"><a href="register.php">Registrati</a></li>
                  <li><a href="javascript:showAlert();">Profile</a></li>
                  <li><a href="#">Lorem</a></li>
                  <li><a href="#">Ipsum</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
        <div class="container">
            <div class="row">
                <form action="register_validate.php" id="formregister" method="post">
                    <table>
                        <tr>
                            <td>Firstname</td>
                            <td><input class="form-control" type="text" id="firstname" name="firstname"></td>
                        </tr><tr>
                            <td>Lastname</td>
                            <td><input class="form-control" type="text" id="lastname" name="lastname"></td>
                        </tr><tr>
                            <td>Username</td>
                            <td><input class="form-control" type="text" id="username" name="username"></td>
                        </tr><tr>
                            <td>Password</td>
                            <td><input class="form-control" type="password" id="password" name="password"></td>
                        </tr><tr>
                            <td>City</td>
                            <td><input class="form-control" type="text" id="city" name="city"></td>
                        </tr><tr>
                            <td>Gender</td>
                            <td><input class="form-control" type="text" id="gender" name="gender"></td>
                        </tr><tr>
                            <td>Is Smoker</td>
                            <td><input class="form-control" type="text" id="is_smoker" name="is_smoker"></td>
                        </tr><tr>
                            <td>Hobbies</td>
                            <td><input class="form-control" type="text" id="hobbies" name="hobbies"></td>
                        </tr><tr>
                            <td>Favorite Food</td>
                            <td><input class="form-control" type="text" id="favorite_food" name="favorite_food"></td>
                        </tr><tr>
                            <td><input type="reset" class="btn-move btn btn-warning" value="Resetta i campi">&nbsp;<input class="btn-move btn btn-primary" type="submit" value="Registra"></td>
                        </tr>
                    </table>
                </form>
            </div>         
        </div>

        <!-- jQuery e plugin JavaScript  -->
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>