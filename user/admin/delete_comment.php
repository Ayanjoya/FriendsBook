<?php
include'conn.php';
$sql11 = "DELETE FROM `comments` WHERE id = '".$_GET['id']."'";
$a1 = mysqli_query($conn, $sql11);

echo $sql11;

header('Location:comment.php');



?>