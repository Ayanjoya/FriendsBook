<?php

if($row1['user_id'] == $_SESSION['id']){

?>

<a href="content.php?id=<?= $row1['id']?>">
<img src="more.png" style="width:20px;float:right;">
</a>


<?php }?>