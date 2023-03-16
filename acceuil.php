<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <title>Movie Shop</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/acceuil.css" type="text/css" />
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
      <div class="box1">
        <div class="rpz">
          <h1>
            Tes films préféres <br />
            en 1 clic !
          </h1>
          <p>
            Shop ton film, la nouvelle plateforme de streaming de films qui
            offre une expérience de visionnage de qualité supérieure. <br />
            Vous pouvez accéder à une vaste bibliothèque de films <br />
            dans toutes les langues et tous les genres. <br />
            Nous offrons une interface utilisateur conviviale qui permet une
            navigation facile <br />
            à travers les différentes catégories de films. <br />
            Vous pouvez également rechercher les résultats par réalisateurs ou
            par titre.
          </p>
          <a href="alaune.php" class="button">&#9755; Shop les films du moment &#9754;
          </a>
        </div>
        <div class="rpz">
          <img src="image/time.png" />
        </div>
      </div>
    </div>
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