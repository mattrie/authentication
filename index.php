    <?php
    session_start();
    $link = mysqli_connect('localhost', 'root', '8168627861', 'myboss');

     $getuser = $getpass = "";
        if(isset($_POST['log'])){
        $user = mysqli_real_escape_string($link,$_POST['user']);     
        $pass1 = mysqli_real_escape_string($link,$_POST['pass']);
    $pass = sha1($pass1);
  $result_login =  mysqli_query($link,"SELECT * FROM registration WHERE email = '$user' AND password = '$pass'");

        while ($row = mysqli_fetch_assoc($result_login)){
          $getuser = $row['name'];  
          $getpass = $row['password'];
        }

        $_SESSION['store_user'] = $getuser;
        $_SESSION['store_pass'] = $getpass;

        if($getuser == "" && $getpass == "" ){
            echo "<script>alert('Your login details are wrong. please re-check.')</script>";  

        } else {

            echo "<script>window.location = 'home.php' </script>"; 
        }

        }


    ?>
    <html>
        <head>
            <title>Login Page</title>
             <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- jQuery -->
        <script src='jquery-3.1.1.min.js' type='text/javascript'></script>
        <script src='jquery-ui.min.js' type='text/javascript'></script>
        <link href='jquery-ui.min.css' rel='stylesheet' type='text/css'>   


            <!--Bootstrap-->

      <script src="popper.min.js"></script>
          <link href='font-awesome.min.css' rel='stylesheet' type='text/css'>  
       <link rel="stylesheet" href="bootstrap.min.css"> 
       <script src="bootstrap.min.js"></script>
        </head>
        <body>

            <h3 style="padding-top: 50px; padding-left: 100px;" > <a href="registration.php">Register here</a> </h3>
        <center>

            <div style="border: 4px solid green; height: 320px; width: 350px; margin-top: 100px;
                 border-radius: 20px; background-color: lightgreen; border-top-width: 15px; padding: 20px;">
                <h2>Login Form</h2>
                <br>

                <form name="test_login" action="index.php" method="POST" enctype="multipart/form-data" >

                    <input type="text" name="user" placeholder="enter email here" class="form-control" required="true">
                    <br>
                    <input type="password" name="pass" placeholder="enter password here" class="form-control" required="true">
                <br><br>
                <input type="submit" value="Login" name="log" class="btn btn-success">
                </form>


            </div>    

        </center>
        </body>
    </html>
