<!-- <?=$url;?> -->
<?PHP
 include'config.php';
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">SoclPie</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?=$url;?>profile_data.php?">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=$url;?>profile.php?">Profile</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Stunends
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?=$url;?>blog.php?">Blog</a>
          <a class="dropdown-item" href="<?=$url;?>note.php?">Notes</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=$url;?>inbox.php?">Inbox</a>
      </li>
    </ul>
    <a class="btn btn-outline-primary mobile pl-3 pr-3" href="<?=$url;?>post.php?" style = "font-size: 130%;">Post</a>

  </div>
</nav>