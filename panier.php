<?php
session_start();
if (isset($_GET['film'])) {
  $id = $_GET['film'];
  if (isset($_SESSION['cart'][$id])) {
    $_SESSION['cart'][$id]++;
  } else {
    $_SESSION['cart'][$id] = 1;
  }
  var_dump($_SESSION);
  $db = new PDO("mysql:host=eliascastel.ddns.net;dbname=php1Pig", "php1", "SupInfo2023!");
  $a = implode(",", $_SESSION['cart']);
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

  <style>
    .grille {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      grid-gap: 10px;
      grid-auto-rows: minmax(100px, auto);
    }

    .grid-item {
      background-color: white;
      border: 1px solid black;
      padding: 20px;
      font-size: 30px;
      text-align: center;
    }

    .grid-item>img {
      width: 100%;
      height: 100%;
    }
  </style>
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
              <!-- name="loop" -->
              <form method="GET" action="recherche.php">
                <input type="search" name="mots" placeholder="Rechercher un film" />
                <button type="submit" name="valider">&#x1F50E;&#xFE0E;</button>
              </form>
            </li>
          </ul>
        </nav>
      </div>
      <br>

      <center>
        <div class="grille">
          <?php
          if (!empty($_SESSION['cart'])){
            $cart = $_SESSION['cart'];
            foreach ($cart as $un_film) {
              $db = new PDO("mysql:host=eliascastel.ddns.net;dbname=php1Pig", "php1", "SupInfo2023!");
              $res = $db->prepare("SELECT * FROM products WHERE id=?");
              $res->bindParam(1, $un_film);
              $res->execute();
              $film = $res->fetch();
              echo '<div class="grid-item">';
              echo '<img src="./image/' . $film['img'] . '" >';
              echo '</div>';
            }
          } else {
            echo '<h1>Votre panier est vide</h1>';
          }
          ?>
        </div>
      </center>

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