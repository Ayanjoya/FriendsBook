<?php
include'conn.php';
$sql11 = "DELETE FROM `user_likes` WHERE id = '".$_GET['id']."'";
$a1 = mysqli_query($conn, $sql11);
$row11 = mysqli_fetch_assoc($a1);

// echo $sql11;

header('Location:like.php');



?>