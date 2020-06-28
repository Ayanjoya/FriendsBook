<?php
include'conn.php';
$sql11 = "DELETE FROM `userdata` WHERE id = '".$_GET['creator_id']."'";
$a1 = mysqli_query($conn, $sql11);
$row11 = mysqli_fetch_assoc($a1);


$sql1 = "DELETE FROM `profile` WHERE id =  '".$_GET['creator_id']."'";
$a = mysqli_query($conn, $sql1);
$row1 = mysqli_fetch_assoc($a);

header('Location:profile.php');



?>