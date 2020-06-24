<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">


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

@keyframes ex{

0%{transform: rotateY(1000deg);}

50%{position: relative;top: 100px;}

100%{position: relative;bottom: -100px;}

}

</style>

<div>
	<h1 style="	text-align: center;	padding-bottom: 10%;
">Welcome to Friends Book</h1>
	<form action = "login_check.php" method = "post">
	<h1 style="padding-left: 1%">Email</h1>
	<input type="text" name="email">
	<br>
	<br>
	<br>
	<br>

	<h1 style="padding-left: 1%">Password</h1>
	<input type="password" name="password">
	<button style="font-size: 5rem;font-family: roboto;background-color: #0087FF;color: white;
		box-shadow:0 9px 5px black;position: relative;left:36%;top:3rem;animation-name: ex;animation-duration: 5s;">Submit</button>
</form>
</div>


</body>
</html>