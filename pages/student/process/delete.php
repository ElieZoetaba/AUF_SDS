<?php
include("../../../db_connexion.php");



    $id = $_GET["id"];


    $query = "DELETE FROM `etudiant` WHERE id=$id";
    $resultats = mysqli_query($connexion, $query);
    // echo $query;
    if ($resultats) {
        // echo 'tuteur supprimé';
        header("Location: ../../list.php?success=3");
        exit;
    }
    else {
        echo 'erreur';
        header("Location: ../../list.php?error=3"); 
        exit;
    }


    ?>