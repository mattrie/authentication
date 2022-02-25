<?php 
$link = mysqli_connect('localhost', 'root', '8168627861', 'myboss');
$check_name = "";
   if (isset($_POST['reg'])) {
      $get_name = mysqli_real_escape_string($link, $_POST['get_name']);
      $get_email = mysqli_real_escape_string($link,$_POST['get_email']);
      $get_pass1 = mysqli_real_escape_string($link,$_POST['get_pass']);
      $get_pass = sha1($get_pass1);
      
    ///THIS IS TO CHECK FOR DUPLICATE SUBMISSION.  
      $check_reg = mysqli_query($link, "SELECT * FROM registration WHERE name = '$get_name' AND email = '$get_email'");
      while ($row = mysqli_fetch_assoc($check_reg)){
          $check_name = $row['name'];
          
      }
      
      if ($check_name == "") {
          
      
   $sql_insert = mysqli_query($link, "INSERT INTO registration (name, email, password) VALUES('$get_name', '$get_email', '$get_pass')");   

            if ($sql_insert == true) {
                echo "<script>alert('$get_name is now registered.')</script>";
                echo "<script>window.location = 'index.php' </script>"; 
            }
   
       } else {
           echo "<script>alert('Not allowed!! $check_name is already registered')</script>";
       }


   }


?>
<html>
    <head>
        <title>REGISTRATION PAGE</title>
          <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- jQuery -->
    <script src='pluggins/jquery-3.1.1.min.js' type='text/javascript'></script>
    <script src='pluggins/jquery-ui.min.js' type='text/javascript'></script>
    <link href='pluggins/jquery-ui.min.css' rel='stylesheet' type='text/css'>   
     
 
        <!--Bootstrap-->

  <script src="pluggins/popper.min.js"></script>
      <link href='pluggins/font-awesome.min.css' rel='stylesheet' type='text/css'>  
   <link rel="stylesheet" href="pluggins/bootstrap.min.css"> 
   <script src="pluggins/bootstrap.min.js"></script>
    </head>
    <body class="container">
    <center style="padding-top: 50px;">
        <form name="reg" action="registration.php" method="POST" enctype="multipart/form-data">
               <h2>Registration Form</h2>
        <input type="text"  style="text-transform: capitalize;" class="form-control" name="get_name" placeholder="enter your name here" required="true" maxlength="70" >
        <br><br>
        <input type="email"  class="form-control" name="get_email" placeholder="enter your email here" required="true" maxlength="70">
        <br><br>
     
         <input type="password"  class="form-control" name="get_pass" placeholder="enter your password" required="true"  >
        <br><br>
        <input type="submit" name="reg" class="btn btn-success" value="Register"/>
        </form>
       </center> 
    </body>
</html>
