<?php
include("../../../db_connexion.php")
?>

<?php

$id = $_GET["id"];
$nom = $_POST["nom"];
$telephone = $_POST["telephone"];
$email = $_POST["email"];
$naissance = $_POST["naissance"];
$tuteur = $_POST["tuteurId"];

$query = "UPDATE `etudiant` SET id=$id,
    user='$nom', telephone='$telephone',
    naissance='$naissance' , tutId=$tuteur WHERE id=$id ";

echo $query;
$resultats = mysqli_query($connexion, $query);
if ($resultats) {
    header("Location: /sds/pages/list.php?success=1");
} else {
    header("Location: /sds/pages/student/alter.php?id=$id&error=1");
}

?>