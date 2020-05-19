<?php



session_start();
include 'conn.php';

$sql1 = "DELETE FROM `userdata` WHERE id = '".$_SESSION['id']."'";
$a = mysqli_query($conn, $sql1);


$sql1 = "DELETE FROM `profile` WHERE user_id = '".$_SESSION['id']."'";
$a = mysqli_query($conn, $sql1);



header("Location: intro.php");







?>