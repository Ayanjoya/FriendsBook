<?php
include'conn.php';
$sql1 = "DELETE FROM `user_post` WHERE id = '".$_GET['id']."'";
$a = mysqli_query($conn, $sql1);
$row1 = mysqli_fetch_assoc($a);

header('Location:home.php');

?>