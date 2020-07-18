<?php
session_start();
include 'menu.php';
include 'conn.php';
$like1 = "SELECT `id`, `user_id`, `creator_id`, `post_id`, `time` FROM `user_likes` WHERE user_id = '" . $_SESSION['id'] . "' and post_id = '" . $_GET['creator_id'] . "'";
$run1 = mysqli_query($conn, $like1);
$data1 = mysqli_fetch_assoc($run1);

?>
<?php $sql1 = "SELECT `id`, `user_id`, `name`, `email`, `description`, `media`, `media2`, `media3`, `media4`, `color`, `background`, `time`, `friend` , `url`FROM `user_post` WHERE id = " . $_GET['creator_id'] . "";
$a = mysqli_query($conn, $sql1);
$row = mysqli_fetch_assoc($a); ?>

<!DOCTYPE html>
<html>

<head>

	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>


	<script type="text/javascript">
		function fun() {

			let more = document.getElementById("more");
			let rmore = document.getElementById("rmore");
			let rless = document.getElementById("rless");

			if (rless.style.display == "none")
				more.style.display = "inline";
			rmore.style.display = "none";
			rless.style.display = "inline";


		}


		function fun2() {

			let more = document.getElementById("more");
			let rmore = document.getElementById("rmore");
			let rless = document.getElementById("rless");

			if (rless.style.display != "none")
				more.style.display = "none";
			rmore.style.display = "inline";
			rless.style.display = "none";


		}
	</script>

	<?php


	$sql1 = "SELECT `id`, `user_id`, `name`, `email`, `description`, `media`, `media2`, `media3`, `media4`, `color`, `background`, `time`, `friend` , `url`FROM `user_post` WHERE id = " . $_GET['creator_id'] . "";
	$a = mysqli_query($conn, $sql1);
	$row = mysqli_fetch_assoc($a);



	?>

	<?php


	if ($row['color'] == '' and $row['url'] == '' and $row['media2'] == '') {

	?>



		<div class="card mb-3" style="border:0px;">
			<img src="<?php echo $row['media'] ?>" class="card-img-top" alt="...">
			<div class="card-body">
				<h5 class="card-title"><a style="color:black;" href='http://soclpie.com/veiw_profile.php?id=<?= $row['user_id'] ?>'>
						<h3><?= '@' . $row['name'] ?></h3>
					</a>
				</h5>
				<p class="card-text">
					<div style="width: 60%;">
						<div class="desc">
							<h6><?php echo substr($row['description'], 0, 100) ?></h6>
							<h6 id="more" style="display: none;"><?php echo substr($row['description'], 100, 10000) ?></h6>

							<a onclick="fun()" id="rmore">Read More...</a>
							<a onclick="fun2()" id="rless" style="display: none;">Read Less...</a>






						</div>





					</div>

					<h5 class="pt-3">Posted On: <?php echo substr($row['time'], 0, 10); ?></h5>


					<h2 style="padding-left: 0%;padding-bottom: 0%;padding-top:1%;">Comments:</h2>

					<form action="<?php echo $_SERVER['REQUEST_URI'] ?>" enctype="multipart/form-data" id="questionnaire" method="post" style="display: flex;">

						<input type="text" name="com" placeholder="Add A Public Comment" style="font-size: 180%; width:100%;border-left:0px;border-right:0px;border-top:0px;border-bottom-width: 3px;padding:1%;">

						<button class="btn btn-outline-primary btn-lg" style="height:10%;" id="buttt">Submit</button>

					</form>

















					<?php


					$sql11 = "SELECT * FROM `comments` WHERE post_id = '" . $_GET['creator_id'] . "' order by id desc";
					$a1 = mysqli_query($conn, $sql11);
					while ($row1 = mysqli_fetch_assoc($a1)) {


						$sql111 = "SELECT * FROM `profile` WHERE user_id = '" . $row1['user_id'] . "'";
						$a11 = mysqli_query($conn, $sql111);
						$row11 = mysqli_fetch_assoc($a11)
					?>



						<div class="media" style="padding-left: 2%;padding-top: 3%; border-bottom:solid #d3d3d3;padding-bottom: 3%;">
							<a style="color:black;" href='veiw_profile.php?id=<?= $row11['id'] ?>'><img src="<?= $row11['img'] ?>" style="object-fit:cover;border-radius:80%;height: 64px; width: 64px;" class="mr-3" alt="..."></a>
							<div class="media-body">
								<h5 class="mt-0"><a style="color:black;" href='veiw_profile.php?id=<?= $row11['id'] ?>'><?= "@" . $row11['name'] ?></a></h5>
								<?php

								echo $row1['comment'];

								?>
							</div>
						</div>


					<?php } ?>








					<div style="visibility: hidden;display: none;">

						<?php

						if ($_SERVER["REQUEST_METHOD"] == "POST") {




							if ($_REQUEST['com']) {


								$sql11 = "INSERT INTO `comments`(`user_id`, `post_id`, `creator_id`, `comment`) VALUES ('" . $_SESSION['my_id'] . "' , '" . $row['id'] . "' , '" . $row['user_id'] . "' , '" . $_REQUEST['com'] . "')";
								$a1 = mysqli_query($conn, $sql11);
								$row1 = mysqli_fetch_assoc($a1);

								$like = "INSERT INTO `notify`(`user_id`, `creator_id`, `title`, `icon`, `text`) VALUES ('" . $_SESSION['id'] . "' , '" . $row['user_id'] . "' , 'Commented On Your Post' , '" . $row1['img'] . "' , '@" . $row1['name'] . "')";
								$run = mysqli_query($conn, $like);
								$data = mysqli_fetch_assoc($run);


								echo '<script type="text/javascript">';
								echo 'window.location.href = "http://soclpie.com/veiw.php?creator_id=' . $_GET['creator_id'] . '";';

								echo '</script>';
							}





						?>

					</div>

			</div>







		<?php } ?>


	<?php } ?>


		</div>
		</div>
		</p>
		</div>
		</div>
		</div>
		</div>
		</p>
		</div>
		</div>







		<style type="text/css">
			html,
			body {
				height: 100%;
			}
		</style>
</body>

</html>