<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>

<?php session_start();include'menu.php';include'conn.php';?>








<div class="pt-0">
<div class="w-100 bg-dark pt-3">
	

<form  method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">

  <div class="form-group" style="display: inline-block;">

<input type="" class="form-control ml-3" id="exampleInputEmail1" aria-describedby="emailHelp" style="width:20%;" placeholder="id" name = "id1">

  </div>

  <button type="submit" class="btn btn-primary" style="position: relative;left:-10%;">GO</button>
</form>


</div>
</div>












<style type="text/css">
	
body,html{
	height: 100%;
}


</style>
</body>
</html>