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
            <img src="image/cdm.jpg" onclick="playVideo('videos/video5.mp4')">
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
            <a href="Panier.php" class="button" onclick="add(1)">&#9755; Ajouter au panier &#9754;
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
            <a href="Panier.php" class="button" onclick="add(2)">&#9755; Ajouter au panier &#9754;
            </a>
          </div>
          <div class="rpz">
            <img src="image/crazybear.jpg" onclick="playVideo('videos/video6.mp4')">
          </div>

          <div class="rpz">
            <img src="image/dge.jpg" onclick="playVideo('videos/video7.mp4')">
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
            <a href="Panier.php" class="button" onclick="add(3)">&#9755; Ajouter au panier &#9754;
            </a>
          </div>

          <div class="rpz">
            <p>Sort le 29 mars 2023, issue de la catégorie : Drame</p>
            <br>
            <h2 class="nom">Je verrai toujours vos visages</h2>
            <br>
            <small>Depuis 2014, en France, <br>
              la Justice Restaurative propose à des personnes victimes et auteurs d’infraction de dialoguer dans des
              dispositifs sécurisés,<br>
              encadrés par des professionnels et des bénévoles comme Judith, Fanny ou Michel.</small>
            <br>
            <br>
            <h3 class="prix">15€</h3>
            <a href="Panier.php" class="button" onclick="add(4)">&#9755; Ajouter au panier &#9754;
            </a>
          </div>
          <div class="rpz">
            <img src="image/visage.jpg" onclick="playVideo('videos/video8.mp4')">

          </div>

          <div class="rpz">
            <img src="image/reyes.jpg" onclick="playVideo('videos/video9.mp4')">
          </div>
          <div class="rpz">
            <p>Sort le 29 mars 2023, issue de la catégorie : Aventure, Drame</p>
            <br>
            <h2 class="nom">Los reyes del mundo</h2>
            <br>
            <small>Le jeune Rá vit avec ses amis Culebro, Sere, Winny et Nano dans les rues de Medellin. <br>
              Leur espoir renaît lorsque le gouvernement promet à Rá le droit d’acquérir un terrain duquel sa famille
              avait été chassée, <br>
              comme des milliers d’autres Colombiens, par les paramilitaires. <br>
              La bande de copains se met donc sur la route périlleuse qui mène dans l’arrière-pays. <br>
              Un voyage palpitant entre aventure et délire commence.</small>
            <br>
            <br>
            <h3 class="prix">15€</h3>
            <a href="Panier.php" class="button" onclick="add(5)">&#9755; Ajouter au panier &#9754;
            </a>
          </div>

          <div class="rpz">
            <p>Sort le 26 mars 2023, issue de la catégorie : Aventure, Drame</p>
            <br>
            <h2 class="nom">Hokusai</h2>
            <br>
            <small>Japon, XVIIIème siècle. Alors que le pouvoir impérial impose sa censure sur les artistes, le jeune
              Shunrô, <br>
              apprenti peintre, est exclu de son école à cause de son tempérament impétueux et du style peu
              conventionnel de ses estampes. <br>
              Personne n’imagine alors qu’il deviendra Hokusai, célèbre auteur de la Grande vague de Kanagawa.</small>
            <br>
            <br>
            <h3 class="prix">15€</h3>
            <a href="Panier.php" class="button" onclick="add(6)">&#9755; Ajouter au panier &#9754;
            </a>
          </div>
          <div class="rpz">
            <img src="image/hokusai.jpg" onclick="playVideo('videos/video10.mp4')">

          </div>

          <div class="rpz">
            <img src="image/jw.jpg" onclick="playVideo('videos/video1.mp4')">
          </div>
          <div class="rpz">
            <p>Sort le 22 mars 2023, issue de la catégorie : Action</p>
            <br>
            <h2 class="nom">John Wick : Chapitre 4</h2>
            <br>
            <small>John Wick découvre un moyen de vaincre l’organisation criminelle connue sous le nom de la Grande
              Table. <br>
              Mais avant de gagner sa liberté, Il doit affronter un nouvel ennemi qui a tissé de puissantes alliances à
              travers le monde et qui transforme les vieux amis de John en ennemis.</small>
            <br>
            <br>
            <h3 class="prix">15€</h3>
            <a href="Panier.php" class="button" onclick="add(7)">&#9755; Ajouter au panier &#9754;
            </a>
          </div>

          <div class="rpz">
            <p>Sort le 5 avril 2023, issue de la catégorie : Action, Aventure, Animation</p>
            <br>
            <h2 class="nom">Super Mario Bros, le film</h2>
            <br>
            <small>Un film basé sur l’univers du célèbre jeu : Super Mario Bros.</small>
            <br>
            <br>
            <h3 class="prix">15€</h3>
            <a href="Panier.php" class="button" onclick="add(8)">&#9755; Ajouter au panier &#9754;
            </a>
          </div>
          <div class="rpz">
            <img src="image/mario.jpg" onclick="playVideo('videos/video2.mp4')">

          </div>

          <div class="rpz">
            <img src="image/dalva.jpg" onclick="playVideo('videos/video3.mp4')">
          </div>
          <div class="rpz">
            <p>Sort le 22 mars 2023, issue de la catégorie : Drame</p>
            <br>
            <h2 class="nom">Dalva</h2>
            <br>
            <small>Dalva a 12 ans mais s'habille, se maquille et se vit comme une femme. <br>
              Un soir, elle est brusquement retirée du domicile paternel. D'abord révoltée et dans l'incompréhension
              totale, <br>
              elle va faire la connaissance de Jayden, un éducateur, et de Samia, <br>
              une adolescente au fort caractère.
            </small>
            <br>
            <br>
            <h3 class="prix">15€</h3>
            <a href="Panier.php" class="button" onclick="add(9)">&#9755; Ajouter au panier &#9754;
            </a>
          </div>

          <div class="rpz">
            <p>Sort le 13 avril 2023, issue de la catégorie : Comédie, Drame</p>
            <br>
            <h2 class="nom">Brighton 4th</h2>
            <br>
            <small>Avec Levan Tedaishvili, Giorgi Tabidze, Nadia Mikhalkova
              Un ancien champion de lutte géorgien part à Brighton 4th, New York, <br>
              pour tenter d’aider son fils qui accumule les dettes de jeu.</small>
            <br>
            <br>
            <h3 class="prix">15€</h3>
            <a href="Panier.php" class="button" onclick="add(10)">&#9755; Ajouter au panier &#9754;
            </a>
          </div>
          <div class="rpz">
            <img src="image/4th.jpg" onclick="playVideo('videos/video4.mp4')">
          </div>
        </div>
      </div>
      <div class="videoplay" id="videoclick">
        <video width="100%" controls autoplay id="video">
          <source src="videos/video1.mp4" type="video/mp4">
        </video>
        <img src="image/close.jpg" class="bouttonclose" onclick="stopVideo()">
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