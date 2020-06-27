<!-- <?=$url;?> -->

<?PHP
 include'config.php';
?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>



<nav class="navbar navbar-expand-lg navbar navbar-dark bg-success border-bottom shadow-sm border-dark" style="background-color: #eec0c6;
background-image: linear-gradient(320deg, #eec0c6 30%, #7ee8fa 74%);
    



">


<img src="single.png" style="width: 60px;border-radius: 80%; height: auto;">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?=$url;?>profile_data.php?"style = "color: #000000;">Home <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?=$url;?>post.php?"style = "color: #000000;">Post</a>
      </li>

      <li class="nav-item dropdown">

        <a class="nav-link" href="<?=$url;?>profile.php?"style = "color: #000000;">Profile</a>
</li>



<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="home.php?" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"style = "color: #000000;">
          Friends
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item"href="<?=$url;?>veiw_friends.php?">Your Friends</a>
          <a class="dropdown-item"href="<?=$url;?>enrol_friends.php?">Enroll Friends</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?=$url;?>settings.php?">More...</a>


        </div>
      </li>



      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="<?=$url?>/user/home.php?" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"style = "color: #000000;">
          Account
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item"href="<?=$url;?>signin.php?">Register</a>
          <a class="dropdown-item"href="<?=$url;?>login.php?">LogIn</a>
          <a class="dropdown-item" href="<?=$url;?>logout.php?">Logout</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?=$url;?>settings.php?">More...</a>


        </div>
      </li>






      <li class="nav-item">
        <a class="nav-link" href="<?=$url;?>inbox.php?"style = "color: #000000;">Inbox</a>
      </li>
        </div>
      </li>
    </ul>


        </div>






<style type="text/css">
  
.sea{
  background-color: #00B1FF;
  border-color: #00B1FF;
  color:white;
}

a{
  font-size: 110%;
}

</style>

  </div>
</nav>















<!-- <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sider Menu Bar CSS</title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <input type="checkbox" id="check">
    <label for="check">
      <i class="fas fa-bars" id="btn"></i>
      <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
    <header>My App</header>
  <ul>
<li><a href="#"><i class="fas fa-qrcode"></i>Dashboard</a></li>
<li><a href="#"><i class="fas fa-link"></i>Shortcuts</a></li>
<li><a href="#"><i class="fas fa-stream"></i>Overview</a></li>
<li><a href="#"><i class="fas fa-calendar-week"></i>Events</a></li>
<li><a href="#"><i class="far fa-question-circle"></i>About</a></li>
<li><a href="#"><i class="fas fa-sliders-h"></i>Services</a></li>
<li><a href="#"><i class="far fa-envelope"></i>Contact</a></li>
</ul>
</div>
<section></section>
  </body>
</html>


<style type="text/css">
  @import url('https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500');
*{
  padding: 0;
  margin: 0;
  list-style: none;
  text-decoration: none;
}
body {
  font-family: 'Roboto', sans-serif;
}
.sidebar {
  position: fixed;
  left: -250px;
  width: 250px;
  height: 100%;
  background: #042331;
  transition: all .5s ease;
}
.sidebar header {
  font-size: 22px;
  color: white;
  line-height: 70px;
  text-align: center;
  background: #063146;
  user-select: none;
}
.sidebar ul a{
  display: block;
  height: 100%;
  width: 100%;
  line-height: 65px;
  font-size: 20px;
  color: white;
  padding-left: 40px;
  box-sizing: border-box;
  border-bottom: 1px solid black;
  border-top: 1px solid rgba(255,255,255,.1);
  transition: .4s;
}
ul li:hover a{
  padding-left: 50px;
}
.sidebar ul a i{
  margin-right: 16px;
}
#check{
  display: none;
}
label #btn,label #cancel{
  position: absolute;
  background: #042331;
  border-radius: 3px;
  cursor: pointer;
}
label #btn{
  left: 40px;
  top: 25px;
  font-size: 35px;
  color: white;
  padding: 6px 12px;
  transition: all .5s;
}
label #cancel{
  z-index: 1111;
  left: -195px;
  top: 17px;
  font-size: 30px;
  color: #0a5275;
  padding: 4px 9px;
  transition: all .5s ease;
}
#check:checked ~ .sidebar{
  left: 0;
}
#check:checked ~ label #btn{
  left: 250px;
  opacity: 0;
  pointer-events: none;
}
#check:checked ~ label #cancel{
  left: 195px;
}
#check:checked ~ section{
  margin-left: 250px;
}
section{
  background: url(bg.jpeg) no-repeat;
  background-position: center;
  background-size: cover;
  height: 100vh;
  transition: all .5s;
}

</style> -->