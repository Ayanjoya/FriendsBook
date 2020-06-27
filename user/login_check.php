<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">


<style type="text/css">
	
	body{

	font-family: roboto;
	color:#303030;
}

</style>


<h6 style="visibility: hidden; display: none;">
<?php





session_start();

include 'conn.php';

$sql = "SELECT `id`, `name`, `email`, `password`, `phone`, `time`, `active`, `banned`  FROM `userdata` WHERE email = '".$_POST['email']."' and password = '".$_POST['password']."'";


$a = mysqli_query($conn, $sql);


$row = mysqli_fetch_assoc($a);

if($row['id'] and $row['banned'] == "no"){
	$_SESSION['name'] = $row['name'];
	$_SESSION['email'] = $row['email'];
	$_SESSION['password'] = $row['password'];
	$_SESSION['phone'] = $row['phone'];
	$_SESSION['id'] = $row['id'];
	$_SESSION['my_id'] = $row['id'];
	$sql = "UPDATE `userdata` SET `active` = 'yes' WHERE id = '".$_SESSION['id']."'";


	$a = mysqli_query($conn, $sql);
	header('Location: http://soclpie.com/profile_data.php');




}

else{








echo '

<script type="text/javascript">
	

alert("Sorry sir but could not found your email or password please check and try Thank You");


window.location.href = "http://soclpie.com/login.php";

// Simulate an HTTP redirect:
window.location.replace("http://soclpie.com/login.php");

</script>


';






}
?>
</h6>





</body>
</html>