
<?php
session_start();

include 'menu.php';
include 'conn.php';

?>


<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Welcome Back!</strong> You should check in on some of those InBox below.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>


<?php
	$sql11 = "SELECT * FROM `notify` WHERE creator_id = '".$_SESSION['id']."' order by id desc";
	$a1 = mysqli_query($conn, $sql11);
while (	$row1 = mysqli_fetch_assoc($a1)){


	$sql111 = "SELECT * FROM `profile` WHERE id = '".$row1['user_id']."'";
	$a11 = mysqli_query($conn, $sql111);	
	$row11 = mysqli_fetch_assoc($a11)
?>


<div class="media" style="padding-left: 2%;padding-top: 2%; border-bottom:solid #d3d3d3;padding-bottom: 0%;">
 <a style="color:black;"  href = 'veiw_profile.php?id=<?= $row11['id']?>'><img src="<?= $row11['img']?>" style = "object-fit:cover;border-radius:80%;height: 64px; width: 64px;"class="mr-3" alt="..."></a>
  <div class="media-body">
    <h5 class="mt-0"><a style="color:black;"  href = 'veiw_profile.php?id=<?= $row11['id']?>'><?= "@".$row11['name']?></a></h5>

    <?php

    echo $row1['title'];

    ?>


    <div style="text-align: right;padding-right:1%;">
    	    <a class="btn btn-primary text-white">Go There</a>

    	<?php
    	    echo $row1['time'];

    	?>

    </div>
</div>

</div>

<?php
}




?>
