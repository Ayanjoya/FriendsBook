<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

include 'menu.php';
?>

<div style="border:solid black 3px; width: 20%;height: 47.8rem;background-color: #FEFEFE;overflow: scroll;">


<?php



session_start();
include 'conn.php';

	$sql1 = "SELECT `id`, `user_id`, `name`, `email`, `gender`, `dob`, `bio` ,`address`, `img` ,`back_cover`FROM `profile` WHERE user_id = '".$_GET['id']."'";
	$a = mysqli_query($conn, $sql1);
	$row = mysqli_fetch_assoc($a);

	

?>


	
<img src="<?php  echo $row['img']?>"style = "border-radius: 80%;border: solid white;position: relative;top:1rem; height: 35%; border-bottom-right-radius: 80%;width: 100%;border-width: 0.3rem;object-fit: cover;">


<h2 style="padding-top: 3%;padding-left: 3%;text-align: left;">
	

<?php


echo '@'.$row['name'];


?>



</h2>

<h6 style="position:relative; bottom: 1%; padding-left: 3%;font-size: 110%;color: #5D5C5C;text-align: left;">
	

<?php

echo $row['email'];

	$sql11 = "SELECT `phone` , `time`FROM `userdata` WHERE id = '".$_SESSION['id']."'";
	$a1 = mysqli_query($conn, $sql11);
	$row1 = mysqli_fetch_assoc($a1);

?>



</h6>

  <ul class="list-group list-group-flush" style="padding-bottom: 5%;padding-top: 5%">
    <li class="list-group-item">Gender: <?php echo $row['gender']?></li>
    <li class="list-group-item">D.O.B: <?php echo $row['dob']?></li>
    <li class="list-group-item">Phone no: <?php echo $row1['phone']?></li>
    <li class="list-group-item">Address: <?php echo $row['address']?></li>
    <li class="list-group-item">Joined on: <?php echo $row1['time']?></li>


</ul>
	<hr style=" position :relative; top:-2%; border-top: 3px solid gray;">
	<h5 style="padding-left: 3%;">
		
		<?php




		echo $row['bio'];


		?>

	</h5>



	<hr style="border-top: 3px solid gray;">


<a class="btn btn-outline-secondary btn-lg btn-block blckk" href="edit.php">Follow</a>



</div>

<style type="text/css">
	

.blckk{
	background-color:#006BFC;border-color: #006BFC;color: white;
}
.blckk1{
	background-color:#FF4949;border-color: #FF4949;color: white;
}



	
</style>







<div style="background-image: url('<?php echo $row['back_cover'];?>');padding-top: 25%;width:80%;position: absolute;left:20%;bottom:49.1%;background-size: cover;"></div>

<div  style="background-image: url('<?php echo $row['img'];?>');padding-top: 18%;width:19%;position: absolute;left:21%;bottom:34%;background-size:100%;border-radius: 100%;object-fit: cover;border:solid white 8px;"></div>



<h1 style="position: absolute;left:21%;bottom:28%;"><?= $row['name']?></h1>

<h4 style="position: absolute;left:21%;bottom:25%;color: #5D5C5C;"><?= $row['email']?></h4>




</body>
</html>