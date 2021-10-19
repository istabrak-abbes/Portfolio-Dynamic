<?php
include 'connexion.php';
    $result = mysqli_query($conn,"SELECT * from utilisateurs");
    if (!$result) {
        printf("Error: %s\n", mysqli_error($conn));
        exit();
    }
while ( $row = mysqli_fetch_array($result)){
echo $row['user'].' - '.$row['password'].' - '.$row['role'].'<br>';

}
mysqli_close($conn);
?>
