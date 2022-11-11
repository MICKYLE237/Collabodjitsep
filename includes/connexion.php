<!DOCTYPE html>
<html lang="fr" id="tout">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="connexion.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script language="javascript" src="connexion.js"></script>
        <script src="profil.js"></script>
        <title>Connexion</title>
    </head>
    <body id="body">
        <form action="config.php" method="post">
            <div id="connexion">
                
                    <input type="image" id="profile1" name="profile_photo"   src="con1.jpg"  > <br>
                    <input type="email" name="email" placeholder="email" id="Email"> <br><br>
                    <input type="text" name="Nom" placeholder="Nom d'utilisateur " id="user"> <br> <br>
                    <input type="password" name="password" placeholder="Mot de passe" id="password"> <br><br> <br>
                    <button id="bt" onclick="connexion()" onclick="accueil()">Connexion</button><br><br><br><br><br><br><br>
                    <label for="text" id="text">Vous n'avez pas de compte ? </label>
                    <a href="compte.html" id="link">Créez-en un compte</a>
                    <a href="" id="connecte">Se connecter via Facebook</a>
                    <a href="" id="connecter">Se connecter via Google</a>
                </div>
            </div>
        </form>
    </body>
</html>