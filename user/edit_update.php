<?php
session_start();
include 'conn.php';




$tmp_name = $_FILES["img"]["tmp_name"];

$name = $_SESSION['id'].basename($_FILES["img"]["name"]);
$imagepath = "profileimages/$name";
move_uploaded_file($tmp_name, $imagepath);


$tmp_name1 = $_FILES["back_img"]["tmp_name"];

$name1 = $_SESSION['id'].basename($_FILES["back_img"]["name"]);
$imagepath1 = "backimages/$name1";
move_uploaded_file($tmp_name1, $imagepath1);



$sql1 = "UPDATE `profile` SET `bio`='".$_POST['bio']."',`address`= '".$_POST['address']."',`img`= '".$imagepath."',`back_cover`='".$imagepath1."' WHERE user_id = '".$_SESSION['id']."'";
$a = mysqli_query($conn, $sql1);
$row = mysqli_fetch_assoc($a);


header('Location:profile.php');

// echo "imagepath = ".$imagepath."<br>";
// echo "imagepath2 = ".$imagepath1."<br>";

?>
