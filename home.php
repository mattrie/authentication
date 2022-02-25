    <?php 
    session_start();
    if (!isset($_SESSION['store_user']) && !isset($_SESSION['store_pass'])) {
          echo "<script>window.location = 'index.php' </script>"; 
    }



    ?>
    <html>
        <head>
            <title>WELCOME</title>
        </head>
        <body style="background-color: #ccffcc">
            <h3 style="padding-top: 50px; padding-left: 100px;" > <a href="index.php">Logout</a> </h3>

        <center style="padding-top: 100px;"> <h1>WELCOME SIR!!!</h1></center>

        </body>
    </html>
