


<html>
<head>

<?php session_start();
?>

<h6 style="visibility: hidden;display: none;">
<?php

include 'conn.php';

$sql1 = "SELECT `id`, `name`, `email`, `password`, `phone`,`time`, `active`, `banned` FROM `userdata` WHERE id = '".$_SESSION['id']."'";
$a = mysqli_query($conn, $sql1);
$row = mysqli_fetch_assoc($a);

if(!empty($_SESSION['id'])){
	header('Location: http://soclpie.com/home.php?');

}

?>
 
</h6>




    <meta name="viewport" content="width=device-width, initial-scale=1.0">








<title></title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</head>
<body>







<h1 style="position: relative;top:30%;text-align: center;color:white;font-size: 400%;">SoclPie</h1>

<h3 style="position: relative;top:30%;text-align: center;color:white;font-size: 200%;">The Social Network</h3>


<a class="btn btn-primary btn-block" href="login.php" style="position: relative;top:40%;">SignIn</a>
<a class="btn btn-success btn-block" href="signin.php"  style="position: relative;top:40%;">SignUp</a>


<style type="text/css">
	body{
		background-image: url(index_image3.jpg);
		background-position: center;
		background-size: cover;
		backdrop-filter:blur(15px);
	}
	html,body{
		height: 100%;
	}
</style>
</body>
</html>