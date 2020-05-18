<?php



session_start();
$conn = mysqli_connect("localhost", "root", "12345", "my_fb");

$sql1 = "DELETE FROM `userdata` WHERE id = '".$_SESSION['id']."'";
$a = mysqli_query($conn, $sql1);


$sql1 = "DELETE FROM `profile` WHERE user_id = '".$_SESSION['id']."'";
$a = mysqli_query($conn, $sql1);



header("Location: intro.php");







?>