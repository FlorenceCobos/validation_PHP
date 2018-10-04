
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
    echo "Connectez vous pour accèder au service !"
     ?>
     <form action="./home.php" method="post">
       <input type="text" name="firstname" placeholder="Prénom" required></input>
       <input type="text" name="lastname" placeholder="Nom" required></input>
       <input type="text" name="City" placeholder="Votre ville" required></input>
       <button type="submit">Envoyer !</button>
     </form>



  </body>
</html>
