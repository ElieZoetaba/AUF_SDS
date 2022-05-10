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

    <form action="./" method="post" class="card container admin-form">
        <img src="../../images/main-logo.png" alt="logo">

        <div class="btn-container">
            <span class="con-ins btn-connexion  btn">Ajouter un Etudiant</span>
        </div>

        <div class="inscription">
            <div class="row">
                <div class="col-5">
                    <label for="nom"> Nom</label>
                    <input type="text" name="nom" id="nom-inscription" placeholder="Nom" class="mt-3 px-2 col-6">
                </div>
                <div class="col-6">
                    <label for="prenom"> Prenom</label>
                    <input type="text" name="prenom" id="prenom-inscription" placeholder="prenom" class="mt-3 px-2 col-6">
                </div>
            </div>
            <div class="col">
                <label for="email"> Email</label> <br>
                <input type="email" name="email" id="email-inscription" placeholder="Email" class="mt-3 px-2">
            </div>
            <label for="naissance">Date de naissance</label></br>
            <input type="date" name="naissance" placeholder="Date de naissance" class="mt-3 px-2">
            <label for="telephone"> Telephone</label>
            <input type="text" name="telephone" id="" placeholder="Telephone" class="mt-3 px-2"><br>
            <label for="telephone"> Tuteur</label><br>
            <input type="text" name="tuteur" id="" placeholder="Tuteur" class="mt-3 px-2">

            <div class="submit-container">
                <input type="submit" value="Enregistrer" class="submit mt-3 mb-3  btn">
            </div>
        </div>
    </form>

    <div id="tri"></div>
</body>

</html>