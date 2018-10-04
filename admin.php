<div class="welcome">
  <?php

        $_SESSION['lastname']=$_POST['lastname'];
        $_SESSION['firstname']=$_POST['firstname'];

    echo "Hey! Te revoilà " . $_SESSION['lastname'] . " " . $_SESSION['firstname'] ;
  ?>

<div>
