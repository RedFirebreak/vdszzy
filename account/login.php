<!DOCTYPEhtml>
<?php
    /*
        [DESCRIPTION]
        This file does logging in and stuff
        // https://codewithawa.com/posts/complete-user-registration-system-using-php-and-mysql-database 

        [INFO]
        Author:     Stef
        Date:       29-10-2019
    */
?>

<html>
  <head>
    <!-- Edit the pagename only -->
    <title>HBO-Memes - INSERT MEMETITLE</title>
    <?php require('../func.header.php'); ?>
  </head>

  <body>

    <!-- Start coding here! :D -->

    <div class="jumbotron">
      <div class="container">
        <h1 class="display-3">Log in</h1> 

      </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
            <h2>Voer hier je login-gegevens in</h2><br>
            
              <?php

              // Als er een verification wordt aangevraagd, wordt die verzonden op deze manier
              if ($_GET['sendverification']){
                $username = mysqli_real_escape_string($dbConnection, $_GET['username']);
                $email = mysqli_real_escape_string($dbConnection, $_GET['email']);

                echo "<div class='alert alert-warning' role='alert'>";
                echo "Nieuwe email-verificatie verzonden! Volg de instructies op in de mail. Deze is 24 uur geldig.";
                echo "</div>";

                sendemailverification($username, $email);
              }
              require('func.login.php'); 
              ?>
              <?php require('form.login.php'); ?>
            </div>

            <div class="col-md-6">
              
              <h2><a href="resetpassword.php">resetpassword</a></h2>
            </div>


        </div>
    </div>
    
  </body>

  <footer>
    <?php require('../func.footer.php'); ?>
  </footer>
</html>