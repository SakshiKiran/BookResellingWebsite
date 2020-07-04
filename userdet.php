<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../../favicon.ico">
    <link rel="canonical" href="https://getbootstrap.com/docs/3.4/examples/jumbotron/">

    <title>blood-O-nation</title>


    <link href="css/bootstrap.min.css" rel="stylesheet">

  
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
            <li class="active"><a href="#">Home</a></li>
            
           

            </ul>
     <ul class="nav navbar-nav navbar-right">
     <li><a class="glyphicon glyphicon-log-out" href="admin_main.php"> Back</a></li>
     
     </ul>
        </div>
      </div>
    </nav>


   
    
      
    <div class="jumbotron">
      <div class="container">
        
        <h2 style="text-align;"><span style="color:black;">User details</h1>
        <p><span style="color:black;">The following is the details of the registered users of Bookalicious:</span></p>
        
      </div>
    </div>

    <div class="container">  
      <div class="col-lg-12 col-md-5 col-md-push-3" style="border-style: outset;width: 50%; height: 70%; padding: 70px; background-color: white;"> 
        <?php

include("connect.php");



$sql = "SELECT * FROM user";
$result = mysqli_query($link, $sql);

if (mysqli_num_rows($result) > 0) {

  while($row = mysqli_fetch_assoc($result)) {
    echo "ID: " . $row["ID"]. "<br>". " Name: " . $row["name"]. " " ." <br> "."Email: ". $row["email"]. "<br><br>";
  }
} else {
  echo "0 results";
}




?>

       </div>
        

       <footer>
           
        <a class="btn btn-default" href="admin_main.php" role="button" style="margin-left:1050px;">Home &raquo;</a>
       </footer>

     


    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
   
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>