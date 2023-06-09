<?php
session_start();
session_destroy();
if (isset($_POST['valider'])) {
    if (isset($_POST['name']) && isset($_POST['pass'])) {
        $name = $_POST['name'];
        $pass = $_POST['pass'];
        $db = new PDO("mysql:host=eliascastel.ddns.net;dbname=php1Pig", "php1", "SupInfo2023!");
        $res = $db->prepare("SELECT * FROM user WHERE nom=? AND pass=?");
        $res->bindParam(1, $name);
        $res->bindParam(2, $pass);
        $res->execute();
        $num_ligne = $res->rowCount();
        if ($num_ligne > 0) {
            $_SESSION['name'] = $name;
            $a = $db->prepare("SELECT cart FROM user WHERE nom=?");
            $a->bindParam(1, $name);
            $a->execute();
            $b = $a->fetch();
            $tableau = explode(",", $b['cart']);
            $_SESSION['cart'] = $tableau;
            header("Location:acceuil.php");
        } else {
            $erreur = "Nom ou code incorect !";
        }
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
        <center>
            <h1> Connexion</h1>
            <?php
            if (isset($erreur)) {
                echo "<p class= 'Erreur'>" . $erreur . "</p>";
            }
            ?>
            <form action="" method="POST">
                <label>Nom</label>
                <input type="text" name="name">
                <br>
                <label>Mot de Passe</label>
                <input type="password" name="pass">
                <br>
                <input type="submit" value="Valider" name="valider">
            </form>
        </center>
    </section>
</body>

</html>