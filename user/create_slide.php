<?php

session_start();


// print_r($_FILES);
// exit;

$tmp_name = $_FILES["pic1"]["tmp_name"];



$name = time().$_SESSION['id'].basename($_FILES["pic1"]["name"]);
$imagepath = "post/$name";
move_uploaded_file($tmp_name, $imagepath);



$tmp_name1 = $_FILES["pic2"]["tmp_name"];



$name1 = time().$_SESSION['id'].basename($_FILES["pic2"]["name"]);
$imagepath1 = "post/$name1";
move_uploaded_file($tmp_name1, $imagepath1);




$tmp_name2 = $_FILES["pic3"]["tmp_name"];



$name2 = time().$_SESSION['id'].basename($_FILES["pic3"]["name"]);
$imagepath2 = "post/$name2";
move_uploaded_file($tmp_name2, $imagepath2);






$tmp_name3 = $_FILES["pic4"]["tmp_name"];



$name3 = time().$_SESSION['id'].basename($_FILES["pic4"]["name"]);
$imagepath3 = "post/$name3";
move_uploaded_file($tmp_name3, $imagepath3);


include 'conn.php';



$sql = "INSERT INTO `user_post`(`user_id`, `name`,`email`, `description` , `media` ,  `media2`, `media3`, `media4`, `friend`) VALUES ('".$_SESSION['id']."','".$_SESSION['name']."','".$_SESSION['email']."', '".addslashes($_POST['desc'])."' , '".$imagepath."' , '".$imagepath1."' ,  '".$imagepath2."' , '".$imagepath3."' ,'".$_POST['tag']."')";

$a = mysqli_query($conn, $sql);

header("Location: http://soclpie.com/home.php");

?>