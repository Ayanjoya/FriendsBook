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

	@keyframes ex{
		0%{position: relative;left:100%;}
	}
	@keyframes exs{
		0%{transform: rotateX(300deg)rotateY(300deg)rotateZ(300deg);}
	}

</style>
<div style = "animation-name: ex;animation-duration: 1s"><h1 style="text-align: center;">Welcome to FriendsBook</h1>

<?php


include 'conn.php';

$sql1 = "SELECT count(*) as counter  FROM `userdata` WHERE email = '".$_POST['email']."'";
$a = mysqli_query($conn, $sql1);


$sql11 = "SELECT `id`, `name`, `email`, `password`, `phone`, `time`, `active`, `banned` FROM `userdata` WHERE name = '".$_POST['name']."'";
$a1 = mysqli_query($conn, $sql11);
	$row2 = mysqli_fetch_assoc($a1);

if($a){
	$row = mysqli_fetch_assoc($a);
	if($row['counter']){
		$text = "Sorry sir but the email already exist please change it and click on go back to go back and correct it Thank You.";
	}

	elseif ($row2 > 0) {
		$text = "This usernae is already taken by someone please select new name.";	
	}


	else{

		$sql = "INSERT INTO `userdata`(`name`, `email`, `password`, `phone`) VALUES ('".$_POST['name']."','".$_POST['email']."','".$_POST['password']."','".$_POST['phone']."')";



		mysqli_query($conn, $sql);
		header('Location: http://205.147.99.187/FriendsBook/user/login.php');
	}
}
?>
<br><br><br>
<h1 style="color: red;text-align: center;">Email or Name Already Exist</h1>
<h1 style="text-align: center;"><?php  echo $text;?></h1>
<br>

<form action="signin.php">
	<button style="font-size: 700%; background-color:#00FEB1;color: white;position: relative;left:21rem;top:5rem; animation-name: exs;animation-duration: 2.5s">Go Back</button>
</form>


</div>

</body>
</html>