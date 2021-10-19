<?php
include 'connexion.php';

$username=$_POST['username'] ;
$role=$_POST['role'] ;
$password=$_POST['password'] ;
$result = mysqli_query($conn,"UPDATE utilisateurs SET password='$password' WHERE username='$username' AND role='$role'");

mysqli_close($conn);
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Utilisateur ajouté</title>
        <link rel="stylesheet" href="assets/css/main.css" />
    </head>
    <body class="is-preload">
        <nav id="nav">
            <ul class="container">
               
                <li><a href="index-login.php">Déconnexion </a></li>
                
                
            </ul>
            
        </nav>



        <article id="top" class="wrapper style1">
            <div class="container">
                <div class="row">
                    
                    
                        <p>utilisateur modifié avec succés</p>
                   
                        <a href="index-admin.html" class="button large scrolly">Retour</a>
                    </div>
                </div>
            </div>
        </article>
<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery.scrolly.min.js"></script>
        <script src="assets/js/browser.min.js"></script>
        <script src="assets/js/breakpoints.min.js"></script>
        <script src="assets/js/util.js"></script>
        <script src="assets/js/main.js"></script>

        
    </body>
    </html>