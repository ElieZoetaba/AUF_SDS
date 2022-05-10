<?php

include("../../../db_connexion.php");


    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $bd = $_POST["naissance"];
    $tel = $_POST["telephone"];
    $tuteur = $_POST["tuteur"];
    $user = $nom .  ' ' . $prenom;

        $query = " INSERT INTO `etudiant` ( `user`, `email`, `naissance`, `tutId`, `telephone`) 
        VALUES ( '$user' , '$email', '$bd', '$tuteur' , '$tel') ";

        try {
            $resultats = mysqli_query($connexion, $query);
        if ($resultats) {
            header("Location: ../../list.php");
            exit;
        } else {
            echo "erreur";
        }
        } catch (\Throwable $th) {
            header("Location: ../../list.php?error=2");
        }
