<?php

include 'conn.php';

    $sql11 = "DELETE FROM `user_post` WHERE id = '".$_GET['id']."'";
    $a1 = mysqli_query($conn, $sql11);



    $row1 = mysqli_fetch_assoc($a1);
    header('Location:home.php');

?>