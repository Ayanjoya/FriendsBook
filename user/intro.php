<!DOCTYPE html>
<html lang="en">
<head>
<?php session_start();
	?>

	<h6 style="visibility: hidden;display: none;">
		<?php

		include 'conn.php';

		$sql1 = "SELECT `id`, `name`, `email`, `password`, `phone`,`time`, `active`, `banned` FROM `userdata` WHERE id = '" . $_SESSION['id'] . "'";
		$a = mysqli_query($conn, $sql1);
		$row = mysqli_fetch_assoc($a);

		if (!empty($_SESSION['id'])) {
			header('Location: http://soclpie.com/home.php?');
		}

		?>

	</h6>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>







	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	



<div class="w-50 h-100" style="background-color: #00AEFF;">


<img src="full2.png">

</div>




<style>

html,body{
	height:100%;
}

</style>
</body>
</html>