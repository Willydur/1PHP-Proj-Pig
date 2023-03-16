<?php
session_start();
if (!isset($_GET['mots'])) {
    header("Location:acceuil.php");
}
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

    <style>
        .recherche {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin-top: 50px;
            flex-direction: row;
            align-content: space-around;
            align-items: center;
        }

        .img-film {
            width: 200px;
            height: 300px;
            margin: 10px;
        }

        .film {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin: 10px;
            border: 1px solid black;
            border-radius: 10px;
            padding: 10px;
            width: 300px;
            height: 500px;
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
        </div>
    </div>

    <div class="recherche">
        <?php
        $mots = $_GET['mots'];
        $db = new PDO("mysql:host=eliascastel.ddns.net;dbname=php1Pig", "php1", "SupInfo2023!");
        $res = $db->prepare("SELECT * FROM products WHERE nom LIKE '%$mots%' OR synopsis LIKE '%$mots%' OR prix LIKE '%$mots%' ");
        $res->execute();
        $films = $res->fetchAll(PDO::FETCH_ASSOC);
        if (!empty($films)) {
            foreach ($films as $film) {
                echo "<div class='film'>";
                echo "<img class='img-film' src='image/" . $film['img'] . "' alt=''>";
                echo "<h3>" . $film['nom'] . "</h3>";
                echo "<p>" . $film['synopsis'] . "</p>";
                echo "<p>" . $film['prix'] . "€</p>";
                echo "<a href='panier.php?add=" . $film['ID'] . "'>Ajouter au panier</a>";
                echo "</div>";
            }
        } else {
            echo "Aucun film trouvé";
        }
        ?>
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