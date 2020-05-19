<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>



<style type="text/css">
	
	body{
	background-image: url('signin.gif');
	background-size: cover;
	font-family: roboto;
	color:#303030;
	}
	div{
		background-color: #DEDEDE;
		width: 70rem;
		height:45rem;
		position: relative;
		top:2.5rem;
		left:10rem;

	}
	@keyframes exs{
		0%{transform: rotateX(300deg)rotateY(300deg)rotateZ(300deg);}
	}

</style>


<div>

	<h1 style="text-align: center;padding-bottom:10%;">Welcome to FriendsBook</h1>

<h6 style="visibility: hidden;">
<?php





session_start();

include 'conn.php';

$sql = "SELECT `id`, `name`, `email`, `password`, `phone`, `time`, `active`, `banned`  FROM `userdata` WHERE email = '".$_POST['email']."' and password = '".$_POST['password']."'";


$a = mysqli_query($conn, $sql);


$row = mysqli_fetch_assoc($a);

if($row['id']>0 and $row['banned'] == "no"){
	$_SESSION['name'] = $row['name'];
	$_SESSION['email'] = $row['email'];
	$_SESSION['password'] = $row['password'];
	$_SESSION['phone'] = $row['phone'];
	$_SESSION['id'] = $row['id'];
	$sql = "UPDATE `userdata` SET `active` = 'yes' WHERE id = '".$_SESSION['id']."'";


	$a = mysqli_query($conn, $sql);
	header('Location: http://205.147.99.187/FriendsBook/user/home.php');
}














$txt = "Sorry sir but could not found your email or password please check and try Thank You";


?>
</h6>

<h1 style="text-align: center;padding-bottom:1%;color: red;">Email or Password Not Found</h1>

<h1 style="text-align: center;"><?php echo $txt?></h1>

<form action="login.php">
	<button style="font-size: 700%; background-color:#00FEB1;color: white;position: relative;left:21rem;top:5rem; animation-name: exs;animation-duration: 2.5s">Go Back</button>
</form>

</div>



</body>
</html>