<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="./assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/cs/all.css">
    <link rel="stylesheet" href="./css/style.css">


    <title>Hello, world!</title>
</head>

<body>

    <form action="./" method="post" class="card container admin-form">
        <img src="./images/main-logo.png" alt="logo">
        <div class="inscription container-fluid">
            <div class="btn">
                <button class="con-ins">Connexion</button> /
                <button class="con-ins">Inscription</button>
            </div>
            <input type="text" name="nom" id="nom" placeholder="Nom et Prenom" class="mt-3 px-2">
            <input type="email" name="email" id="email" placeholder="Email" class="mt-3 px-2">
            <input type="password" name="password" id="password" placeholder="Mot de passe " class="mt-3 px-2">
            <input type="password" name="password-repeat" id="password-repeat" placeholder="Repetez le mot de passe" class="mt-3 px-2">

            <input type="submit" value="submit" class="submit mt-3 mb-3">
        </div>
    </form>

    <script src="./assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>