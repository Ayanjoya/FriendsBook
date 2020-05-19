<?PHP
 include'config.php';
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>



<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">


  <a class="navbar-brand"href="<?=$url?>/user/about.php?"><span class="badge badge-light">FriendsBook</span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?=$url?>/user/home.php?"style = "color: #F2F2F2;">Home <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?=$url?>/user/post.php?"style = "color: #F2F2F2;">Post</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="<?=$url?>/user/home.php?" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"style = "color: #F2F2F2;">
          Profiles
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item"href="<?=$url?>/user/profile.php?">My Profile</a>
          <a class="dropdown-item"href="<?=$url?>/user/edit.php?">Edit Profile</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?=$url?>/user/settings.php?">More...</a>


        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="<?=$url?>/user/home.php?" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"style = "color: #F2F2F2;">
          Account
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item"href="<?=$url?>/user/signin.php?">Register</a>
          <a class="dropdown-item"href="<?=$url?>/user/login.php?">LogIn</a>
          <a class="dropdown-item" href="<?=$url?>/user/logout.php?">Logout</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?=$url?>/user/settings.php?">More...</a>


        </div>
      </li>






      <li class="nav-item">
        <a class="nav-link" href="<?=$url?>/user/inbox.php?"style = "color: #F2F2F2;">Inbox</a>
      </li>
        </div>
      </li>
    </ul>







    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" style="width: 20rem;">
      <button class="btn btn-outline-success my-2 my-sm-0 sea" type="submit">Search</button>
    </form>
  </div>
</nav>