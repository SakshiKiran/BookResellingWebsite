<?php

include ("connect.php");
session_start();
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]==true){
    header("location:admin_main.php");
    exit;
}
$error="";

if($_SERVER["REQUEST_METHOD"] == "POST"){

  

        $username = $_POST["username"];

        $password = $_POST["password"];
        $sql = "select username,password from admin where username='$username' and password='$password' ";

        $result = mysqli_query($link,$sql);



        if(mysqli_num_rows($result)>0){

            session_start();
            $_SESSION['loggedin']==true;
            header("location:admin_main.php");

        }

         else{
         $error = "Enter proper username and password";
         }


        }

    

        





?>

















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
            <li><a href="welcome(login).php">Home</a></li>
            <li><a href="about.php">About</a></li>
           
            <li><a href="contact.php">Contact</a></li>
            
        </div>
      </div>
    </nav>
    <div class="col-lg-12 col-md-5 col-md-push-3"> 
    <h1 >Admin Login:</h1>
    <br>
    
     
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="forms1" style="border-style: outset;width: 50%; height: 70%; padding: 70px">
<label>Username:</label>
<input type="text" name="username" required>
<br><br>
<label>Password:</label>
<input type="password" name="password" required>
<br>
<br>
<input type="submit" value="Submit"><br><br>
<p><a class="glyphicon glyphicon-arrow-left" href="welcome(login).php"> Back</a></p>
</form>
    



<span><?php echo $error; ?> </span>
</div>

   
</body>
</html>