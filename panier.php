<?php
session_start();
if (isset($_GET['film'])) {
  $id = $_GET['film'];
  if (isset($_SESSION['panier'][$id])) {
    $_SESSION['panier'][$id]++;
  } else {
    $_SESSION['panier'][$id] = 1;
  }
  var_dump($_SESSION);
  $db = new PDO("mysql:host=eliascastel.ddns.net;dbname=php1Pig", "php1", "SupInfo2023!");
  $a = implode(",", $_SESSION['panier']);
  $b = $_SESSION['name'];
  $res = $db->prepare("UPDATE user SET cart=? WHERE nom=?");
  $res->bindParam(1, $a);
  $res->bindParam(2, $b);
  $res->execute();
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Panier</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/acceuil.css" type="text/css" />
  <link rel="stylesheet" href="css/panier.css" type="text/css" />
</head>

<body>
  <div class="header">
    <div class="contenu">
      <div class="navbar">
        <div class="logo">
          <img src="image/2023.png" width="150px" />
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
                <form method="GET">
                  <input type="search" name="sh" placeholder="Rechercher un film" />
                  <button type="submit">&#x1F50E;&#xFE0E;</button>
                </form>
              </a>
            </li>
          </ul>
        </nav>
      </div>
      <br>
      <div class="contpan">
        <h1>Ton panier actuel</h1>
        <?php

        ?>


        <br><br><br><br><br>



      </div>






      <div class="footer">
        <ul class="socialnet">
          <li>
            <a href="">
              <img src="image/facebook.png" alt="" />
            </a>
          </li>
          <li>
            <a href="">
              <img src="image/twitter.png" alt="" />
            </a>
          </li>
          <li>
            <a href="">
              <img src="image/linkedin.png" alt="" />
            </a>
          </li>
          <li>
            <a href="">
              <img src="image/instagram.png" alt="" />
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