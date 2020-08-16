<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5GMFFWW');</script>
<!-- End Google Tag Manager -->
</head>
<body>

	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5GMFFWW"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

  <meta name="viewport" content="width=device-width, initial-scale=1.0">


<style type="text/css">
	
	body{

	font-family: roboto;
	color:#303030;
}

</style>


<h6 style="visibility: hidden; display: none;">
<?php





session_start();

include 'conn.php';

$sql = "SELECT `id`, `name`, `email`, `password`, `phone`, `time`, `active`, `banned`  FROM `userdata` WHERE email = '".$_POST['email']."' and password = '".$_POST['password']."'";


$a = mysqli_query($conn, $sql);


$row = mysqli_fetch_assoc($a);

if($row['id'] and $row['banned'] == "no"){
	$_SESSION['name'] = $row['name'];
	$_SESSION['email'] = $row['email'];
	$_SESSION['password'] = $row['password'];
	$_SESSION['phone'] = $row['phone'];
	$_SESSION['id'] = $row['id'];
	$_SESSION['my_id'] = $row['id'];
	$sql = "UPDATE `userdata` SET `active` = 'yes' WHERE id = '".$_SESSION['id']."'";


	$a = mysqli_query($conn, $sql);
	header('Location: http://soclpie.com/profile_data.php');




}

else{








echo '

<script type="text/javascript">
	

alert("Sorry sir but could not found your email or password please check and try Thank You");


window.location.href = "http://soclpie.com/login.php";

// Simulate an HTTP redirect:
window.location.replace("http://soclpie.com/login.php");

</script>


';






}
?>
</h6>





</body>
</html>