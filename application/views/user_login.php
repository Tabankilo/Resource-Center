
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>SSNF Resource Center</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">

  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="user_login.php"><img src="assets/images/logo.png" style="width: 100px; height: 70px; margin-top: -15px;" /></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right" role="form" action="login/loggedIn" method="POST">
            <div class="form-group">
                <?php if(isset($_GET['login'])){
                    echo"<label class='text-danger'>Invalid Username/Password</label>&nbsp;";
                }
				
				?>
            </div>
            <div class="form-group">
              <input type="text" placeholder="ID No." class="form-control" name="username" autocomplete="off" required="true">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control" name="password" required="true">
            </div>
            <button type="submit" class="btn btn-success" name="submit">Sign in</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <br><br>
        <h2>South Sudan NGO Forum Resource Center System</h2>
       
        
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <img src="assets/images/dashh-board.png" style="width: 500px; height: 350px; margin-left: 300px;">
      </div>

      <hr>

      <footer>
        <p>&copy; South Sudan NGO Forum All rights reserved 2018</p>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
