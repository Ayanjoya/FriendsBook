<?php


$conn = mysqli_connect("localhost", "root", "12345", "my_fb");
session_start();



$sql1 = "UPDATE `userdata` SET `active` = 'no' WHERE id = '".$_SESSION['id']."'" ;
$a = mysqli_query($conn, $sql1);
session_destroy();

header('Location: intro.php')


?>