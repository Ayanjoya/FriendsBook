<!DOCTYPE html>
<html lang="en">
<head>
<?php session_start();
	?>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5GMFFWW');</script>
<!-- End Google Tag Manager -->
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
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5GMFFWW"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


<?php include'intro_menu.php';?>
<img src="images/image1.jpeg" style = "width:100%; height:75%; background-position: center; filter: blur(3px);">
	
<div class="bg-text">
	
  <h2>Welcome</h2>
  <h1 style="font-size:50px">To Soclpie</h1>
  <p>The Social Network</p>
</div>




</div>


<style>
.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 500px;
  padding: 20px;
   text-align: center;


}
html,body{
	  font-family: Arial, Helvetica, sans-serif;

	height:100%;
}

@media only screen and (max-width: 600px) {
  .bg-text {
      width: 280px;

  }
}


</style>
</body>
</html>