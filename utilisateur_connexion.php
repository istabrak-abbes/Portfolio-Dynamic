<?php
include 'connexion.php';
session_start();
if (isset($_POST['user'])){
  $user = stripslashes($_REQUEST['user']);
  $user = mysqli_real_escape_string($conn, $user);
  $_SESSION['user'] = $user;
  $password = stripslashes($_REQUEST['password']);
  
    $query = "SELECT * FROM `utilisateurs` WHERE user='$user'
  and password='$password'";
  
  $result = mysqli_query($conn,$query) or die(mysql_error());
  $row=mysqli_num_rows($result);
  echo $row;
  if (mysqli_num_rows($result) == 1) {
     
    $user = mysqli_fetch_assoc($result);
    echo $user;
    // vérifier si l'utilisateur est un administrateur ou un utilisateur
    if ($user['role'] == 'enseignant') {
      header('location: index-enseignant.html');      
    }
    elseif($user['role'] == 'admin'){
        header('location: index-admin.html');
    }
    else{
      header('location: index.html');
    }
  }else{
    $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
    echo $message;
  }
}
?>