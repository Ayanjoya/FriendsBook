<?php

session_start();


// print_r($_FILES);
// exit;

$tmp_name = $_FILES["media"]["tmp_name"];



$name = time().$_SESSION['id'].basename($_FILES["media"]["name"]);
$imagepath = "post/$name";
move_uploaded_file($tmp_name, $imagepath);


include 'conn.php';



$sql = "INSERT INTO `user_post`(`user_id`, `name`,`email`, `description` , `media` , `friend`) VALUES ('".$_SESSION['id']."','".$_SESSION['name']."','".$_SESSION['email']."','".$_POST['desc']."' , '".$imagepath."' , '".$_POST['tag']."')";

$a = mysqli_query($conn, $sql);

header("Location: http://soclpie.com/home.php");

?>