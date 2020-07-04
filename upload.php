<?php

include("connect.php");
$sql = "SELECT `categoryname` FROM `category`";
$result = mysqli_query($link,$sql);
$msg = "Enter the book details";
$err="";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $category = $_POST["category"];
    $author = $_POST["author"];
    $description = $_POST["description"];
    $price = $_POST["price"];
    $image = $_FILES["image"]["name"];
    $target="images/".basename($image);

    $sql = "INSERT INTO `book`(`name`, `category`, `author`, `description`, `price`, `image`) 
    VALUES ('$name','$category','$author','$description','$price','$image')";
    $result1 = mysqli_query($link,$sql);
    if($result1 == true){ //
        echo '<script>alert("Inserted Successfully!! Proceed to Cart ---");</script>';

    echo '<script>window.location="cart.php"</script>';

        $error="Usernaame or password is incorrect.";
    }
    else{
        $err = "cannot insert";
    }
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $msg = "Book inserted.";
    }else{
        $msg = "Failed to upload image";
    }

}




?>




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <link rel="canonical" href="https://getbootstrap.com/docs/3.4/examples/sticky-footer-navbar/">

    <title>upload book</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">

  
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <link href="style.css" rel="stylesheet">

    <script src="js/ie-emulation-modes-warning.js"></script>

 
  </head>

  <body>

 
    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Bookalicious</a>
        </div>
     
      </div>
    </nav>
    <h1 style="text-align:center">Insert Book:</h1>
<div class="container">
<div class="wrapper">
     <?php echo $err; ?> 
     <div class="col-lg-12 col-md-5 col-md-push-3"> 
    <form  method="post" enctype="multipart/form-data" style="border-style: outset;width: 50%; height: 70%; padding: 70px">
    <div class="form-group">
    <label for="">Name</label>
    <input class="form-control" type="text" name="name" id="" required>
    <div>
    <div class="form-group">
    <label for="">Category</label>
    <select name="category" class="form-control">
    <?php
        while($row = mysqli_fetch_assoc($result)){
         $cat_name = $row["categoryname"];
            echo "<option value='$cat_name'> $cat_name </option>";
        }
        ?> 
        
        
          
    </select>
    <div>
    <div class="form-group">
    <label for="">Author</label>
    <input class="form-control" type="text" name="author" id="" >
    <div>
    <div class="form-group">
    <label for="">Description</label>
    <textarea class="form-control" name="description" id="text" cols="40" rows="4"></textarea>
    <div>
    <div class="form-group">
    <label for="">Price</label>
    <input class="form-control" type="number" name="price" id="" >
    <div>
    <div class="form-group">
    <label for="">Upload the image</label>
    <input class="form-control" type="file" name="image">
    <div>
    <div class="form-group">
    <br>
         <input  class="btn btn-primary" type="submit" value="Upload"> 
         <input  class="btn btn-primary" type="reset" value="Reset">
         <br><br>
         <p><a class="btn btn-default" href="welcome.php" role="button">Home &raquo;</a></p>
    <div>
</div>
</div>
<?php echo "<script type='text/javascript'>alert('$msg');</script>"; ?>
</form>
    </div>





<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.js"></script>
</body>
</html>