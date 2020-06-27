<?php


include 'conn.php';
session_start();



$sql1 = "UPDATE `userdata` SET `active` = 'no' WHERE id = '".$_SESSION['id']."'" ;
$a = mysqli_query($conn, $sql1);
session_destroy();

header('Location: http://soclpie.com/intro.php')


?>