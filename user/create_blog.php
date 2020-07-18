<?php

session_start();


// print_r($_FILES);
// exit;

$tmp_name = $_FILES["media"]["tmp_name"];



$name = time().$_SESSION['id'].basename($_FILES["media"]["name"]);
$imagepath = "post/$name";
move_uploaded_file($tmp_name, $imagepath);


include 'conn.php';


$sql = "SELECT `id`, `name`, `email`, `password`, `phone`, `time`, `active`, `banned` FROM `userdata` WHERE id = '".$_SESSION['id']."'";

$a = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($a);


$sql = "INSERT INTO `blog`(`user_id`, `name`, `email`, `title`, `description`, `img`) VALUES ('".$row['id']."' , '".$row['name']."' , '".$row['email']."' , '".$_POST['title']."' , '".addslashes($_POST['desc'])."' , '".$imagepath."')";

$a = mysqli_query($conn, $sql);

header("Location: blog.php");

// echo $sql;

?>