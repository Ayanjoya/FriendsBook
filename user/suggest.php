<div class="sug m-auto">

<h4>Suggested For You</h4>


<?php

//for my data
    $my_data = "SELECT `id`, `name`, `email`, `password`, `phone`, `time`, `active`, `banned`, `school`, `class`, `sec` FROM `userdata` WHERE id = '".$_SESSION['id']."'";
    $my_query = mysqli_query($conn, $my_data);
    $my_out = mysqli_fetch_assoc($my_query);


    $people_data = "SELECT `id`, `name`, `email`, `password`, `phone`, `time`, `active`, `banned`, `school`, `class`, `sec` FROM `userdata` WHERE school = '".$my_out['school']."'";
    $people_query = mysqli_query($conn, $people_data);
   
       while($people_out = mysqli_fetch_assoc($people_query)){

    $profile_data = "SELECT `id`, `user_id`, `name`, `email`, `gender`, `bio`, `dob`, `address`, `img`, `back_cover` FROM `profile` WHERE user_id = '".$people_out['id']."' order by id desc";
    $profile_query = mysqli_query($conn, $profile_data);
    $profile_out = mysqli_fetch_assoc($profile_query)


?>
<a href="veiw_profile.php?id=<?php echo $people_out['id']?>" class="text-dark">
<div class="media" style="border:solid 1px lightgray; border-left: 0px; border-right: 0px; padding-top:20px; padding-bottom:20px;">
  <img src="<?= $profile_out['img']?>" class="mr-3" alt="..." style = "width:60px;height:60px;object-fit: cover; border-radius: 100%;">
  <div class="media-body">
    <h6 class="mt-0"><?= $profile_out['name'];?></h6>

<h6 style="font-size: 90%; font-weight: 400;" class="text-muted"><?= $profile_out['bio'];?></h6>

  </div>
</div>

<?php }?>

</div>
</a>

<style type="text/css">
	
.sug{
	position: fixed;
	background: white;
	padding:1%;	
	height: 700px;
	width:25%;
	left:72.5%;
	border:solid 1px lightgray;
	overflow: auto;
}


.media:hover{
  box-shadow: 0px 1px gray;
}



</style>