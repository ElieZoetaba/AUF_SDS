<?php
include("../db_connexion.php")
?>

<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/all.css">
    <link rel="stylesheet" href="../css/list.css">
    <link rel="stylesheet" href="../assets/css/icons.css">
    <title>Hello, world!</title>
</head>

<body>
    <nav class="navbar navbar-light bg-light position-fixed-top">
        <div class="container-fluid">
            Univsersite Joseph Ki-Zerbo
            <a class="navbar-brand" href="../index.php">
                <img src="../images/main-logo.png" alt="" width="100" height="100" class="d-inline-block align-text-top">
            </a>
            Science De Sante(SDS)
        </div>
    </nav>


    <?php
    $query = " SELECT * FROM `etudiant` ";
    $resultats = mysqli_query($connexion, $query);
    $row = mysqli_fetch_assoc($resultats);
    ?>
    <div>

        <ul class="main-card ">

            <?php
            while ($row = mysqli_fetch_assoc($resultats)) {
                $query_tuteur = "SELECT * FROM `tuteur` where id = $row[tutId] ";
                $resultats_tuteur = mysqli_query($connexion, $query_tuteur);
                $row_tuteur = mysqli_fetch_assoc($resultats_tuteur);
                echo '<li class="card li-card my-3">
                <div class="card-container">
                    <div>
                        <h5 class="card card-title px-3">' . $row["user"] . '</h5>
                    </div>
                    <div>
                        <h5 class="card text-muted px-3"><small>' . $row["naissance"] . '</small></h5>
                    </div>
                    <div>
                        <h5 class="card px-3">tuteur :
                        '.$row_tuteur ["user"].' '.$row_tuteur["email"].' :'.$row_tuteur["telephone"].'</h5>
                    </div>
                </div>
                <div class="option my-3">
                    <span type="button" class=" my-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#029035" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                            <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                        </svg>
                    </span>

                    <div class="modal fade" id="staticBackdrop">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div type="button" class="option" data-bs-dismiss="modal">Modifier</div>
                                <br>
                                <div type="button" class="option">Supprimer</div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>';
            }
            ?>
        </ul>
    </div>

    <a href="./student/add.php">
        <div class="add d-flex">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-plus-lg" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
            </svg>
        </div>
    </a>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>