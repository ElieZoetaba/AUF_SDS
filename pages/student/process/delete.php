<?php
include("../../../db_connexion.php");



    $id = $_GET["id"];


    $query = "DELETE FROM `etudiant` WHERE id=$id";
    $resultats = mysqli_query($connexion, $query);
    if ($resultats) {
        echo 'tuteur supprimé';
        header("Location: ../../list.php?success=1");
        exit;
    }
    else {
        echo 'erreur';
        header("Location: ../../list.php?error=1"); 
        exit;
    }


    ?>