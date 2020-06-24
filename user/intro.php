

<html>
<head>

<?php session_start();
?>

<h6 style="visibility: hidden;display: none;">
<?php

include 'conn.php';

$sql1 = "SELECT `id`, `name`, `email`, `password`, `phone`,`time`, `active`, `banned` FROM `userdata` WHERE id = '".$_SESSION['id']."'";
$a = mysqli_query($conn, $sql1);
$row = mysqli_fetch_assoc($a);

if($_SESSION['id']>0 and $row['banned'] == "no"){
	header('Location: http://205.147.99.187/FriendsBook/user/home.php?');

}

?>
 
</h6>




    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>



/*body{


	background-image: url('index_image5.jpeg');
    object-fit: cover;
    background-size: cover;
    backdrop-filter: blur(0px);
    background-position: center;

}
*/

/* Style the video: 100% width and height to cover the entire window */
#myVideo {
    position: fixed;
    right: 0;
    bottom: 0;
    min-width: 100%;
    min-height: 100%;
        backdrop-filter: blur(0px);

}




img{	position:relative;position: absolute;top:20%;
}

.btn1{
    position: fixed;
    left:32%;
    top:450px;



    


}







.btn2{
    position: fixed;

    left:52.5%;
    top:450px;
    background: none;


}

</style>






<title></title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</head>
<body>

<video autoplay muted loop id="myVideo">
  <source src="index.mp4" type="video/mp4">
</video>



<img src="full2.png" class= "img2"style="width: 43%;left:26%;">

<a class = "btn1 btn btn-outline-dark btn-lg" href = "signin.php">Create A New Account</a>
<a class = "btn2 btn btn-dark btn-lg" href = "login.php">Already Have Account</a>










</body>
</html>