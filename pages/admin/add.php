<?php
include("../../db_connexion.php")
?>

<?php
if (isset($_POST["inscrire"])) {

    $nom = $_POST["nom"];
    $password = $_POST["password-inscript"];
    $password_2 = $_POST["password-repeat"];
    $email = $_POST["email"];


    if ($password == $password_2) {
        $query = " INSERT INTO `admin`  ( user, email , password )
        VALUES( '$nom' , '$email' , md5('$password') ) ";
        $resultats = mysqli_query($connexion, $query);
        if ($resultats) {
            header("Location: /sds/index.php");
            exit;
        } else {
            echo "erreur";
        }
    } else {
        header("Location: /sds/index.php?error=1");
    }
}

if (isset($_POST["connecter"])) {

    $password = $_POST["password-connect"];
    $password = md5($password);
    $user = $_POST["user"];
    $query = " SELECT email , password FROM `admin` 
    WHERE ( email = '$user'  OR user = '$user') AND password='$password' ";
    $resultats = mysqli_query($connexion, $query);
    $row = mysqli_fetch_assoc($resultats);

    if ($row) {
        header("Location: /sds/pages/list.php");
        exit;
    }
    else {
        header("Location: /sds/index.php?error=2");
        exit;
    }
}
?>

