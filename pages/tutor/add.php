<?php

include("../../db_connexion.php");


    $nom = $_POST["nom-tuteur"];
    $email = $_POST["email-tuteur"];
    $tel = $_POST["tel-tuteur"];

        $query = " INSERT INTO `tuteur`  ( user, email , telephone )
        VALUES( '$nom' , '$email', '$tel') ";
        $resultats = mysqli_query($connexion, $query);
        if ($resultats) {
            header("Location: ../studen/add.php");
            exit;
            echo "ok";
        } else {
            echo "erreur";
        }
    ?>