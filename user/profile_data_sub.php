<?php

session_start();

include 'conn.php';

$sql1 = "INSERT INTO `profile`(`user_id`, `name`, `email`, `gender`, `dob`, `address`) VALUES ('".$_SESSION['id']."','".$_SESSION['name']."','".$_SESSION['email']."','".$_POST['gender']."','".$_POST['dob']."','".$_POST['address']."')";
$a = mysqli_query($conn, $sql1);
$row = mysqli_fetch_assoc($a);
$_SESSION['gender'] = $_POST['gender'];
$_SESSION['dob'] = $_POST['dob'];
$_SESSION['address'] = $_POST['address'];


header('Location: http://205.147.99.187/FriendsBook/user/profile.php');

?>