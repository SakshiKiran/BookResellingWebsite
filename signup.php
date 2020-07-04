<?php



include("connect.php");



$name = $email = $username = $password = $con_pass="";

$emai_err= $password_err= $con_pass_err="";



if($_SERVER["REQUEST_METHOD"] == "POST")

{

 //taking the input from the post req   

$name = $_POST["name"];

$username = $_POST["username"];

$email = $_POST["email"];



//checking if email field ids checked

   if(isset($_POST["email"])){

         $sql ="SELECT id FROM `user` WHERE email='$email'";

        $result = mysqli_query($link,$sql);

        if(mysqli_num_rows($result)>0){ //

            $emai_err = "Email already exist";

        }

        else{ 

            if(strlen(trim($_POST["password"]))<6){ 

                $password_err = "Password must have atleast 6 charecters.";

            }

            else{

                $password = $_POST["password"];

            }

            

            $con_pass = $_POST["con_pass"];

            if($password != $con_pass){ 

                $con_pass_err = "Password did not match";

            }

       

    

            if(empty($emai_err) && empty($password_err) && empty($con_pass_err))

            {

                $sql = "INSERT INTO user(name,email, username ,password) VALUES(?,?,?,?)";

                if($stmt = mysqli_prepare($link, $sql)){

           

                    mysqli_stmt_bind_param($stmt, "ssss", $param_name, $param_email, $param_username, $param_password);

            

          

                    $param_name = $name;

                    $param_email = $email;

                    $param_username = $username;

                    $param_password = password_hash($password, PASSWORD_DEFAULT);

            

            

                    if(mysqli_stmt_execute($stmt)){

                   

                        echo '<script>alert("Regestered Successfully!! Login to continue..");</script>';

                        echo '<script>window.location="user_login.php"</script>';
                    
                            

                    }

                    else{

                        echo "Something went wrong. Please try again later.";

                         } 
                          



                } 

            }       

        }

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
          
            <li><a href="about.php">About</a></li>
           
            <li><a href="contact.php">Contact</a></li>
            
        </div>
      </div>
    </nav>
    <div class="col-lg-12 col-md-5 col-md-push-3"> 
    
    <h1>Signup:</h1>

   

    <form method="POST" style="border-style: outset;width: 50%; height: 70%; padding: 70px">

    <label >Name: </label>

    <input type="text" name="name" required>

    <br><br>

    <label >Email: </label>

    <input type="email" name="email" id="" required>

    <br><br>

    <span><?php echo $emai_err; ?></span>

    <br><br>
    <label>Username: </label>
    <input type="text" name="username" id="" required>
    <br><br>

    <label >Password: </label>

    <input type="password" name="password" id="" required>

    <br><br>

    <span><?php echo $password_err; ?></span>

    <br><br>

    <label for="">Confirm Password: </label>

    <input type="password" name="con_pass" id="" required>

    <br><br>

    <span><?php echo $con_pass_err;?></span>

    <br><br>

    <input type="submit" value="Submit">
    <br><br>
    <p><a class="glyphicon glyphicon-arrow-left" href="welcome(login).php"> Back</a></p>

    </form>
</div>

</body>

</html>