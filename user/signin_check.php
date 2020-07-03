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
		$text = "This username is already taken by someone please select new name.";	
	}


	else{

		$sql = "INSERT INTO `userdata`(`name`, `email`, `password`, `phone`) VALUES ('".$_POST['name']."','".$_POST['email']."','".$_POST['password']."','".$_POST['phone']."')";



		$data = mysqli_query($conn, $sql);
		// header('Location: http://soclpie.com/login.php');
	}
}
?>



<?php
// echo '

// <script type="text/javascript">
	

// alert("This username is already taken by someone please select new name.");


// window.location.href = "http://soclpie.com/signin.php";

// // Simulate an HTTP redirect:
// window.location.replace("http://soclpie.com/signin.php");

// </script>


// ';

echo $sql;

?>

</div>

</body>
</html>