<?php
session_start();
if (isset($_POST['valider'])) {
    if (isset($_POST['email']) && isset($_POST['mdp'])) {
        $email = $_POST['email'];
        $mdp = $_POST['mdp'];
        $erreur = "";

        $conn = mysqli_connect("localhost", "root", "", "connexion");
        if (!$conn)
            die('Erreur : ' . mysql_connect_error());

        $req = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email' AND mdp ='$mdp' ");
        $num_ligne = mysqli_num_rows($req);
        if ($num_ligne > 0) {
            header("Location:acceuil.php");
            $_SESSION['email'] = $email;
        } else {
            $erreur = "Adresse Mail ou Mot de passe incorrectes !";
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
        <h1> Connexion</h1>
        <?php
        if (isset($erreur)) {
            echo "<p class= 'Erreur'>" . $erreur . "</p>";
        }
        ?>
        <form action="" method="POST">
            <label>Adresse Mail</label>
            <input type="text" name="email">
            <label>Mot de Passe</label>
            <input type="password" name="mdp">
            <input type="submit" value="Valider" name="valider">
        </form>
    </section>
</body>

</html>