<!-- <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">


<style type="text/css">
	body{
	background-image: url('signin.gif');
	background-size: cover;
	font-family: roboto;
	color:#303030;
	overflow: hidden;
}

div{

	background-color: #DEDEDE;
	width: 70rem;
	height:45rem;
	position: relative;
	top:2.5rem;
	left:10rem;
}
input{
	width:69.6rem;
	font-size: 200%;
	position: relative;
	bottom: 1rem
}

@keyframes ex{

0%{transform: rotateY(1000deg);}

50%{position: relative;top: 100px;}

100%{position: relative;bottom: -100px;}

}

</style>

<div>
	<h1 style="	text-align: center;	padding-bottom: 10%;
">Welcome to Friends Book</h1>
	<form action = "login_check.php" method = "post">
	<h1 style="padding-left: 1%">Email</h1>
	<input type="text" name="email">
	<br>
	<br>
	<br>
	<br>

	<h1 style="padding-left: 1%">Password</h1>
	<input type="password" name="password">
	<button style="font-size: 5rem;font-family: roboto;background-color: #0087FF;color: white;
		box-shadow:0 9px 5px black;position: relative;left:36%;top:3rem;animation-name: ex;animation-duration: 5s;">Submit</button>
</form>
</div>


</body>
</html> -->



<!-- 



<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
</head>
<body>

<form action="login_check.php" method="post">

  <div class="cont">
    <div class="form sign-in">
      <h2>Sign In</h2>
      <label>

        <span>Email Address</span>
        <input type="email" name="email">
      </label>
      <label>
        <span>Password</span>
        <input type="password" name="password">
      </label>
      <button class="submit">Sign In</button>

      <p class="forgot-pass">Forgot Password ?</p>


    </div>
</form>






    <div class="sub-cont">
      <div class="img">
        <div class="img-text m-up">
          <h2>New here?</h2>
          <p>Sign up and discover great amount of new opportunities!</p>
        </div>
        <div class="img-text m-in">
          <h2>One of us?</h2>
          <p>If you already has an account, just sign in. We've missed you!</p>
        </div>
        <div class="img-btn">
          <span class="m-up">Sign Up</span>
          <span class="m-in">Sign In</span>
        </div>
      </div>
      <form action="signin_check.php" method="post">

      <div class="form sign-up">
        <h2>Sign Up</h2>
        <label>
          <span>Name</span>
          <input type="text" name="name">
        </label>
        <label>
          <span>Phone</span>
          <input type="number" name="phone">
        </label>
        <label>
          <span>Email</span>
          <input type="email" name="email">
        </label>
        <label>
          <span>Password</span>
          <input type="password" name="password">
        </label>
        <button class="submit">Sign Up Now</button>
      </div>
    </div>
  </div>
  </form>
<script type="text/javascript" src="script.js"></script>
</body>
</html>

 -->





<!DOCTYPE html>
<html>
<head>
  <title></title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>






<div class="alert-success w-100 h-100 pl-1 p-5 " >
      <form method="post" action="login_check.php">
  <div class="form-group">
    <label for="exampleInputEmail1" class="text-dark">Email address</label>
    <input type="email" class="form-control bg-dark text-white" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    <small id="emailHelp" class="form-text text-dark">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" class="text-dark">Password</label>
    <input type="password" class="form-control bg-dark text-white" id="exampleInputPassword1" name="password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-labe text-dark" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-outline-dark">Submit</button>
</form>

    </div>
    
  </div>
  
</div>


<style type="text/css">
  
html,body{
  height: 100%;
}

</style>
</body>
</html>