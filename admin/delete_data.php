<?php

session_start();
include "check_login_sesstion.php";
include "config.php";


	$sql = "SELECT * FROM movies_data WHERE id ='".$_POST['dataid']."'";
	$query = mysqli_query($link,$sql);
	$row = mysqli_fetch_assoc($query);	
	$Main_Image = $row['main_image']; 
 		
 ?>	

<form method="POST">
	<div class="form-group">
		<center><div class="">Are You Sure You Want To Delete This Movie<img src="photo/<?php echo $Main_Image; ?>" alt="image" width="40" height="60" style="margin-left:10px; margin-right:10px;"></div></center>
	</div>
	<div class="modal-footer">
		<a href=inner_delete_data.php?dataid=<?php echo $_POST['dataid'] ?>><button type="button" class="btn btn-primary">Yes (Delete) </button></a>
		<button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
	</div>
</form> 