<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire suppression d’un utilisateur</title>
</head>
<body>
    <form method="post" action="utilisateur_Delete.php">
    Nom utilisateur : <input type="text" name="username"><br>
    Role : <input type="text" name="role"><br>
    Mot de passe : <input type="password" name="password"><br>
    <input type="submit" name="submit" value="Supprimer">
    </form>
</body>
</html>