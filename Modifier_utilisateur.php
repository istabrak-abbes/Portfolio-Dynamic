<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire modification d’un mot de passe d’un utilisateur</title>
</head>
<body>
Pour modifier votre mot de passe :<br>
<form method="post" action="utilisateur_update.php">
Nom utilisateur : <input type="text" name="username"><br>
Role : <input type="text" name="role"><br>
Mot de passe : <input type="password" name="password"><br>

<input type="submit" name="submit" value="Modifier">
</form>
</body>
</html>