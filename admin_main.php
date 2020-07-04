<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="canonical" href="https://getbootstrap.com/docs/3.4/examples/starter-template/">

    <title>Bookalicious</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    
    <link href="css/style.css" rel="stylesheet">

    
  </head>

  <body>

    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand em-text" href="#">Bookalicious</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="admin_main.php">Home</a></li>
            
           

            </ul>
     <ul class="nav navbar-nav navbar-right">
     <li><a class="glyphicon glyphicon-log-out" href="admin_logout.php"> Logout</a></li>
     
     </ul>
        </div>
      </div>
    </nav>

    <div class="jumbotron">
  <div class="container">
 <h1>Welcome Admin:</h1>
  <p>Have a control over the functions of BOOKALICIOUS: 
  <div class="btn-group">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  Control Book Store>> <span class="caret"></span>
  </button>
  <ul class="dropdown-menu">
    <li><a href="uploadad.php">Upload a book</a></li>
    <li><a href="deletebook.php">Delete a book</a></li>
    
    <li role="separator" class="divider"></li>
    <li><a href="userdet.php">Have a look at Users</a></li>
  </ul>
</div>
  </p>
</div>
  </div>

    
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
