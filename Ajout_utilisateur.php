<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout utilisateur</title>
</head>
<body>
<form action="utilisateur_insert.php" method="post">
    <p>Nom utilisateur : <input type="text" name="username" /></p>
    <p>Role : <input type="text" name="role" /></p>
    <p>Mot de passe : <input type="password" name="password" /></p>
    <p><input type="submit" value="envoyer"></p>
    <p><input type="reset" value="annuler"></p>
    </form>
</body>
</html>