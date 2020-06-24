<!DOCTYPE html>
<html>
<head>


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">



<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<h6 style="visibility: hidden;">
<?php
session_start();

include 'conn.php';

$sql1 = "SELECT `id`, `name`, `email`, `password`, `phone`, `bio`, `time`, `active`, `banned` FROM `userdata` WHERE id = '".$_SESSION['id']."'";
$a = mysqli_query($conn, $sql1);
$row = mysqli_fetch_assoc($a);

if($_SESSION['id']>0 and $row['banned'] == "no"){
	header('Location: http://205.147.99.187/FriendsBook/user/home.php?');

}

?>



</h6>
	<title></title>
</head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

<body style="background-image: url('intro.gif');background-size: cover;">


<h1 style="font-family: roboto;color: white; font-size: 5rem; text-align: center;position: relative; top: 1.5rem;">
	
	FriendsBook

</h1>

<h1 style="font-family: roboto;color: white; text-align: center; position: relative; bottom: 0rem;">Created by : Ayan Khan</h1>

<form action="signin.php">
	
	<button class = "btn btn-outline-primary"style="font-size: 300%; font-family: roboto; color: white;	
border-color: #001325; position: relative;left:41%;
" >Get Started</button>



</form>
</pre></h1>
<pre>
<h1 style="font-family: roboto;color: white;">

</h1>
</pre>
<form>


<style type="text/css">
	

.btn{
	background-color: #FF7474;
}

</style>


</body>
</html>