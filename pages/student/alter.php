<?php
include("../../db_connexion.php");
?>


<?php
if (isset($_GET["id"])) {
   $id = $_GET["id"];
    $query = "SELECT * FROM `etudiant` WHERE id= $id";
    $resultat = mysqli_query($connexion, $query);
    $row_etudiant = mysqli_fetch_assoc($resultat);
}
?>

<?php
//  Fetch all tutors from database
$query_all_tutors = "SELECT * FROM `tuteur` ORDER BY `id` DESC";
$resultats_tutors = mysqli_query($connexion, $query_all_tutors);
?>

<?php
//  Fetch a tutor based on student's tutor id
$query_tuteur = "SELECT * FROM     `tuteur` WHERE  `id` = $row_etudiant[tutId]";
$resultat_tuteur = mysqli_query($connexion, $query_tuteur);
$row_tuteur = mysqli_fetch_assoc($resultat_tuteur);
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/all.css">
    <link rel="stylesheet" href="../../css/student/add.css">
    <title>Hello, world!</title>
</head>

<body>
    <form action="../student/process/alter.php?id=<?php echo $row_etudiant['id']; ?>" method="post" class="card container admin-form">
        <img src="../../images/main-logo.png" alt="logo" height="200" width="200" style="margin:auto;">
        <div class="btn-container">
            <span class="con-ins btn-connexion  btn">Modifier L'etudiant <?php echo $row_etudiant['user'];
                                                                            ?></span>
        </div>
        <div class="inscription">
            <label for="nom"> Nom & Prenom</label>
            <input required type="text" name="nom" value="<?php echo $row_etudiant['user'];
                                                            ?>" placeholder="Nom" class="mt-3 p-2 col-6">
            <div class="col">
                <label for="email"> Email</label> <br>
                <input required type="email" value="<?php echo $row_etudiant['email'];
                                                    ?>" name="email" placeholder="Email" class="mt-3 p-2 ">
            </div>
            <label for="naissance">Date de naissance</label></br>
            <input required type="text" name="naissance" value="<?php echo $row_etudiant['naissance'];
                                                                ?>" onfocus="(this.type='date')" placeholder="Date de naissance" class="mt-3 p-2">
            <label for="telephone"> Telephone</label>
            <input required type="text" name="telephone" value="<?php echo $row_etudiant['telephone'];
                                                                ?>" placeholder="Telephone" class="mt-3 p-2"><br>
            <label for="telephone"> Tuteur</label><br>
            <select type="select" name="tuteurId" placeholder="Tuteur" class="mt-3 p-2">
                <option value="<?php echo $row_tuteur['id']; ?>"><?php echo $row_tuteur['user'];
                                                                    echo " ($row_tuteur[telephone])"; ?></option>
                <?php
                while ($row = mysqli_fetch_assoc($resultats_tutors)) {
                    echo "<option value='$row[id] '> $row[user] ($row[telephone])</option>";
                }
                ?>
            </select>
            <div class="submit-container">
                <input type="submit" name="enregistrer" value="Mettre a jour" class="submit mt-3 mb-3  btn">
            </div>
        </div>
    </form>
    <br>
    <br>
    <div id="tri"></div>

    <script src="../../assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>