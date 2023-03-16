<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <title>Nouveautés</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/acceuil.css" type="text/css" />
  <link rel="stylesheet" href="css/alaune.css" type="text/css" />
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

      <div class="contnvx">
        <h1>Tout savoir sur les prochains films à venir !</h1>
        <div class="box1">
          <div class="rpz">
            <a href="videos/video1.mp4" target="_blank"><img src="image/cdm.jpg" onclick="playVideo('videos/video5.mp4')"></a>
          </div>
          <div class="rpz">
            <p>Sort le 15 mars 2023, issue de la catégorie : Drame</p>
            <br>
            <h2 class="nom">La Chambre Des Merveilles</h2>
            <br>
            <small>C'est le pari fou d'une mère prête à tout pour aider son fils à se réveiller du coma. <br>
              Après l'accident de Louis, 12 ans, <br>
              Thelma décide de réaliser à sa place les " 10 choses à faire avant la fin du monde " qu'il avait inscrites
              dans son journal intime. <br>
              En écoutant ces aventures, Louis verra combien la vie est belle et qu'il doit revenir ! <br>
              En accomplissant à quarante ans les rêves d'un ado, Thelma va vivre un voyage incroyable qui l'emmènera
              bien plus loin que ce qu'elle imaginait...</small>
            <br>
            <br>
            <h3 class="prix">15€</h3>
            <a href="Panier.php?film=5" class="button" onclick="add(1)">&#9755; Ajouter au panier &#9754;
            </a>
          </div>

          <div class="rpz">
            <p>Sort le 15 mars 2023, issue de la catégorie : Comédie, Policier, Thriller</p>
            <br>
            <h2 class="nom">Crazy Bear</h2>
            <br>
            <small>CRAZY BEAR est une comédie noire qui met en scène un groupe mal assorti de flics, de criminels, <br>
              de touristes et d’adolescents qui convergent tous au cœur d’une forêt du fin fond de la Georgie <br>
              vers l’endroit même où rode, enragé et assoiffé de sang, un super prédateur de plus de 200 kilos, <br>
              rendu complètement fou par l’ingestion d’une dose faramineuse de cocaïne.</small>
            <br>
            <br>
            <h3 class="prix">15€</h3>
            <a href="Panier.php?film=6" class="button" onclick="add(2)">&#9755; Ajouter au panier &#9754;
            </a>
          </div>
          
          <div class="rpz">
              <a href="videos/video1.mp4" target="_blank">
                <img src="image/crazybear.jpg">
              </a>
          </div>
          
            <div class="rpz">
              <a href="videos/video1.mp4" target="_blank">
                <img src="image/dge.jpg">
              </a>
            </div>
          
          <div class="rpz">
            <p>Sort le 22 mars 2023, issue de la catégorie : Drame</p>
            <br>
            <h2 class="nom">De Grandes Espérences</h2>
            <br>
            <small>Madeleine, brillante et idéaliste jeune femme issue d'un milieu modeste, prépare l'oral de l'ENA dans
              la maison de vacances d'Antoine, en Corse. <br>
              Un matin, sur une petite route déserte, le couple se trouve impliqué dans une altercation qui tourne au
              drame. <br>
              Lorsqu'ils intègrent les hautes sphères du pouvoir, le secret qui les lie menace d'être révélé. <br>
              Et tous les coups deviennent permis.</small>
            <br>
            <br>
            <h3 class="prix">15€</h3>
            <a href="Panier.php?film=7" class="button" onclick="add(3)">&#9755; Ajouter au panier &#9754;
            </a>
          </div>

          <div class="rpz">
            <a href="videos/video1.mp4" target="_blank"><img src="image/cdm.jpg" onclick="playVideo('videos/video5.mp4')"></a>
          </div>
          <div class="rpz">
            <p>Sort le 15 mars 2023, issue de la catégorie : Drame</p>
            <br>
            <h2 class="nom">La Chambre Des Merveilles</h2>
            <br>
            <small>C'est le pari fou d'une mère prête à tout pour aider son fils à se réveiller du coma. <br>
              Après l'accident de Louis, 12 ans, <br>
              Thelma décide de réaliser à sa place les " 10 choses à faire avant la fin du monde " qu'il avait inscrites
              dans son journal intime. <br>
              En écoutant ces aventures, Louis verra combien la vie est belle et qu'il doit revenir ! <br>
              En accomplissant à quarante ans les rêves d'un ado, Thelma va vivre un voyage incroyable qui l'emmènera
              bien plus loin que ce qu'elle imaginait...</small>
            <br>
            <br>
            <h3 class="prix">15€</h3>
            <a href="Panier.php?film=5" class="button" onclick="add(1)">&#9755; Ajouter au panier &#9754;
            </a>
          </div>

          <div class="rpz">
            <p>Sort le 15 mars 2023, issue de la catégorie : Comédie, Policier, Thriller</p>
            <br>
            <h2 class="nom">Crazy Bear</h2>
            <br>
            <small>CRAZY BEAR est une comédie noire qui met en scène un groupe mal assorti de flics, de criminels, <br>
              de touristes et d’adolescents qui convergent tous au cœur d’une forêt du fin fond de la Georgie <br>
              vers l’endroit même où rode, enragé et assoiffé de sang, un super prédateur de plus de 200 kilos, <br>
              rendu complètement fou par l’ingestion d’une dose faramineuse de cocaïne.</small>
            <br>
            <br>
            <h3 class="prix">15€</h3>
            <a href="Panier.php?film=6" class="button" onclick="add(2)">&#9755; Ajouter au panier &#9754;
            </a>
          </div>
          
          <div class="rpz">
              <a href="videos/video1.mp4" target="_blank">
                <img src="image/crazybear.jpg">
              </a>
          </div>
          
            <div class="rpz">
              <a href="videos/video1.mp4" target="_blank">
                <img src="image/dge.jpg">
              </a>
            </div>
          
          <div class="rpz">
            <p>Sort le 22 mars 2023, issue de la catégorie : Drame</p>
            <br>
            <h2 class="nom">De Grandes Espérences</h2>
            <br>
            <small>Madeleine, brillante et idéaliste jeune femme issue d'un milieu modeste, prépare l'oral de l'ENA dans
              la maison de vacances d'Antoine, en Corse. <br>
              Un matin, sur une petite route déserte, le couple se trouve impliqué dans une altercation qui tourne au
              drame. <br>
              Lorsqu'ils intègrent les hautes sphères du pouvoir, le secret qui les lie menace d'être révélé. <br>
              Et tous les coups deviennent permis.</small>
            <br>
            <br>
            <h3 class="prix">15€</h3>
            <a href="Panier.php?film=7" class="button" onclick="add(3)">&#9755; Ajouter au panier &#9754;
            </a>
          </div>

          <div class="rpz">
            <a href="videos/video1.mp4" target="_blank"><img src="image/cdm.jpg" onclick="playVideo('videos/video5.mp4')"></a>
          </div>
          <div class="rpz">
            <p>Sort le 15 mars 2023, issue de la catégorie : Drame</p>
            <br>
            <h2 class="nom">La Chambre Des Merveilles</h2>
            <br>
            <small>C'est le pari fou d'une mère prête à tout pour aider son fils à se réveiller du coma. <br>
              Après l'accident de Louis, 12 ans, <br>
              Thelma décide de réaliser à sa place les " 10 choses à faire avant la fin du monde " qu'il avait inscrites
              dans son journal intime. <br>
              En écoutant ces aventures, Louis verra combien la vie est belle et qu'il doit revenir ! <br>
              En accomplissant à quarante ans les rêves d'un ado, Thelma va vivre un voyage incroyable qui l'emmènera
              bien plus loin que ce qu'elle imaginait...</small>
            <br>
            <br>
            <h3 class="prix">15€</h3>
            <a href="Panier.php?film=5" class="button" onclick="add(1)">&#9755; Ajouter au panier &#9754;
            </a>
          </div>

          <div class="rpz">
            <p>Sort le 15 mars 2023, issue de la catégorie : Comédie, Policier, Thriller</p>
            <br>
            <h2 class="nom">Crazy Bear</h2>
            <br>
            <small>CRAZY BEAR est une comédie noire qui met en scène un groupe mal assorti de flics, de criminels, <br>
              de touristes et d’adolescents qui convergent tous au cœur d’une forêt du fin fond de la Georgie <br>
              vers l’endroit même où rode, enragé et assoiffé de sang, un super prédateur de plus de 200 kilos, <br>
              rendu complètement fou par l’ingestion d’une dose faramineuse de cocaïne.</small>
            <br>
            <br>
            <h3 class="prix">15€</h3>
            <a href="Panier.php?film=6" class="button" onclick="add(2)">&#9755; Ajouter au panier &#9754;
            </a>
          </div>
          
          <div class="rpz">
              <a href="videos/video1.mp4" target="_blank">
                <img src="image/crazybear.jpg">
              </a>
          </div>
          
            <div class="rpz">
              <a href="videos/video1.mp4" target="_blank">
                <img src="image/dge.jpg">
              </a>
            </div>
          
          <div class="rpz">
            <p>Sort le 22 mars 2023, issue de la catégorie : Drame</p>
            <br>
            <h2 class="nom">De Grandes Espérences</h2>
            <br>
            <small>Madeleine, brillante et idéaliste jeune femme issue d'un milieu modeste, prépare l'oral de l'ENA dans
              la maison de vacances d'Antoine, en Corse. <br>
              Un matin, sur une petite route déserte, le couple se trouve impliqué dans une altercation qui tourne au
              drame. <br>
              Lorsqu'ils intègrent les hautes sphères du pouvoir, le secret qui les lie menace d'être révélé. <br>
              Et tous les coups deviennent permis.</small>
            <br>
            <br>
            <h3 class="prix">15€</h3>
            <a href="Panier.php?film=7" class="button" onclick="add(3)">&#9755; Ajouter au panier &#9754;
            </a>
          </div>

          <div class="rpz">
            <a href="videos/video1.mp4" target="_blank"><img src="image/cdm.jpg" onclick="playVideo('videos/video5.mp4')"></a>
          </div>
          <div class="rpz">
            <p>Sort le 15 mars 2023, issue de la catégorie : Drame</p>
            <br>
            <h2 class="nom">La Chambre Des Merveilles</h2>
            <br>
            <small>C'est le pari fou d'une mère prête à tout pour aider son fils à se réveiller du coma. <br>
              Après l'accident de Louis, 12 ans, <br>
              Thelma décide de réaliser à sa place les " 10 choses à faire avant la fin du monde " qu'il avait inscrites
              dans son journal intime. <br>
              En écoutant ces aventures, Louis verra combien la vie est belle et qu'il doit revenir ! <br>
              En accomplissant à quarante ans les rêves d'un ado, Thelma va vivre un voyage incroyable qui l'emmènera
              bien plus loin que ce qu'elle imaginait...</small>
            <br>
            <br>
            <h3 class="prix">15€</h3>
            <a href="Panier.php?film=5" class="button" onclick="add(1)">&#9755; Ajouter au panier &#9754;
            </a>
          </div>

          <div class="rpz">
            <p>Sort le 15 mars 2023, issue de la catégorie : Comédie, Policier, Thriller</p>
            <br>
            <h2 class="nom">Crazy Bear</h2>
            <br>
            <small>CRAZY BEAR est une comédie noire qui met en scène un groupe mal assorti de flics, de criminels, <br>
              de touristes et d’adolescents qui convergent tous au cœur d’une forêt du fin fond de la Georgie <br>
              vers l’endroit même où rode, enragé et assoiffé de sang, un super prédateur de plus de 200 kilos, <br>
              rendu complètement fou par l’ingestion d’une dose faramineuse de cocaïne.</small>
            <br>
            <br>
            <h3 class="prix">15€</h3>
            <a href="Panier.php?film=6" class="button" onclick="add(2)">&#9755; Ajouter au panier &#9754;
            </a>
          </div>
          
          <div class="rpz">
              <a href="videos/video1.mp4" target="_blank">
                <img src="image/crazybear.jpg">
              </a>
          </div>
          
            <div class="rpz">
              <a href="videos/video1.mp4" target="_blank">
                <img src="image/dge.jpg">
              </a>
            </div>
          
          <div class="rpz">
            <p>Sort le 22 mars 2023, issue de la catégorie : Drame</p>
            <br>
            <h2 class="nom">De Grandes Espérences</h2>
            <br>
            <small>Madeleine, brillante et idéaliste jeune femme issue d'un milieu modeste, prépare l'oral de l'ENA dans
              la maison de vacances d'Antoine, en Corse. <br>
              Un matin, sur une petite route déserte, le couple se trouve impliqué dans une altercation qui tourne au
              drame. <br>
              Lorsqu'ils intègrent les hautes sphères du pouvoir, le secret qui les lie menace d'être révélé. <br>
              Et tous les coups deviennent permis.</small>
            <br>
            <br>
            <h3 class="prix">15€</h3>
            <a href="Panier.php?film=7" class="button" onclick="add(3)">&#9755; Ajouter au panier &#9754;
            </a>
          </div>
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