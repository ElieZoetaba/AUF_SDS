<?php
include("./db_connexion.php");

$query = "SELECT * FROM `admin`";
$resultats = mysqli_query($connexion, $query);
$row = mysqli_fetch_assoc($resultats);
?>

<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="./assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/all.css">
    <link rel="stylesheet" href="./css/style.css">


    <title>SDS</title>
</head>

<body>

    <form action="./pages/admin/add.php" method="post" class="card container admin-form">
        <img src="./images/main-logo.png" alt="logo">

        <div class="btn-container">
            <span class="con-ins btn-connexion  btn">Connexion</span>
            <?php 
            if(!$row){
                echo '
            <span class="greeny"> /</span>

            <span class="con-ins btn-inscription  btn">Inscription</span>';
            }
            ?>
        </div>

        <div class="inscription">
            <input type="text" name="nom" id="nom-inscription" placeholder="Nom et Prenom" class="mt-3 px-2">
            <input type="email" name="email" id="email-inscription" placeholder="Email" class="mt-3 px-2">
            <input type="password" name="password-inscript"  placeholder="Mot de passe " class="mt-3 px-2">
            <input type="password" name="password-repeat" placeholder="Repetez le mot de passe" class="mt-3 px-2">

            <div class="submit-container">
                    <input type="submit" value="S'inscrire" name="inscrire" class="submit mt-3 mb-3  btn">
            </div>
        </div>


        <div class="connexion">
            <input type="text" name="user" placeholder="Email ou nom d'utilisateur" class="mt-3 px-2">
            <input type="password" name="password-connect" placeholder="Mot de passe " class="mt-3 px-2">
            <div class="submit-container">
                <input type="submit" value="Se connecter" name="connecter" class="submit mt-3 mb-3 btn">
            </div>
        </div>
    </form>

    <script src="./assets/js/bootstrap.bundle.min.js"></script>
    <script src="./js/script.js"></script>
</body>

</html>