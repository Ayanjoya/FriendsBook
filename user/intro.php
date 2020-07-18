<html>

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




	<meta name="viewport" content="width=device-width, initial-scale=1.0">








	<title></title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</head>

<body>
	<?php include 'intro_menu.php'; ?>
	<div class="brand">

	<h1 class="ml10">
  <span class="text-wrapper">
    <span class="letters title">SoclPie</span>
  </span>
</h1>

<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

<script>
	// Wrap every letter in a span
var textWrapper = document.querySelector('.ml10 .letters');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.ml10 .letter',
    rotateY: [-90, 0],
    duration: 1300,
    delay: (el, i) => 45 * i
  }).add({
    targets: '.ml10',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });
</script>


<style>
.ml10 {
	padding-top: 5%;

  position: relative;
  font-weight: 520;
  text-align: center;

}

.ml10 .text-wrapper {

  display: inline-block;

}

.ml10 .letter {
  display: inline-block;
  transform-origin: 0 0;
}

</style>









<h3 class="ml6">
  <span class="text-wrapper">
    <span class="letters">The Social Network</span>
  </span>
</h3>

<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
		



<style>
	.ml6 {
		text-align: center;
  position: relative;
  padding-bottom: 5%;
  /* font-weight: 900; */

}

.ml6 .text-wrapper {

  display: inline-block;

}

.ml6 .letter {
  display: inline-block;
}
</style>



<script>
	// Wrap every letter in a span
var textWrapper = document.querySelector('.ml6 .letters');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.ml6 .letter',
    translateY: ["1.1em", 0],
    translateZ: 0,
    duration: 750,
    delay: (el, i) => 50 * i
  }).add({
    targets: '.ml6',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });
</script>








<hr class="border-of-title-subtitle">

	</div>


	<!-- <div class="recomended">
		<h5 style="margin-left: 1%;">Also Know About:</h5>
		<div class="row">

			<?php
			$sql11 = "SELECT `id`, `user_id`, `name`, `email`, `gender`, `bio`, `dob`, `address`, `img`, `back_cover` FROM `profile` order by id desc";
			$a1 = mysqli_query($conn, $sql11);
			while ($row1 = mysqli_fetch_assoc($a1)) {
			?>

				<div class="col-xs-1">

					<img src="<?php echo $row1['img']; ?>" class="mr-3 pro" alt="..." style="width:60px;border-radius:80%; margin-left: 50%;">

					<h5 class="name" style="margin-left: 50%; margin-top:10%; "><?php echo $row1['name']; ?></h5>

				</div>

			<?php } ?>


		</div>
	</div> -->



	<div class="account">
		<h6>New Here? No Worries</h6>
		<a class="btn btn-dark btn-block" href="signin.php">Sign Up</a>
		<h6 style="padding-top:3%;text-align: center;;
">OR</h6>
<h6 style="padding-top: -2%;">Already Our Favorite User</h6>
<a class="btn btn-primary btn-block" href="login.php">Sign In</a>

	</div>


	<div class="container" style="border-bottom: solid 1px gray; border-top:solid 1px gray; margin-top:5%; margin-bottom:5%;">
  <div class="row">
    <div class="col-sm-7 offset-md-2">


	<img src="full2.png" class="img-fluid" alt="...">

	</div>


  </div>
</div>



	<style>
		.title,
		.sub-title {
			text-align: center;
			font-family: sans-serif;

			
		}

		.title {

			font-size: 200%;
		}




		.sub-title {
			font-size: 150%;
			margin-bottom: 5%;
		}

		.border-of-title-subtitle {
			border: solid 1px gray;
		}

		.brand {
			background-color: white;
		}

		.recomended {
			background-color: white;
			border-top: solid 1px gray;
			border-bottom: solid 1px gray;
			margin-top: 3%;
			padding-top: 1.5%;
			padding-bottom: 1.5%;
			box-shadow: 0px 4px lightgray;


			width: 100%;
			overflow: auto;
		}


		body {
			background-color: white;
			overflow-x: hidden;
		}

		.account{
			margin-top: 3%;
			padding: 1%;
			border: solid 1px gray;
		}
		body , html{
			height: 100%;
		}
	</style>
</body>

</html>