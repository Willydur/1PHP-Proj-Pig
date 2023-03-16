<?php
//connexion à la base de données
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
                            <a href="#">
                                <form method="GET">
                                    <input type="search" name="sh" placeholder="Rechercher un film" />
                                    <button type="submit">&#x1F50E;&#xFE0E;</button>
                                </form>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <div class="recherche">
        <?php
        foreach ($variable as $key => $value) {
            // on parcours la liste des films et on affiche les films qui correspondent à la recherche
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