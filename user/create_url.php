<?php

session_start();


// print_r($_FILES);
// exit;

$tmp_name = $_FILES["thumb"]["tmp_name"];



$name = time().$_SESSION['id'].basename($_FILES["thumb"]["name"]);
$imagepath = "post/$name";
move_uploaded_file($tmp_name, $imagepath);


include 'conn.php';



$sql = "INSERT INTO `user_post`(`user_id`, `name`,`email`, `description` , `media` , `friend` , `url`) VALUES ('".$_SESSION['id']."','".$_SESSION['name']."','".$_SESSION['email']."','".$_POST['desc']."' , '".$imagepath."' , '".$_POST['tag']."' , '".$_POST['url']."')";

$a = mysqli_query($conn, $sql);

header("Location: http://205.147.99.187/FriendsBook/user/home.php");

?>