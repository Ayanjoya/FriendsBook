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
	overflow: hidden;
}

div{
	background-color: #DEDEDE;
	width: 70rem;
	height:45rem;
	position: relative;
	top:2.5rem;
	left:10rem;

}

input{
	width:69.6rem;
	font-size: 200%;
	position: relative;
	bottom: 1rem
}




</style>


<div>
	<h1 style="	text-align: center;">Welcome to Friends Book</h1>
	<br>
<form action = "signin_check.php" method = "post">
	<h1 style="padding-left: 1%">Name</h1>
	<input type="text" name="name">
	<h1 style="padding-left: 1%">Phone No</h1>
	<input type="number" name="phone">
	<h1 style="padding-left: 1%">Email</h1>
	<input type="email" name="email">
	<h1 style="padding-left: 1%">Password</h1>
	<input type="text" name="password">
	<button style="font-size: 5rem;font-family: roboto;background-color: #0087FF;color: white;
		box-shadow:0 9px 5px black;position: relative;left:75.3%;top:0rem;">Submit</button>
	</form>
	<form action = "login.php">
	<button style="font-size: 5rem;font-family: roboto;background-color: #0087FF;color: white;box-shadow:0 9px 5px black;position: relative;top:-7rem;">LogIn</button>
	</form>
</div>
</form>

</body>
</html>