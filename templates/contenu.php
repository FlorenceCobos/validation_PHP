<?php
//je n'oublie pas de relancer ma session
  session_start();
?>
<html>
    <link rel="stylesheet" href="../style.css">
    <main>
        <button href="../home.php" type="button" name="button"></button>

        <?php

          if (!empty($_POST['html'])){
          $_SESSION['html']=$_POST['html'];
        ?>
          <div class="html full-hw align">
            <h1> Découvrir HTML </h1>
            <p>L’HyperText Markup Language, généralement abrégé HTML, est le langage de balisage conçu pour représenter les pages web. C’est un langage permettant d’écrire de l’hypertexte, d’où son nom. HTML permet également de structurer sémantiquement et logiquement et de mettre en forme le contenu des pages, d’inclure des ressources multimédias dont des images, des formulaires de saisie et des programmes informatiques. Il permet de créer des documents interopérables avec des équipements très variés de manière conforme aux exigences de l’accessibilité du web. Il est souvent utilisé conjointement avec le langage de programmation JavaScript et des feuilles de style en cascade (CSS). HTML est initialement dérivé du Standard Generalized Markup Language (SGML).</p>
            <a href="../home.php">Retour accueil

            </form>
          </div>

        <?php
          }
        ?>

        <?php

          if (!empty($_POST['css'])){
          $_SESSION['css']=$_POST['css'];
        ?>
            <div class="css full-hw align">
              <h1> Découvrir CSS </h1>
              <p>Les feuilles de style en cascade1, généralement appelées CSS de l'anglais Cascading Style Sheets, forment un langage informatique qui décrit la présentation des documents HTML et XML. Les standards définissant CSS sont publiés par le World Wide Web Consortium (W3C). Introduit au milieu des années 1990, CSS devient couramment utilisé dans la conception de sites web et bien pris en charge par les navigateurs web dans les années 2000.</p>
              <a href="../home.php">Retour accueil
            </div>

        <?php
          }
        ?>

        <?php

            if (!empty($_POST['js'])){
            $_SESSION['js']=$_POST['js'];
        ?>
              <div class="JS full-hw align">
                <h1> Découvrir JS </h1>
                <p>JavaScript est un langage de programmation de scripts principalement employé dans les pages web interactives mais aussi pour les serveurs2 avec l'utilisation (par exemple) de Node.js3. C'est un langage orienté objet à prototype, c'est-à-dire que les bases du langage et ses principales interfaces sont fournies par des objets qui ne sont pas des instances de classes, mais qui sont chacun équipés de constructeurs permettant de créer leurs propriétés, et notamment une propriété de prototypage qui permet d'en créer des objets héritiers personnalisés. En outre, les fonctions sont des objets de première classe. Le langage supporte le paradigme objet, impératif et fonctionnel. JavaScript est le langage possédant le plus large écosystème grâce à son gestionnaire de dépendances npm, avec environs 500 000 paquets en août 20174.


                </p>

                <a href="../home.php">Retour accueil
              </div>
        <?php
          }
        ?>


    </main>

    <?php

      include('./footer.php');

     ?>
