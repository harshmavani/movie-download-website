	<?php
    session_start();
	include "config.php"; 

	$delete = "DELETE FROM shortaner_data_movie WHERE id ='".$_GET['dataid']."'";
	$delete_query = mysqli_query($link,$delete);

	if (mysqli_query($link,$delete)) {
		$_SESSION['link_delete_message'] = "Deleted Successfully.";
		header('Location:shortner_link.php');
		exit();		
	}else {
        $_SESSION['link_delete_message_error'] = mysqli_error($link);
		header("Location:shortner_link.php");
        exit();
	}
?>