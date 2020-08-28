<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>

<?php session_start();include'menu.php';include'conn.php';?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {





$sql11 = "INSERT INTO `event`(`icon`, `title`, `text`, `more`, `rule`, `price`, `winning`, `till-text`, `till-time`, `delete_on`) VALUES ('../single.png' , '".$_POST['title']."' , '".$_POST['text']."' , '".$_POST['more']."' , '".$_POST['rules']."' , '".$_POST['prices']."' , '".$_POST['win']."' , '".$_POST['till_w']."' , '".$_POST['till_t']."' , '".$_POST['delete']."')";
$a1 = mysqli_query($conn, $sql11);


echo $sql11;
echo $conn;

?>  

<!-- <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Successfull!</strong> added succesfully.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div> -->



<?php } ?>







<form class="p-5" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name = "title">

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Text</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name = "text">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">More</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name = "more">
  </div>

    <div class="form-group">
    <label for="exampleInputPassword1">Rules</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name = "rules">
  </div>

    <div class="form-group">
    <label for="exampleInputPassword1">prices</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name = "prices">
  </div>


    <div class="form-group">
    <label for="exampleInputPassword1">how to win</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name = "win">
  </div>


    <div class="form-group">
    <label for="exampleInputPassword1">till in words</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name = "till_w">
  </div>

      <div class="form-group">
    <label for="exampleInputPassword1">till in time</label>
    <input type="date" class="form-control" id="exampleInputPassword1" name = "till_t">
  </div>

        <div class="form-group">
    <label for="exampleInputPassword1">delete on</label>
    <input type="date" class="form-control" id="exampleInputPassword1" name = "delete">
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>
















<style type="text/css">
  
body,html{
  height: 100%;
}


</style>
</body>
</html>