<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="background-color: #FEFEFE;overflow: hidden;">

<?php

include 'menu.php';


			session_start();
include 'conn.php';

	$sql1 = "SELECT `id`, `user_id`, `name`, `email`, `gender`, `dob`, `bio` ,`address`, `img` ,`back_cover`FROM `profile` WHERE user_id = '".$_SESSION['id']."'";
	$a = mysqli_query($conn, $sql1);
	$row = mysqli_fetch_assoc($a);

?>


<div style="border:solid 0.1px gray;box-shadow: 0px 3px 5px;padding:1%;width: 80%;height: 35rem;position: relative;left:10%; top:6.5rem;background-color: white;	font-family: roboto;
	color:#303030;
">
	

<div id = "top-img" style="padding:1%;height: 42%;position: relative;right:1%;bottom:2.5%;
max-width:	102%;width: 102%;">



<img src="<?php echo $row['back_cover'];?>"  style = "position: relative;right:1.2%;bottom:0.7rem;width: 102.5%;max-width: 120%;
  max-height: 120%;">


	<img src="<?php  echo $row['img']?>"style = "border-radius: 80%;border: solid white 0.1rem;position: relative;top:-8rem; height: 100%; border-bottom-right-radius: 80%;width: 18.5%;border-width: 0.3rem;object-fit: cover;">

	<h3 style="position: relative;top:-65%;padding-top: 0.4%;">
		<?php  



	echo $row['name'];

		?>
	</h3>

	<h5 style="position: relative;top:-71%;color: #5D5C5C;">
		<?php  
			echo $row['email'];


		?>
	</h5>

	<h5 style="position: relative;top:-100%;color: #5D5C5C;text-align: right;">
		<?php  
			echo "Gender : ".$row['gender'];


		?>
	</h5>

	<h5 style="position: relative;top:-105%;color: #5D5C5C;text-align: right;">
		<?php  
			echo "DOB: ".$row['dob'];


		?>
	</h5>


	

	<hr style=" position :relative; top:-105%; border-top: 3px solid gray;">
	<div id = "bio" style="position: relative;bottom: 110%;">
		

<h5 style="font-family:">
	
<?php  echo $row['bio'];?>


<img>


</h5>


	</div>


</div>






</div>

</body>
</html>
