<header>
  <h1>Découvrir le front!</h1>
  <?php
    echo "Connectez vous pour accèder au service !"
  ?>
  <br>
  <br>
  <br>
  <form  action="./home.php" method="post">
    <div class="login">
       <input type="text" name="firstname" placeholder="Prénom" required></input>
       <input type="text" name="lastname" placeholder="Nom" required></input>
       <input type="text" name="City" placeholder="Votre ville" required></input>
    </div>
    <button type="submit">Envoyer !</button>
  </form>


</header>
