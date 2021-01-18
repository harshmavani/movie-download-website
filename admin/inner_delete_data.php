<?php
session_start();
include "check_login_sesstion.php";
include "config.php";

$sql = "SELECT * FROM movies_data WHERE id ='".$_GET['dataid']."'";
$query = mysqli_query($link,$sql);
$row = mysqli_fetch_assoc($query);	
$Date_Time = $row['date_time']; 
$Main_Image = $row['main_image']; 
$Ss_Images1 = $row['ss_images1']; 
$Ss_Images2 = $row['ss_images2']; 
$Ss_Images3 = $row['ss_images3']; 
$Ss_Images4 = $row['ss_images4']; 
$Ss_Images5 = $row['ss_images5']; 
$Ss_Images6 = $row['ss_images6']; 

// using unlink() function

unlink("photo/$Main_Image");
unlink("photo/$Ss_Images1");
unlink("photo/$Ss_Images2");
unlink("photo/$Ss_Images3");
unlink("photo/$Ss_Images4");
unlink("photo/$Ss_Images5");
unlink("photo/$Ss_Images6");


$delete = "DELETE FROM movies_data WHERE id ='".$_GET['dataid']."'";
$delete_query = mysqli_query($link,$delete);

if (mysqli_query($link,$delete)) {

	mysqli_query($link,"DELETE FROM movies_data_webseries_links WHERE date_time_wl ='$Date_Time'");
	mysqli_query($link,"DELETE FROM movies_data_webseries_watch_links WHERE date_time_wl ='$Date_Time'");
	
	$_SESSION['delete_message'] = "deleted Successfully.";
	header('Location:index.php');
	exit();		
}else {
	$_SESSION['delete_message_error'] = mysqli_error($link);
	header("Location:index.php");
	exit();
}

?>