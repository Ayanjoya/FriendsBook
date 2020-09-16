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



<script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
<script>
  window.OneSignal = window.OneSignal || [];
  OneSignal.push(function() {
    OneSignal.init({
      appId: "50c24858-9078-4176-804f-7c75c78140b5",
    });
  });
</script>



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
















<img src="logo.png"class="logo-af">

<img src="logo.png" style="width: 320px;"class="title">
<h2 class="mt-1 title" style="font-family: SFProDisplay-Regular, Helvetica, Arial, sans-serif;
    font-size: 28px;
    font-weight: normal;
    line-height: 32px;
    width: 500px;">Soclpie helps you connect and share <br> with the people in your life.</h2>


<div class="main">
	

<form action="login_check.php" method="post">
  <div class="form-group">

    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email Address" name = "email"style="padding:20px;font-size: 110%;">

  </div>
  <div class="form-group">

    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" style="padding:20px;font-size: 110%;" name="password">
  </div>

  <button type="submit" class="btn btn-primary btn-block">Login</button>
</form>

<a href="" style="text-align: center; display:block;margin-top:13px;"><h6>Forgotten Account?</h6></a>
<hr>
  <a type="submit"href="signin.php" class="btn btn-success btn-lg" style="background-color: #5FB82D; border: #5FB82D; margin:auto; display: block;margin-top:50px;">Create New Account</a>


</div>


<style type="text/css">
html,body{
	height: 100%;
	width: 100%;
	background-color: #F0F2F5;
	padding: 100px;
}

.logo-af{
	display: none;
	width: 320px;
}

.main{
	position: absolute;
	top:40%;
	left:65%;
	transform: translate(-50% , -50%);
	background-color: white;padding:20px;width:27%;border-radius: 10px;box-shadow: 0px 10px 20px;
}

@media only screen and (max-width: 1289px) {

.main{
	position: absolute;
	top:40%;
	left:70%;
	transform: translate(-50% , -50%);
}

}


@media only screen and (max-width: 1183px) {

.main{
	position: absolute;
	top:40%;
	left:80%;
	transform: translate(-50% , -50%);
}

}

@media only screen and (max-width: 1014px) {

.main{
	position: absolute;
	top:40%;
	left:80%;
	transform: translate(-50% , -50%);
}


}


@media only screen and (max-width: 1038px) {

.logo-af{
	display: block;
	position: absolute;
	transform: translate(-50%,-50%);
	bottom:70%;
	left:50%;
}

.title{
	display: none;
}

.main{
	position: absolute;
	top:50%;
	left:50%;
	transform: translate(-50% , -50%);
	width:50%;
}

}


@media only screen and (max-width: 599px) {

.title{
	display: none;
}

.main{
	position: absolute;
	top:50%;
	left:50%;
	transform: translate(-50% , -50%);
	width:70%;
}

}


@media only screen and (max-width: 374px) {

.title{
	display: none;
}

.main{
	position: absolute;
	top:50%;
	left:50%;
	transform: translate(-50% , -50%);
	width:90%;
}

}

@media only screen and (max-width: 311px) {

.title{
	display: none;
}

.main{
	position: absolute;
	top:50%;
	left:52.5%;
	transform: translate(-50% , -50%);
	width:100%;
	margin:auto;
	display: block;
}

.logo-af{
	width: 230px;
	display: block;
	position: absolute;
	transform: translate(-50%,-50%);
	bottom:75%;
	left:50%;

}

}

</style>
</body>
</html>