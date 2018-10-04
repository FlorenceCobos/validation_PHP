

<?php
//je n'oublie pas de relancer ma session
session_start();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="./style.css">
    <meta charset="utf-8">
    <title>Mon appli PHP</title>
  </head>
  <body>

    <div class="welcome">
      <?php
        if (isset($_POST['lastname']) && isset($_POST['lastname'])) {
          $_SESSION['lastname']=$_POST['lastname'];
          $_SESSION['firstname']=$_POST['firstname'];
          echo "Hey! Te revoilà " . $_SESSION['lastname'] . " " . $_SESSION['firstname'] ."<br>" ."<br>";

        }else{
          
        }





      ?>


        <form class="cours" action="./templates/contenu.php" method="post">

      <?php
        echo "A quelle section du cours veux-tu accèder ?"

      ?>
         <br>
         <br>
         <label for="HTML"></label>
          HTML<input type="checkbox" name="html" value="HTML">
        <label for="css"></label>
          CSS<input type="checkbox" name="css" value="css">
        <label for="js"></label>
          JS<input type="checkbox" name="js" value="js">
        <br>
        <input href="./" type="submit" name="" value="Save">
      </form>



    <div>
  </body>
</html>
