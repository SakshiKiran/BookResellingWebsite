<?php
session_start();
include("connect.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $result=false;
foreach($_SESSION["shopping_cart"] as $keys => $vals)  
{ 
    
    $bookname=$vals["item_name"];
    $email= $_SESSION["email"] ;
    $quantity = $vals["item_quantity"];
    $price = number_format($vals["item_quantity"] * $vals["item_price"], 2);
    $sql = "INSERT INTO `transaction`( `name`, `email`, `quantity`, `price`)
     VALUES ('$bookname','$email','$quantity','$price')";
     $result = mysqli_query($link,$sql);
}
if($result==true){
     unset($_SESSION["shopping_cart"]);  
    echo '<script>alert("Proceed to transaction process")</script>';  
    echo '<script>window.location="transaction.php"</script>'; 
}
}

?>
<<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <link rel="canonical" href="https://getbootstrap.com/docs/3.4/examples/sticky-footer-navbar/">

    <title>Bookalicious</title>

  
    <link href="css/bootstrap.min.css" rel="stylesheet">

   
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    
    <link href="sticky.css" rel="stylesheet">

    
    <script src="js/ie-emulation-modes-warning.js"></script>

    <title>cart</title>
    <style>
body{
    margin-top:50px;
}

table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  text-align:center;
}
.center {
  margin: 0;
  position: absolute;
  left: 84%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
</style>
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
          <a class="navbar-brand" href="welcome.php">Back</a>
        </div>
      
      </div>
    </nav>

    
</head>

<body >
<h1 style="text-align:center">Cart</h1>
<div class="container">
    <form method="post">
    <table style="border:solid">  
                     <tr>  
                        <th width="40%">Item Name</th>  
                        <th width="10%">Quantity</th>  
                        <th width="20%">Price</th>  
                        <th width="15%">Total</th>  
                        <th width="5%">Action</th>  
                             </tr>  
            <?php   
                if(!empty($_SESSION["shopping_cart"]))  
                    {  
                        
                        $total = 0;  
                        foreach($_SESSION["shopping_cart"] as $keys => $values)  
                        {  
                          ?>  
                         
                          <tr>  
                               <td><?php echo $values["item_name"]; ?></td>  
                               <td><?php echo $values["item_quantity"]; ?></td>  
                               <td>&#8377; <?php echo $values["item_price"]; ?></td>  
                               <td>&#8377; <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>  
                               <td><a href="welcome.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>  
                          </tr>  
                          <?php  
                                    $total = $total + ($values["item_quantity"] * $values["item_price"]);  
                               }  
                          ?>  
                          <tr>  
                               <td colspan="3" text-align="right">Total</td>  
                               <td text-align="right">&#8377; <?php echo number_format($total, 2); ?></td>  
                               <td></td>  
                          </tr>  
                          </table> 
                          <br><br>
                        <div class="center">
                        <input class="btn btn-primary" type="submit" name="post" value="Buy Now" style="text-align:center"></input>
                        </div>
                        </form>
                          <?php  
                          }
                          else {
                              ?>
                             <h1 style="text-align:center">Nothing in your cart!!!</h1>
                             <?php
                          } 
                          ?>  
                    
                       
                     </div> 


                     



    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.js"></script>
</body>
</html>