<?php

session_start();


// print_r($_FILES);
// exit;



include 'conn.php';



$sql = "INSERT INTO `user_post`(`user_id`, `name`, `email`, `description`, `color`, `background`,`friend`) VALUES ('".$_SESSION['id']."', '".$_SESSION['name']."','".$_SESSION['email']."' , '".$_POST['desc']."' , '".$_POST['font']."' , '".$_POST['back']."' , '".$_POST['friend']."')";

$a = mysqli_query($conn, $sql);


header("Location: http://localhost:8080/my_fb/user/home.php");



?>