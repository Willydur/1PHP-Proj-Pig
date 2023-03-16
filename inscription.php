<?php
session_start();
if (isset($_POST['valider'])) {
    if (isset($_POST['name']) && isset($_POST['pass'])) {
        $name = $_POST['name'];
        $pass = $_POST['pass'];
        $conn = mysqli_connect("eliascastel.ddns.net", "php1", "SupInfo2023!", "php1Pig");
        $req = mysqli_query($conn, "INSERT INTO user SET nom = '$name', pass ='$pass', cart = '' ");
        //$num_ligne = mysqli_num_rows($req);
        if ($req) {
            $_SESSION['name'] = $name;
            $_SESSION['cart'] = array();
            header("Location:acceuil.php");
        } else {
            $erreur = "Nom ou code incorect !";
        }
    } else {
        $erreur = "Veuillez remplir tous les champs !";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="compte.css">
</head>

<body>
    <section>
        <h1> Inscription </h1>
        <?php
        if (isset($erreur)) {
            echo "<p class= 'Erreur'>" . $erreur . "</p>";
        }
        ?>
        <form action="" method="POST">
            <label>Nom</label>
            <input type="text" name="name">
            <label>Mot de Passe</label>
            <input type="password" name="pass">
            <input type="submit" value="Valider" name="valider">
        </form>
    </section>
</body>

</html>