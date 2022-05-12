<?php

include("../../db_connexion.php");


    $nom = $_POST["nom-tuteur"];
    $email = $_POST["email-tuteur"];
    $tel = $_POST["tel-tuteur"];

        $query = " INSERT INTO `tuteur`  ( user, email , telephone )
        VALUES( '$nom' , '$email', '$tel') ";

        try {
            $resultats = mysqli_query($connexion, $query);
        if ($resultats) {
            header("Location: ../student/add.php?success=1");
            exit;
        } else {
            header("Location: ../student/add.php?error=1");
            exit;
        }
    } catch (\Throwable $th) {
            header("Location: ../student/add.php?error=1");
            // throw $th;

        }
        
    ?>