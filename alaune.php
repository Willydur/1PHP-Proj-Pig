<?php
// $mots=$_GET["mots"];
// $valider=$_GET["valider"];
// if(isset($valider) && !empty(trim($mots))) {
//   include("alaune.php" && "nouveautes.php");
//   $res=$pdo->prepare("select nom from products where nom like '%$mots%'");
//   $res->setFetchMode(PDO::FETCH_ASSOC).
//   $res->execute();
//   $tab=$res->fetchAll();
//   $afficher="oui";
// }



?>


<!DOCTYPE html>
<html>

<head>
  <title>A la une</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="acceuil.css" type="text/css" />
  <link rel="stylesheet" href="alaune.css" type="text/css" />
</head>

<body>
  <div class="header">
    <div class="contenu">
      <div class="navbar">
        <div class="logo">
          <img src="2023.png" width="150px" />
        </div>
        <nav>
          <ul>
            <li><a href="acceuil.php">Accueil</a></li>
            <li><a href="alaune.php">A la une</a></li>
            <li><a href="nouveautes.php">Nouveautés</a></li>
            <li><a href="panier.php">Panier </a></li>
            <li><a href="compte.php">Compte </a></li>
            <li>
              <a href="">
                <form method="GET" action="" name="loop">
                  <input type="search" name="mots" value="<?php ?>" placeholder="Rechercher un film" />
                  <button type="submit" name="valider">&#x1F50E;&#xFE0E;</button>
                </form>
              </a>
            </li>
          </ul>
        </nav>
      </div>
      <br>
      <div class="contala1">
        <h1>Les films du moment à ne pas rater !</h1>
        <div class='box1'>
          <?php
          $db = new PDO("mysql:host=eliascastel.ddns.net;dbname=php1Pig", "php1", "SupInfo2023!");
          $sql = $db->prepare("SELECT * FROM products");
          $sql->execute();

          $reponse = $sql->fetchall();
          foreach ($reponse as $films) {
            echo "<div class='movie1'><img src='" . $films['img'] . "' alt=''>";
            echo "<h2 class='nom'>" . $films['nom'] . "</h2><br><h4>SYNOPSIS</h4><p>" . $films['synopsis'] . "<p/><br>";
            echo "<h3 class='prix'>" . $films['prix'] . "</h3><a href='Panier.php' class='button' onclick='add(11)'>&#9755; Ajouter au panier &#9754;</a></div>";
          }
          ?>

        </div>
      </div>

      <div class="videoplay" id="videoclick">
        <video width="100%" controls autoplay id="video">
          <source src="video1.mp4" type="video/mp4">
        </video>
        <img src="close.jpg" class="bouttonclose" onclick="stopVideo()">
      </div>

      <script>
        let videoclick = document.getElementById("videoclick");
        let video = document.getElementById("video");

        function stopVideo() {
          videoclick.style.display = "none";
        }

        function playVideo(file) {
          video.src = file;
          videoclick.style.display = "block";

        }
      </script>

      <div class="footer">
        <ul class="socialnet">
          <li>
            <a href="">
              <img src="facebook.png" alt="" />
            </a>
          </li>
          <li>
            <a href="">
              <img src="twitter.png" alt="" />
            </a>
          </li>
          <li>
            <a href="">
              <img src="linkedin.png" alt="" />
            </a>
          </li>
          <li>
            <a href="">
              <img src="instagram.png" alt="" />
            </a>
          </li>
        </ul>
        <ul class="f1">
          <li><a href="">Conditions Général</a>|</li>
          <li><a href="">Politique De Condidentialité</a>|</li>
          <li><a href="">Assistance</a>|</li>
          <li><a href="">Contact</a></li>
        </ul>
        <p>SHOPTONFILM | COPYRIGHT © 2023</p>
      </div>
</body>

</html>