<?php
session_start();
include 'conn.php';

if ($_POST['bio'] == ""or $_POST['phone'] == "" or $_POST['address'] == ""){


$tmp_name = $_FILES["img"]["tmp_name"];

$name = $_SESSION['id'].basename($_FILES["img"]["name"]);
$imagepath = "profileimages/$name";
move_uploaded_file($tmp_name, $imagepath);


$tmp_name1 = $_FILES["back_img"]["tmp_name"];

$name1 = $_SESSION['id'].basename($_FILES["back_img"]["name"]);
$imagepath1 = "backimages/$name1";
move_uploaded_file($tmp_name1, $imagepath1);


include 'conn.php';

$sql1 = "UPDATE `profile` SET`img` = '".$imagepath."' , `back_cover` = '".$imagepath1."' WHERE id = '".$_SESSION['id']."'";


$a = mysqli_query($conn, $sql1);
	header('Location: http://soclpie.com/profile.php');

}

else{



$tmp_name = $_FILES["img"]["tmp_name"];

$name = $_SESSION['id'].basename($_FILES["img"]["name"]);
$imagepath = "profileimages/$name";
move_uploaded_file($tmp_name, $imagepath);




$tmp_name1 = $_FILES["back_img"]["tmp_name"];

$name1 = $_SESSION['id'].basename($_FILES["back_img"]["name"]);
$imagepath1 = "backimages/$name1";
move_uploaded_file($tmp_name1, $imagepath1);






$sql1 = "UPDATE `profile` SET `bio` = '".$_POST['bio']."' , `address` = '".$_POST['address']."' , `img` = '".$imagepath."' ,`back_cover` = '".$imagepath1."' WHERE id = '".$_SESSION['id']."'";


$a = mysqli_query($conn, $sql1);


$sql = "UPDATE `userdata` SET `phone` = '".$_POST['phone']."' WHERE id = '".$_SESSION['id']."'";


$b = mysqli_query($conn, $sql);




header('Location: http://soclpie.com/profile.php');

}
?>