<?php

include 'conn.php';

    $sql11 = "UPDATE `user_post` SET `description`= '".$_POST['desc']."',`url`= '".$_POST['url']."' WHERE id = '".$_GET['id']."'";
    $a1 = mysqli_query($conn, $sql11);




    $row1 = mysqli_fetch_assoc($a1);

    header('Location:home.php');

?>