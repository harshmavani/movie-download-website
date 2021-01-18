<?php

session_start();
include "check_login_sesstion.php";
include "config.php";

$sql = "SELECT * FROM movies_data WHERE id ='".$_GET['dataid']."'";
$query = mysqli_query($link,$sql);

if (!$query){
	die('Invalid query: '.mysqli_error($link));
}
$row=mysqli_fetch_assoc($query);	

date_default_timezone_set('Asia/Kolkata');

$Latest_Released_c = $row['latest_released']; 
$Dual_Audio_c = $row['dual_audio'];
$Multi_Audio_c = $row['multi_audio']; 
$English_L_c = $row['english_l'];
$Hindi_L_c = $row['hindi_l'];
$Adult_Movie_c = $row['adult_movies']; 
$Asian_Movie_c = $row['asian_movies']; 
$English_Movie_c = $row['english_movies']; 
$Hacking_Movie_c = $row['hacking_movies']; 
$Movie_c_480p = $row['480p_movies']; 
$Movie_c_720p = $row['720p_movies']; 
$Movie_c_1080p = $row['1080p_movies']; 
$Ultra_HD_c_4K = $row['4k_ultra_hd']; 
$Movie_c_300mb = $row['300mb_movies'];
$Movie_c_500mb = $row['500mb_movies']; 
$Movie_c_700mb = $row['700mb_movies']; 
$Movie_c_1gb = $row['1gb_movies']; 
$G_Action = $row['action_movies'];
$G_Adventure = $row['adventure_movies'];
$G_Animated = $row['animated_movies'];
$G_Comedy = $row['comedy_movies'];
$G_Crime = $row['crime_movies'];
$G_Fantasy = $row['fantasy_movies'];
$G_Horror = $row['horror_movies'];
$G_Mystery = $row['mystery_movies'];
$G_Romance = $row['romance_movies'];
$G_Sci_fi = $row['sci_fi_movies'];
$G_Thriller = $row['thriller_movies'];

$Movie_Name = $row['movie_name']; 
$Movie_Catagory = $row['movie_catagory']; 
$Movie_Year = $row['year']; 
$Movie_Links_480p = $row['480p_links']; 
$Movie_Links_720p = $row['720p_links'];
$Movie_Links_1080p = $row['1080p_links'];
$Movie_Links_480p_2 = $row['480p_links_2'];
$Movie_Links_720p_2 = $row['720p_links_2'];
$Movie_Links_1080p_2 = $row['1080p_links_2'];
$Movie_Links_480p_3 = $row['480p_links_3'];
$Movie_Links_720p_3 = $row['720p_links_3'];
$Movie_Links_1080p_3 = $row['1080p_links_3'];
$Movie_Links_480p_4 = $row['480p_links_4'];
$Movie_Links_720p_4 = $row['720p_links_4'];
$Movie_Links_1080p_4 = $row['1080p_links_4'];
$Movie_Links_480p_Watch = $row['480p_watch_links'];
$Movie_Links_720p_Watch = $row['720p_watch_links'];
$Movie_Links_1080p_Watch = $row['1080p_watch_links'];
$Movie_Size_480p = $row['480p_m_size'];
$Movie_Size_720p = $row['720p_m_size'];
$Movie_Size_1080p = $row['1080p_m_size'];
$Movie_Description = $row['movie_description'];
$Movie_ShortName = $row['movie_shortname'];
$Movie_IMDb_Rating = $row['movie_imdb'];
$Movie_Director = $row['movie_director'];
$Movie_Stars = $row['movie_stars'];

$Movie_Image = $row['main_image'];

$Ss_Images1 = $row['ss_images1']; 
$Ss_Images2 = $row['ss_images2']; 
$Ss_Images3 = $row['ss_images3']; 
$Ss_Images4 = $row['ss_images4']; 
$Ss_Images5 = $row['ss_images5'];
$Ss_Images6 = $row['ss_images6']; 

$Date_Time   = $row['date_time']; 


if ($Movie_Catagory == "Web Series") {
	$Current_Date = $Date_Time;	
}else{
	$Current_Date = date('d-m-Y g:i A');	
}


if ($Movie_Catagory == "Web Series") {

    $sql_web_l = "SELECT * FROM movies_data_webseries_links WHERE date_time_wl ='$Date_Time'";
    $query_web_l = mysqli_query($link,$sql_web_l);

    if (!$query_web_l){
     die('Invalid query: '.mysqli_error($link));
 }
 $row_web_l=mysqli_fetch_assoc($query_web_l);

 $W_480p_Links_E1 = $row_web_l['w_480p_links_e1'];
 $W_720p_Links_E1 = $row_web_l['w_720p_links_e1'];
 $W_1080p_Links_E1 = $row_web_l['w_1080p_links_e1'];
 $W_480p_Links_E2 = $row_web_l['w_480p_links_e2'];
 $W_720p_Links_E2 = $row_web_l['w_720p_links_e2'];
 $W_1080p_Links_E2 = $row_web_l['w_1080p_links_e2'];    
 $W_480p_Links_E3 = $row_web_l['w_480p_links_e3'];
 $W_720p_Links_E3 = $row_web_l['w_720p_links_e3'];
 $W_1080p_Links_E3 = $row_web_l['w_1080p_links_e3'];    
 $W_480p_Links_E4 = $row_web_l['w_480p_links_e4'];
 $W_720p_Links_E4 = $row_web_l['w_720p_links_e4'];
 $W_1080p_Links_E4 = $row_web_l['w_1080p_links_e4'];    
 $W_480p_Links_E5 = $row_web_l['w_480p_links_e5'];
 $W_720p_Links_E5 = $row_web_l['w_720p_links_e5'];
 $W_1080p_Links_E5 = $row_web_l['w_1080p_links_e5'];    
 $W_480p_Links_E6 = $row_web_l['w_480p_links_e6'];
 $W_720p_Links_E6 = $row_web_l['w_720p_links_e6'];
 $W_1080p_Links_E6 = $row_web_l['w_1080p_links_e6'];    
 $W_480p_Links_E7 = $row_web_l['w_480p_links_e7'];
 $W_720p_Links_E7 = $row_web_l['w_720p_links_e7'];
 $W_1080p_Links_E7 = $row_web_l['w_1080p_links_e7'];    
 $W_480p_Links_E8 = $row_web_l['w_480p_links_e8'];
 $W_720p_Links_E8 = $row_web_l['w_720p_links_e8'];
 $W_1080p_Links_E8 = $row_web_l['w_1080p_links_e8'];    
 $W_480p_Links_E9 = $row_web_l['w_480p_links_e9'];
 $W_720p_Links_E9 = $row_web_l['w_720p_links_e9'];
 $W_1080p_Links_E9 = $row_web_l['w_1080p_links_e9'];    
 $W_480p_Links_E10 = $row_web_l['w_480p_links_e10'];
 $W_720p_Links_E10 = $row_web_l['w_720p_links_e10'];
 $W_1080p_Links_E10 = $row_web_l['w_1080p_links_e10'];    
 $W_480p_Links_E11 = $row_web_l['w_480p_links_e11'];
 $W_720p_Links_E11 = $row_web_l['w_720p_links_e11'];
 $W_1080p_Links_E11 = $row_web_l['w_1080p_links_e11'];    
 $W_480p_Links_E12 = $row_web_l['w_480p_links_e12'];
 $W_720p_Links_E12 = $row_web_l['w_720p_links_e12'];
 $W_1080p_Links_E12 = $row_web_l['w_1080p_links_e12'];    
 $W_480p_Links_E13 = $row_web_l['w_480p_links_e13'];
 $W_720p_Links_E13 = $row_web_l['w_720p_links_e13'];
 $W_1080p_Links_E13 = $row_web_l['w_1080p_links_e13'];    
 $W_480p_Links_E14 = $row_web_l['w_480p_links_e14'];
 $W_720p_Links_E14 = $row_web_l['w_720p_links_e14'];
 $W_1080p_Links_E14 = $row_web_l['w_1080p_links_e14'];    
 $W_480p_Links_E15 = $row_web_l['w_480p_links_e15'];
 $W_720p_Links_E15 = $row_web_l['w_720p_links_e15'];
 $W_1080p_Links_E15 = $row_web_l['w_1080p_links_e15'];   
 $W_480p_Links_E16 = $row_web_l['w_480p_links_e16'];
 $W_720p_Links_E16 = $row_web_l['w_720p_links_e16'];
 $W_1080p_Links_E16 = $row_web_l['w_1080p_links_e16'];   
 $W_480p_Links_E17 = $row_web_l['w_480p_links_e17'];
 $W_720p_Links_E17 = $row_web_l['w_720p_links_e17'];
 $W_1080p_Links_E17 = $row_web_l['w_1080p_links_e17'];    
 $W_480p_Links_E18 = $row_web_l['w_480p_links_e18'];
 $W_720p_Links_E18 = $row_web_l['w_720p_links_e18'];
 $W_1080p_Links_E18 = $row_web_l['w_1080p_links_e18'];    
 $W_480p_Links_E19 = $row_web_l['w_480p_links_e19'];
 $W_720p_Links_E19 = $row_web_l['w_720p_links_e19'];
 $W_1080p_Links_E19 = $row_web_l['w_1080p_links_e19'];    
 $W_480p_Links_E20 = $row_web_l['w_480p_links_e20'];
 $W_720p_Links_E20 = $row_web_l['w_720p_links_e20'];
 $W_1080p_Links_E20 = $row_web_l['w_1080p_links_e20'];    
 $W_480p_Links_E21 = $row_web_l['w_480p_links_e21'];
 $W_720p_Links_E21 = $row_web_l['w_720p_links_e21'];
 $W_1080p_Links_E21 = $row_web_l['w_1080p_links_e21'];    
 $W_480p_Links_E22 = $row_web_l['w_480p_links_e22'];
 $W_720p_Links_E22 = $row_web_l['w_720p_links_e22'];
 $W_1080p_Links_E22 = $row_web_l['w_1080p_links_e22'];    
 $W_480p_Links_E23 = $row_web_l['w_480p_links_e23'];
 $W_720p_Links_E23 = $row_web_l['w_720p_links_e23'];
 $W_1080p_Links_E23 = $row_web_l['w_1080p_links_e23'];    
 $W_480p_Links_E24 = $row_web_l['w_480p_links_e24'];
 $W_720p_Links_E24 = $row_web_l['w_720p_links_e24'];
 $W_1080p_Links_E24 = $row_web_l['w_1080p_links_e24'];    
 $W_480p_Links_E25 = $row_web_l['w_480p_links_e25'];
 $W_720p_Links_E25 = $row_web_l['w_720p_links_e25'];
 $W_1080p_Links_E25 = $row_web_l['w_1080p_links_e25'];    
 $W_480p_Links_E26 = $row_web_l['w_480p_links_e26'];
 $W_720p_Links_E26 = $row_web_l['w_720p_links_e26'];
 $W_1080p_Links_E26 = $row_web_l['w_1080p_links_e26'];    
 $W_480p_Links_E27 = $row_web_l['w_480p_links_e27'];
 $W_720p_Links_E27 = $row_web_l['w_720p_links_e27'];
 $W_1080p_Links_E27 = $row_web_l['w_1080p_links_e27'];    
 $W_480p_Links_E28 = $row_web_l['w_480p_links_e28'];
 $W_720p_Links_E28 = $row_web_l['w_720p_links_e28'];
 $W_1080p_Links_E28 = $row_web_l['w_1080p_links_e28'];    
 $W_480p_Links_E29 = $row_web_l['w_480p_links_e29'];
 $W_720p_Links_E29 = $row_web_l['w_720p_links_e29'];
 $W_1080p_Links_E29 = $row_web_l['w_1080p_links_e29'];    
 $W_480p_Links_E30 = $row_web_l['w_480p_links_e30'];
 $W_720p_Links_E30 = $row_web_l['w_720p_links_e30'];
 $W_1080p_Links_E30 = $row_web_l['w_1080p_links_e30'];



 $sql_web_w_l = "SELECT * FROM movies_data_webseries_watch_links WHERE date_time_wl ='$Date_Time'";
 $query_web_w_l = mysqli_query($link,$sql_web_w_l);

 if (!$query_web_w_l){
     die('Invalid query: '.mysqli_error($link));
 }
 $row_web_w_l=mysqli_fetch_assoc($query_web_w_l);


 $W_480p_Watch_Links_E1  =  $row_web_w_l['w_480p_links_e1'];
 $W_720p_Watch_Links_E1  =  $row_web_w_l['w_720p_links_e1'];
 $W_1080p_Watch_Links_E1  =  $row_web_w_l['w_1080p_links_e1'];
 $W_480p_Watch_Links_E2 =  $row_web_w_l['w_480p_links_e2'];
 $W_720p_Watch_Links_E2 =  $row_web_w_l['w_720p_links_e2'];
 $W_1080p_Watch_Links_E2 =  $row_web_w_l['w_1080p_links_e2'];    
 $W_480p_Watch_Links_E3 =  $row_web_w_l['w_480p_links_e3'];
 $W_720p_Watch_Links_E3 =  $row_web_w_l['w_720p_links_e3'];
 $W_1080p_Watch_Links_E3 =  $row_web_w_l['w_1080p_links_e3'];    
 $W_480p_Watch_Links_E4 =  $row_web_w_l['w_480p_links_e4'];
 $W_720p_Watch_Links_E4 =  $row_web_w_l['w_720p_links_e4'];
 $W_1080p_Watch_Links_E4 =  $row_web_w_l['w_1080p_links_e4'];    
 $W_480p_Watch_Links_E5 =  $row_web_w_l['w_480p_links_e5'];
 $W_720p_Watch_Links_E5 =  $row_web_w_l['w_720p_links_e5'];
 $W_1080p_Watch_Links_E5 =  $row_web_w_l['w_1080p_links_e5'];    
 $W_480p_Watch_Links_E6 =  $row_web_w_l['w_480p_links_e6'];
 $W_720p_Watch_Links_E6 =  $row_web_w_l['w_720p_links_e6'];
 $W_1080p_Watch_Links_E6 =  $row_web_w_l['w_1080p_links_e6'];    
 $W_480p_Watch_Links_E7 =  $row_web_w_l['w_480p_links_e7'];
 $W_720p_Watch_Links_E7 =  $row_web_w_l['w_720p_links_e7'];
 $W_1080p_Watch_Links_E7 =  $row_web_w_l['w_1080p_links_e7'];    
 $W_480p_Watch_Links_E8 =  $row_web_w_l['w_480p_links_e8'];
 $W_720p_Watch_Links_E8 =  $row_web_w_l['w_720p_links_e8'];
 $W_1080p_Watch_Links_E8 =  $row_web_w_l['w_1080p_links_e8'];    
 $W_480p_Watch_Links_E9 =  $row_web_w_l['w_480p_links_e9'];
 $W_720p_Watch_Links_E9 =  $row_web_w_l['w_720p_links_e9'];
 $W_1080p_Watch_Links_E9 =  $row_web_w_l['w_1080p_links_e9'];    
 $W_480p_Watch_Links_E10 =  $row_web_w_l['w_480p_links_e10'];
 $W_720p_Watch_Links_E10 =  $row_web_w_l['w_720p_links_e10'];
 $W_1080p_Watch_Links_E10 =  $row_web_w_l['w_1080p_links_e10'];    
 $W_480p_Watch_Links_E11 =  $row_web_w_l['w_480p_links_e11'];
 $W_720p_Watch_Links_E11 =  $row_web_w_l['w_720p_links_e11'];
 $W_1080p_Watch_Links_E11 =  $row_web_w_l['w_1080p_links_e11'];    
 $W_480p_Watch_Links_E12 =  $row_web_w_l['w_480p_links_e12'];
 $W_720p_Watch_Links_E12 =  $row_web_w_l['w_720p_links_e12'];
 $W_1080p_Watch_Links_E12 =  $row_web_w_l['w_1080p_links_e12'];    
 $W_480p_Watch_Links_E13 =  $row_web_w_l['w_480p_links_e13'];
 $W_720p_Watch_Links_E13 =  $row_web_w_l['w_720p_links_e13'];
 $W_1080p_Watch_Links_E13 =  $row_web_w_l['w_1080p_links_e13'];    
 $W_480p_Watch_Links_E14 =  $row_web_w_l['w_480p_links_e14'];
 $W_720p_Watch_Links_E14 =  $row_web_w_l['w_720p_links_e14'];
 $W_1080p_Watch_Links_E14 =  $row_web_w_l['w_1080p_links_e14'];    
 $W_480p_Watch_Links_E15 =  $row_web_w_l['w_480p_links_e15'];
 $W_720p_Watch_Links_E15 =  $row_web_w_l['w_720p_links_e15'];
 $W_1080p_Watch_Links_E15 =  $row_web_w_l['w_1080p_links_e15'];    
 $W_480p_Watch_Links_E16 =  $row_web_w_l['w_480p_links_e16'];
 $W_720p_Watch_Links_E16 =  $row_web_w_l['w_720p_links_e16'];
 $W_1080p_Watch_Links_E16 =  $row_web_w_l['w_1080p_links_e16'];    
 $W_480p_Watch_Links_E17 =  $row_web_w_l['w_480p_links_e17'];
 $W_720p_Watch_Links_E17 =  $row_web_w_l['w_720p_links_e17'];
 $W_1080p_Watch_Links_E17 =  $row_web_w_l['w_1080p_links_e17'];    
 $W_480p_Watch_Links_E18 =  $row_web_w_l['w_480p_links_e18'];
 $W_720p_Watch_Links_E18 =  $row_web_w_l['w_720p_links_e18'];
 $W_1080p_Watch_Links_E18 =  $row_web_w_l['w_1080p_links_e18'];    
 $W_480p_Watch_Links_E19 =  $row_web_w_l['w_480p_links_e19'];
 $W_720p_Watch_Links_E19 =  $row_web_w_l['w_720p_links_e19'];
 $W_1080p_Watch_Links_E19 = $row_web_w_l['w_1080p_links_e19'];    
 $W_480p_Watch_Links_E20 =  $row_web_w_l['w_480p_links_e20'];
 $W_720p_Watch_Links_E20 =  $row_web_w_l['w_720p_links_e20'];
 $W_1080p_Watch_Links_E20 =  $row_web_w_l['w_1080p_links_e20'];    
 $W_480p_Watch_Links_E21 =  $row_web_w_l['w_480p_links_e21'];
 $W_720p_Watch_Links_E21 =  $row_web_w_l['w_720p_links_e21'];
 $W_1080p_Watch_Links_E21 =  $row_web_w_l['w_1080p_links_e21'];    
 $W_480p_Watch_Links_E22 =  $row_web_w_l['w_480p_links_e22'];
 $W_720p_Watch_Links_E22 =  $row_web_w_l['w_720p_links_e22'];
 $W_1080p_Watch_Links_E22 =  $row_web_w_l['w_1080p_links_e22'];    
 $W_480p_Watch_Links_E23 =  $row_web_w_l['w_480p_links_e23'];
 $W_720p_Watch_Links_E23 =  $row_web_w_l['w_720p_links_e23'];
 $W_1080p_Watch_Links_E23 =  $row_web_w_l['w_1080p_links_e23'];    
 $W_480p_Watch_Links_E24 =  $row_web_w_l['w_480p_links_e24'];
 $W_720p_Watch_Links_E24 =  $row_web_w_l['w_720p_links_e24'];
 $W_1080p_Watch_Links_E24 =  $row_web_w_l['w_1080p_links_e24'];    
 $W_480p_Watch_Links_E25 =  $row_web_w_l['w_480p_links_e25'];
 $W_720p_Watch_Links_E25 =  $row_web_w_l['w_720p_links_e25'];
 $W_1080p_Watch_Links_E25 =  $row_web_w_l['w_1080p_links_e25'];    
 $W_480p_Watch_Links_E26 =  $row_web_w_l['w_480p_links_e26'];
 $W_720p_Watch_Links_E26 =  $row_web_w_l['w_720p_links_e26'];
 $W_1080p_Watch_Links_E26 =  $row_web_w_l['w_1080p_links_e26'];    
 $W_480p_Watch_Links_E27 =  $row_web_w_l['w_480p_links_e27'];
 $W_720p_Watch_Links_E27 =  $row_web_w_l['w_720p_links_e27'];
 $W_1080p_Watch_Links_E27 =  $row_web_w_l['w_1080p_links_e27'];    
 $W_480p_Watch_Links_E28 =  $row_web_w_l['w_480p_links_e28'];
 $W_720p_Watch_Links_E28 =  $row_web_w_l['w_720p_links_e28'];
 $W_1080p_Watch_Links_E28 =  $row_web_w_l['w_1080p_links_e28'];    
 $W_480p_Watch_Links_E29 =  $row_web_w_l['w_480p_links_e29'];
 $W_720p_Watch_Links_E29 =  $row_web_w_l['w_720p_links_e29'];
 $W_1080p_Watch_Links_E29 =  $row_web_w_l['w_1080p_links_e29'];    
 $W_480p_Watch_Links_E30 =  $row_web_w_l['w_480p_links_e30'];
 $W_720p_Watch_Links_E30 =  $row_web_w_l['w_720p_links_e30'];
 $W_1080p_Watch_Links_E30 =  $row_web_w_l['w_1080p_links_e30'];

}

if(isset($_POST['edit_data'])){

	$Edit_Latest_Released_c = $_POST['Edit_Latest_Released_c'];
	$Edit_Dual_Audio_c = $_POST['Edit_Dual_Audio_c'];
	$Edit_Multi_Audio_c = $_POST['Edit_Multi_Audio_c'];
	$Edit_English_L_c = $_POST['Edit_English_L_c'];
	$Edit_Hindi_L_c = $_POST['Edit_Hindi_L_c'];
	$Edit_Adult_Movie_c = $_POST['Edit_Adult_Movie_c'];
	$Edit_Asian_Movie_c = $_POST['Edit_Asian_Movie_c'];
	$Edit_English_Movie_c = $_POST['Edit_English_Movie_c'];
	$Edit_Hacking_Movie_c = $_POST['Edit_Hacking_Movie_c'];
	$Edit_Movie_c_480p = $_POST['Edit_480p_Movie_c'];
	$Edit_Movie_c_720p = $_POST['Edit_720p_Movie_c'];
	$Edit_Movie_c_1080p = $_POST['Edit_1080p_Movie_c'];
	$Edit_Ultra_HD_c_4K = $_POST['Edit_4K_Ultra_HD_c'];
	$Edit_Movie_c_300mb = $_POST['Edit_300mb_Movie_c'];
	$Edit_Movie_c_500mb = $_POST['Edit_500mb_Movie_c'];
	$Edit_Movie_c_700mb = $_POST['Edit_700mb_Movie_c'];
	$Edit_Movie_c_1gb = $_POST['Edit_1gb_Movie_c'];
	$Edit_G_Action = $_POST['Edit_G_Action'];
	$Edit_G_Adventure = $_POST['Edit_G_Adventure'];
	$Edit_G_Animated = $_POST['Edit_G_Animated'];
	$Edit_G_Comedy = $_POST['Edit_G_Comedy'];
	$Edit_G_Crime = $_POST['Edit_G_Crime'];
	$Edit_G_Fantasy = $_POST['Edit_G_Fantasy'];
	$Edit_G_Horror = $_POST['Edit_G_Horror'];
	$Edit_G_Mystery = $_POST['Edit_G_Mystery'];
	$Edit_G_Romance = $_POST['Edit_G_Romance'];
	$Edit_G_Sci_fi = $_POST['Edit_G_Sci-fi'];
	$Edit_G_Thriller = $_POST['Edit_G_Thriller'];

	$Edit_Movie_Name = $_POST['Edit_Movie_Name'];
	$Edit_Movie_Catagory = $_POST['Edit_Movie_Catagory'];
	$Edit_Movie_Year = $_POST['Edit_Movie_Year'];
	$Edit_Movie_Links_480p = $_POST['Edit_Movie_Links_480p'];
	$Edit_Movie_Links_720p = $_POST['Edit_Movie_Links_720p'];
	$Edit_Movie_Links_1080p = $_POST['Edit_Movie_Links_1080p'];
    $Edit_Movie_Links_480p_2 = $_POST['Edit_Movie_Links_480p_2'];
    $Edit_Movie_Links_720p_2 = $_POST['Edit_Movie_Links_720p_2'];
    $Edit_Movie_Links_1080p_2 = $_POST['Edit_Movie_Links_1080p_2'];
    $Edit_Movie_Links_480p_3 = $_POST['Edit_Movie_Links_480p_3'];
    $Edit_Movie_Links_720p_3 = $_POST['Edit_Movie_Links_720p_3'];
    $Edit_Movie_Links_1080p_3 = $_POST['Edit_Movie_Links_1080p_3'];
    $Edit_Movie_Links_480p_4 = $_POST['Edit_Movie_Links_480p_4'];
    $Edit_Movie_Links_720p_4 = $_POST['Edit_Movie_Links_720p_4'];
    $Edit_Movie_Links_1080p_4 = $_POST['Edit_Movie_Links_1080p_4'];
    $Edit_Movie_Links_480p_Watch = $_POST['Edit_Movie_Links_480p_Watch'];
    $Edit_Movie_Links_720p_Watch = $_POST['Edit_Movie_Links_720p_Watch'];
    $Edit_Movie_Links_1080p_Watch = $_POST['Edit_Movie_Links_1080p_Watch'];
    $Edit_Movie_Size_480p = $_POST['Edit_Movie_Size_480p'];
    $Edit_Movie_Size_720p = $_POST['Edit_Movie_Size_720p'];
    $Edit_Movie_Size_1080p = $_POST['Edit_Movie_Size_1080p'];
    $Edit_Movie_Description = $_POST['Edit_Movie_Description'];
    $Edit_Movie_ShortName = $_POST['Edit_Movie_ShortName'];
    $Edit_Movie_IMDb_Rating = $_POST['Edit_Movie_IMDb_Rating'];
    $Edit_Movie_Director = $_POST['Edit_Movie_Director'];
    $Edit_Movie_Stars = $_POST['Edit_Movie_Stars'];

    $num_gr = date('Ymdhs');

    if ($_FILES['Edit_Movie_Image']['size'] == 0){
      $filename = $Movie_Image;
  }else{
      $Edit_Movie_Image = $_FILES['Edit_Movie_Image'];
      $filename = $num_gr.$Edit_Movie_Image['name'];
      $filepath = $Edit_Movie_Image['tmp_name'];
      $destfile = 'photo/'.$filename;
      move_uploaded_file($filepath, $destfile);
      unlink("photo/$Movie_Image");
  }	

  if ($_FILES['Edit_Ss_Images1']['size'] == 0){
      $filename_ss1 = $Ss_Images1;
  }else{
      $Edit_Ss_Images1 = $_FILES['Edit_Ss_Images1']; 
      $filename_ss1 = $num_gr.$Edit_Ss_Images1['name'];
      $filepath_ss1 = $Edit_Ss_Images1['tmp_name'];
      $destfile_ss1 = 'photo/'.$filename_ss1;
      move_uploaded_file($filepath_ss1, $destfile_ss1);
      unlink("photo/$Ss_Images1");
  }

  if ($_FILES['Edit_Ss_Images2']['size'] == 0){
      $filename_ss2 = $Ss_Images2;
  }else{
      $Edit_Ss_Images2 = $_FILES['Edit_Ss_Images2']; 
      $filename_ss2 = $num_gr.$Edit_Ss_Images2['name'];
      $filepath_ss2 = $Edit_Ss_Images2['tmp_name'];
      $destfile_ss2 = 'photo/'.$filename_ss2;
      move_uploaded_file($filepath_ss2, $destfile_ss2);
      unlink("photo/$Ss_Images2");
  }

  if ($_FILES['Edit_Ss_Images3']['size'] == 0){
      $filename_ss3 = $Ss_Images3;
  }else{
      $Edit_Ss_Images3 = $_FILES['Edit_Ss_Images3']; 
      $filename_ss3 = $num_gr.$Edit_Ss_Images3['name'];
      $filepath_ss3 = $Edit_Ss_Images3['tmp_name'];
      $destfile_ss3 = 'photo/'.$filename_ss3;
      move_uploaded_file($filepath_ss3, $destfile_ss3);
      unlink("photo/$Ss_Images3");

  }

  if ($_FILES['Edit_Ss_Images4']['size'] == 0){
      $filename_ss4 = $Ss_Images4;
  }else{
      $Edit_Ss_Images4 = $_FILES['Edit_Ss_Images4'];
      $filename_ss4 = $num_gr.$Edit_Ss_Images4['name'];
      $filepath_ss4 = $Edit_Ss_Images4['tmp_name'];
      $destfile_ss4 = 'photo/'.$filename_ss4;
      move_uploaded_file($filepath_ss4, $destfile_ss4);
      unlink("photo/$Ss_Images4");

  }

  if ($_FILES['Edit_Ss_Images5']['size'] == 0){
      $filename_ss5 = $Ss_Images5;
  }else{
      $Edit_Ss_Images5 = $_FILES['Edit_Ss_Images5'];
      $filename_ss5 = $num_gr.$Edit_Ss_Images5['name'];
      $filepath_ss5 = $Edit_Ss_Images5['tmp_name'];
      $destfile_ss5 = 'photo/'.$filename_ss5;
      move_uploaded_file($filepath_ss5, $destfile_ss5);
      unlink("photo/$Ss_Images5");
  }

  if ($_FILES['Edit_Ss_Images6']['size'] == 0){
      $filename_ss6 = $Ss_Images6;
  }else{
      $Edit_Ss_Images6 = $_FILES['Edit_Ss_Images6']; 
      $filename_ss6 = $num_gr.$Edit_Ss_Images6['name'];
      $filepath_ss6 = $Edit_Ss_Images6['tmp_name'];
      $destfile_ss6 = 'photo/'.$filename_ss6;
      move_uploaded_file($filepath_ss6, $destfile_ss6);
      unlink("photo/$Ss_Images6");
  }


  $insertqurey= "UPDATE movies_data SET date_time = '$Current_Date', latest_released = '$Edit_Latest_Released_c', dual_audio = '$Edit_Dual_Audio_c', multi_audio = '$Edit_Multi_Audio_c', english_l = '$Edit_English_L_c', hindi_l = '$Edit_Hindi_L_c', adult_movies = '$Edit_Adult_Movie_c', asian_movies = '$Edit_Asian_Movie_c', english_movies = '$Edit_English_Movie_c', hacking_movies = '$Edit_Hacking_Movie_c', 480p_movies = '$Edit_Movie_c_480p', 720p_movies = '$Edit_Movie_c_720p', 1080p_movies = '$Edit_Movie_c_1080p', 4k_ultra_hd = '$Edit_Ultra_HD_c_4K', 300mb_movies = '$Edit_Movie_c_300mb', 500mb_movies = '$Edit_Movie_c_500mb', 700mb_movies = '$Edit_Movie_c_700mb', 1gb_movies = '$Edit_Movie_c_1gb', action_movies = '$Edit_G_Action', adventure_movies = '$Edit_G_Adventure', animated_movies = '$Edit_G_Animated', comedy_movies = '$Edit_G_Comedy', crime_movies = '$Edit_G_Crime', fantasy_movies = '$Edit_G_Fantasy', horror_movies = '$Edit_G_Horror', mystery_movies = '$Edit_G_Mystery', romance_movies = '$Edit_G_Romance', sci_fi_movies = '$Edit_G_Sci_fi', thriller_movies = '$Edit_G_Thriller', movie_name = '$Edit_Movie_Name', movie_catagory = '$Edit_Movie_Catagory', year = '$Edit_Movie_Year', 480p_links = '$Edit_Movie_Links_480p', 720p_links = '$Edit_Movie_Links_720p', 1080p_links = '$Edit_Movie_Links_1080p', 480p_links_2 = '$Edit_Movie_Links_480p_2', 720p_links_2 = '$Edit_Movie_Links_720p_2', 1080p_links_2 = '$Edit_Movie_Links_1080p_2', 480p_links_3 = '$Edit_Movie_Links_480p_3', 720p_links_3 = '$Edit_Movie_Links_720p_3', 1080p_links_3 = '$Edit_Movie_Links_1080p_3', 480p_links_4 = '$Edit_Movie_Links_480p_4', 720p_links_4 = '$Edit_Movie_Links_720p_4', 1080p_links_4 = '$Edit_Movie_Links_1080p_4', 480p_watch_links = '$Edit_Movie_Links_480p_Watch', 720p_watch_links = '$Edit_Movie_Links_720p_Watch', 1080p_watch_links = '$Edit_Movie_Links_1080p_Watch', 480p_m_size = '$Edit_Movie_Size_480p', 720p_m_size = '$Edit_Movie_Size_720p', 1080p_m_size = '$Edit_Movie_Size_1080p', movie_description = '$Edit_Movie_Description', movie_shortname = '$Edit_Movie_ShortName', movie_imdb = '$Edit_Movie_IMDb_Rating', movie_director = '$Edit_Movie_Director', movie_stars = '$Edit_Movie_Stars', main_image = '$filename', ss_images1 = '$filename_ss1', ss_images2 = '$filename_ss2', ss_images3 = '$filename_ss3', ss_images4 = '$filename_ss4', ss_images5 = '$filename_ss5', ss_images6 = '$filename_ss6' WHERE movies_data . id='".$_GET['dataid']."'" ;





  if ($Movie_Catagory == "Web Series") {

// edit webserise


    $Edit_W_480p_Links_E1 = $_POST['Edit_W_480p_Links_E1'];
    $Edit_W_720p_Links_E1 = $_POST['Edit_W_720p_Links_E1'];
    $Edit_W_1080p_Links_E1 = $_POST['Edit_W_1080p_Links_E1'];
    $Edit_W_480p_Links_E2 = $_POST['Edit_W_480p_Links_E2'];
    $Edit_W_720p_Links_E2 = $_POST['Edit_W_720p_Links_E2'];
    $Edit_W_1080p_Links_E2 = $_POST['Edit_W_1080p_Links_E2'];    
    $Edit_W_480p_Links_E3 = $_POST['Edit_W_480p_Links_E3'];
    $Edit_W_720p_Links_E3 = $_POST['Edit_W_720p_Links_E3'];
    $Edit_W_1080p_Links_E3 = $_POST['Edit_W_1080p_Links_E3'];    
    $Edit_W_480p_Links_E4 = $_POST['Edit_W_480p_Links_E4'];
    $Edit_W_720p_Links_E4 = $_POST['Edit_W_720p_Links_E4'];
    $Edit_W_1080p_Links_E4 = $_POST['Edit_W_1080p_Links_E4'];    
    $Edit_W_480p_Links_E5 = $_POST['Edit_W_480p_Links_E5'];
    $Edit_W_720p_Links_E5 = $_POST['Edit_W_720p_Links_E5'];
    $Edit_W_1080p_Links_E5 = $_POST['Edit_W_1080p_Links_E5'];    
    $Edit_W_480p_Links_E6 = $_POST['Edit_W_480p_Links_E6'];
    $Edit_W_720p_Links_E6 = $_POST['Edit_W_720p_Links_E6'];
    $Edit_W_1080p_Links_E6 = $_POST['Edit_W_1080p_Links_E6'];    
    $Edit_W_480p_Links_E7 = $_POST['Edit_W_480p_Links_E7'];
    $Edit_W_720p_Links_E7 = $_POST['Edit_W_720p_Links_E7'];
    $Edit_W_1080p_Links_E7 = $_POST['Edit_W_1080p_Links_E7'];    
    $Edit_W_480p_Links_E8 = $_POST['Edit_W_480p_Links_E8'];
    $Edit_W_720p_Links_E8 = $_POST['Edit_W_720p_Links_E8'];
    $Edit_W_1080p_Links_E8 = $_POST['Edit_W_1080p_Links_E8'];    
    $Edit_W_480p_Links_E9 = $_POST['Edit_W_480p_Links_E9'];
    $Edit_W_720p_Links_E9 = $_POST['Edit_W_720p_Links_E9'];
    $Edit_W_1080p_Links_E9 = $_POST['Edit_W_1080p_Links_E9'];    
    $Edit_W_480p_Links_E10 = $_POST['Edit_W_480p_Links_E10'];
    $Edit_W_720p_Links_E10 = $_POST['Edit_W_720p_Links_E10'];
    $Edit_W_1080p_Links_E10 = $_POST['Edit_W_1080p_Links_E10'];    
    $Edit_W_480p_Links_E11 = $_POST['Edit_W_480p_Links_E11'];
    $Edit_W_720p_Links_E11 = $_POST['Edit_W_720p_Links_E11'];
    $Edit_W_1080p_Links_E11 = $_POST['Edit_W_1080p_Links_E11'];    
    $Edit_W_480p_Links_E12 = $_POST['Edit_W_480p_Links_E12'];
    $Edit_W_720p_Links_E12 = $_POST['Edit_W_720p_Links_E12'];
    $Edit_W_1080p_Links_E12 = $_POST['Edit_W_1080p_Links_E12'];    
    $Edit_W_480p_Links_E13 = $_POST['Edit_W_480p_Links_E13'];
    $Edit_W_720p_Links_E13 = $_POST['Edit_W_720p_Links_E13'];
    $Edit_W_1080p_Links_E13 = $_POST['Edit_W_1080p_Links_E13'];    
    $Edit_W_480p_Links_E14 = $_POST['Edit_W_480p_Links_E14'];
    $Edit_W_720p_Links_E14 = $_POST['Edit_W_720p_Links_E14'];
    $Edit_W_1080p_Links_E14 = $_POST['Edit_W_1080p_Links_E14'];    
    $Edit_W_480p_Links_E15 = $_POST['Edit_W_480p_Links_E15'];
    $Edit_W_720p_Links_E15 = $_POST['Edit_W_720p_Links_E15'];
    $Edit_W_1080p_Links_E15 = $_POST['Edit_W_1080p_Links_E15'];   
    $Edit_W_480p_Links_E16 = $_POST['Edit_W_480p_Links_E16'];
    $Edit_W_720p_Links_E16 = $_POST['Edit_W_720p_Links_E16'];
    $Edit_W_1080p_Links_E16 = $_POST['Edit_W_1080p_Links_E16'];   
    $Edit_W_480p_Links_E17 = $_POST['Edit_W_480p_Links_E17'];
    $Edit_W_720p_Links_E17 = $_POST['Edit_W_720p_Links_E17'];
    $Edit_W_1080p_Links_E17 = $_POST['Edit_W_1080p_Links_E17'];    
    $Edit_W_480p_Links_E18 = $_POST['Edit_W_480p_Links_E18'];
    $Edit_W_720p_Links_E18 = $_POST['Edit_W_720p_Links_E18'];
    $Edit_W_1080p_Links_E18 = $_POST['Edit_W_1080p_Links_E18'];    
    $Edit_W_480p_Links_E19 = $_POST['Edit_W_480p_Links_E19'];
    $Edit_W_720p_Links_E19 = $_POST['Edit_W_720p_Links_E19'];
    $Edit_W_1080p_Links_E19 = $_POST['Edit_W_1080p_Links_E19'];    
    $Edit_W_480p_Links_E20 = $_POST['Edit_W_480p_Links_E20'];
    $Edit_W_720p_Links_E20 = $_POST['Edit_W_720p_Links_E20'];
    $Edit_W_1080p_Links_E20 = $_POST['Edit_W_1080p_Links_E20'];    
    $Edit_W_480p_Links_E21 = $_POST['Edit_W_480p_Links_E21'];
    $Edit_W_720p_Links_E21 = $_POST['Edit_W_720p_Links_E21'];
    $Edit_W_1080p_Links_E21 = $_POST['Edit_W_1080p_Links_E21'];    
    $Edit_W_480p_Links_E22 = $_POST['Edit_W_480p_Links_E22'];
    $Edit_W_720p_Links_E22 = $_POST['Edit_W_720p_Links_E22'];
    $Edit_W_1080p_Links_E22 = $_POST['Edit_W_1080p_Links_E22'];    
    $Edit_W_480p_Links_E23 = $_POST['Edit_W_480p_Links_E23'];
    $Edit_W_720p_Links_E23 = $_POST['Edit_W_720p_Links_E23'];
    $Edit_W_1080p_Links_E23 = $_POST['Edit_W_1080p_Links_E23'];    
    $Edit_W_480p_Links_E24 = $_POST['Edit_W_480p_Links_E24'];
    $Edit_W_720p_Links_E24 = $_POST['Edit_W_720p_Links_E24'];
    $Edit_W_1080p_Links_E24 = $_POST['Edit_W_1080p_Links_E24'];    
    $Edit_W_480p_Links_E25 = $_POST['Edit_W_480p_Links_E25'];
    $Edit_W_720p_Links_E25 = $_POST['Edit_W_720p_Links_E25'];
    $Edit_W_1080p_Links_E25 = $_POST['Edit_W_1080p_Links_E25'];    
    $Edit_W_480p_Links_E26 = $_POST['Edit_W_480p_Links_E26'];
    $Edit_W_720p_Links_E26 = $_POST['Edit_W_720p_Links_E26'];
    $Edit_W_1080p_Links_E26 = $_POST['Edit_W_1080p_Links_E26'];    
    $Edit_W_480p_Links_E27 = $_POST['Edit_W_480p_Links_E27'];
    $Edit_W_720p_Links_E27 = $_POST['Edit_W_720p_Links_E27'];
    $Edit_W_1080p_Links_E27 = $_POST['Edit_W_1080p_Links_E27'];    
    $Edit_W_480p_Links_E28 = $_POST['Edit_W_480p_Links_E28'];
    $Edit_W_720p_Links_E28 = $_POST['Edit_W_720p_Links_E28'];
    $Edit_W_1080p_Links_E28 = $_POST['Edit_W_1080p_Links_E28'];    
    $Edit_W_480p_Links_E29 = $_POST['Edit_W_480p_Links_E29'];
    $Edit_W_720p_Links_E29 = $_POST['Edit_W_720p_Links_E29'];
    $Edit_W_1080p_Links_E29 = $_POST['Edit_W_1080p_Links_E29'];    
    $Edit_W_480p_Links_E30 = $_POST['Edit_W_480p_Links_E30'];
    $Edit_W_720p_Links_E30 = $_POST['Edit_W_720p_Links_E30'];
    $Edit_W_1080p_Links_E30 = $_POST['Edit_W_1080p_Links_E30'];

    $Edit_W_480p_Watch_Links_E1  =  $_POST['Edit_W_480p_Watch_Links_E1'];
    $Edit_W_720p_Watch_Links_E1  =  $_POST['Edit_W_720p_Watch_Links_E1'];
    $Edit_W_1080p_Watch_Links_E1  =  $_POST['Edit_W_1080p_Watch_Links_E1'];
    $Edit_W_480p_Watch_Links_E2 =  $_POST['Edit_W_480p_Watch_Links_E2'];
    $Edit_W_720p_Watch_Links_E2 =  $_POST['Edit_W_720p_Watch_Links_E2'];
    $Edit_W_1080p_Watch_Links_E2 =  $_POST['Edit_W_1080p_Watch_Links_E2'];    
    $Edit_W_480p_Watch_Links_E3 =  $_POST['Edit_W_480p_Watch_Links_E3'];
    $Edit_W_720p_Watch_Links_E3 =  $_POST['Edit_W_720p_Watch_Links_E3'];
    $Edit_W_1080p_Watch_Links_E3 =  $_POST['Edit_W_1080p_Watch_Links_E3'];    
    $Edit_W_480p_Watch_Links_E4 =  $_POST['Edit_W_480p_Watch_Links_E4'];
    $Edit_W_720p_Watch_Links_E4 =  $_POST['Edit_W_720p_Watch_Links_E4'];
    $Edit_W_1080p_Watch_Links_E4 =  $_POST['Edit_W_1080p_Watch_Links_E4'];    
    $Edit_W_480p_Watch_Links_E5 =  $_POST['Edit_W_480p_Watch_Links_E5'];
    $Edit_W_720p_Watch_Links_E5 =  $_POST['Edit_W_720p_Watch_Links_E5'];
    $Edit_W_1080p_Watch_Links_E5 =  $_POST['Edit_W_1080p_Watch_Links_E5'];    
    $Edit_W_480p_Watch_Links_E6 =  $_POST['Edit_W_480p_Watch_Links_E6'];
    $Edit_W_720p_Watch_Links_E6 =  $_POST['Edit_W_720p_Watch_Links_E6'];
    $Edit_W_1080p_Watch_Links_E6 =  $_POST['Edit_W_1080p_Watch_Links_E6'];    
    $Edit_W_480p_Watch_Links_E7 =  $_POST['Edit_W_480p_Watch_Links_E7'];
    $Edit_W_720p_Watch_Links_E7 =  $_POST['Edit_W_720p_Watch_Links_E7'];
    $Edit_W_1080p_Watch_Links_E7 =  $_POST['Edit_W_1080p_Watch_Links_E7'];    
    $Edit_W_480p_Watch_Links_E8 =  $_POST['Edit_W_480p_Watch_Links_E8'];
    $Edit_W_720p_Watch_Links_E8 =  $_POST['Edit_W_720p_Watch_Links_E8'];
    $Edit_W_1080p_Watch_Links_E8 =  $_POST['Edit_W_1080p_Watch_Links_E8'];    
    $Edit_W_480p_Watch_Links_E9 =  $_POST['Edit_W_480p_Watch_Links_E9'];
    $Edit_W_720p_Watch_Links_E9 =  $_POST['Edit_W_720p_Watch_Links_E9'];
    $Edit_W_1080p_Watch_Links_E9 =  $_POST['Edit_W_1080p_Watch_Links_E9'];    
    $Edit_W_480p_Watch_Links_E10 =  $_POST['Edit_W_480p_Watch_Links_E10'];
    $Edit_W_720p_Watch_Links_E10 =  $_POST['Edit_W_720p_Watch_Links_E10'];
    $Edit_W_1080p_Watch_Links_E10 =  $_POST['Edit_W_1080p_Watch_Links_E10'];    
    $Edit_W_480p_Watch_Links_E11 =  $_POST['Edit_W_480p_Watch_Links_E11'];
    $Edit_W_720p_Watch_Links_E11 =  $_POST['Edit_W_720p_Watch_Links_E11'];
    $Edit_W_1080p_Watch_Links_E11 =  $_POST['Edit_W_1080p_Watch_Links_E11'];    
    $Edit_W_480p_Watch_Links_E12 =  $_POST['Edit_W_480p_Watch_Links_E12'];
    $Edit_W_720p_Watch_Links_E12 =  $_POST['Edit_W_720p_Watch_Links_E12'];
    $Edit_W_1080p_Watch_Links_E12 =  $_POST['Edit_W_1080p_Watch_Links_E12'];    
    $Edit_W_480p_Watch_Links_E13 =  $_POST['Edit_W_480p_Watch_Links_E13'];
    $Edit_W_720p_Watch_Links_E13 =  $_POST['Edit_W_720p_Watch_Links_E13'];
    $Edit_W_1080p_Watch_Links_E13 =  $_POST['Edit_W_1080p_Watch_Links_E13'];    
    $Edit_W_480p_Watch_Links_E14 =  $_POST['Edit_W_480p_Watch_Links_E14'];
    $Edit_W_720p_Watch_Links_E14 =  $_POST['Edit_W_720p_Watch_Links_E14'];
    $Edit_W_1080p_Watch_Links_E14 =  $_POST['Edit_W_1080p_Watch_Links_E14'];    
    $Edit_W_480p_Watch_Links_E15 =  $_POST['Edit_W_480p_Watch_Links_E15'];
    $Edit_W_720p_Watch_Links_E15 =  $_POST['Edit_W_720p_Watch_Links_E15'];
    $Edit_W_1080p_Watch_Links_E15 =  $_POST['Edit_W_1080p_Watch_Links_E15'];    
    $Edit_W_480p_Watch_Links_E16 =  $_POST['Edit_W_480p_Watch_Links_E16'];
    $Edit_W_720p_Watch_Links_E16 =  $_POST['Edit_W_720p_Watch_Links_E16'];
    $Edit_W_1080p_Watch_Links_E16 =  $_POST['Edit_W_1080p_Watch_Links_E16'];    
    $Edit_W_480p_Watch_Links_E17 =  $_POST['Edit_W_480p_Watch_Links_E17'];
    $Edit_W_720p_Watch_Links_E17 =  $_POST['Edit_W_720p_Watch_Links_E17'];
    $Edit_W_1080p_Watch_Links_E17 =  $_POST['Edit_W_1080p_Watch_Links_E17'];    
    $Edit_W_480p_Watch_Links_E18 =  $_POST['Edit_W_480p_Watch_Links_E18'];
    $Edit_W_720p_Watch_Links_E18 =  $_POST['Edit_W_720p_Watch_Links_E18'];
    $Edit_W_1080p_Watch_Links_E18 =  $_POST['Edit_W_1080p_Watch_Links_E18'];    
    $Edit_W_480p_Watch_Links_E19 =  $_POST['Edit_W_480p_Watch_Links_E19'];
    $Edit_W_720p_Watch_Links_E19 =  $_POST['Edit_W_720p_Watch_Links_E19'];
    $Edit_W_1080p_Watch_Links_E19 =  $_POST['Edit_W_1080p_Watch_Links_E19'];    
    $Edit_W_480p_Watch_Links_E20 =  $_POST['Edit_W_480p_Watch_Links_E20'];
    $Edit_W_720p_Watch_Links_E20 =  $_POST['Edit_W_720p_Watch_Links_E20'];
    $Edit_W_1080p_Watch_Links_E20 =  $_POST['Edit_W_1080p_Watch_Links_E20'];    
    $Edit_W_480p_Watch_Links_E21 =  $_POST['Edit_W_480p_Watch_Links_E21'];
    $Edit_W_720p_Watch_Links_E21 =  $_POST['Edit_W_720p_Watch_Links_E21'];
    $Edit_W_1080p_Watch_Links_E21 =  $_POST['Edit_W_1080p_Watch_Links_E21'];    
    $Edit_W_480p_Watch_Links_E22 =  $_POST['Edit_W_480p_Watch_Links_E22'];
    $Edit_W_720p_Watch_Links_E22 =  $_POST['Edit_W_720p_Watch_Links_E22'];
    $Edit_W_1080p_Watch_Links_E22 =  $_POST['Edit_W_1080p_Watch_Links_E22'];    
    $Edit_W_480p_Watch_Links_E23 =  $_POST['Edit_W_480p_Watch_Links_E23'];
    $Edit_W_720p_Watch_Links_E23 =  $_POST['Edit_W_720p_Watch_Links_E23'];
    $Edit_W_1080p_Watch_Links_E23 =  $_POST['Edit_W_1080p_Watch_Links_E23'];    
    $Edit_W_480p_Watch_Links_E24 =  $_POST['Edit_W_480p_Watch_Links_E24'];
    $Edit_W_720p_Watch_Links_E24 =  $_POST['Edit_W_720p_Watch_Links_E24'];
    $Edit_W_1080p_Watch_Links_E24 =  $_POST['Edit_W_1080p_Watch_Links_E24'];    
    $Edit_W_480p_Watch_Links_E25 =  $_POST['Edit_W_480p_Watch_Links_E25'];
    $Edit_W_720p_Watch_Links_E25 =  $_POST['Edit_W_720p_Watch_Links_E25'];
    $Edit_W_1080p_Watch_Links_E25 =  $_POST['Edit_W_1080p_Watch_Links_E25'];    
    $Edit_W_480p_Watch_Links_E26 =  $_POST['Edit_W_480p_Watch_Links_E26'];
    $Edit_W_720p_Watch_Links_E26 =  $_POST['Edit_W_720p_Watch_Links_E26'];
    $Edit_W_1080p_Watch_Links_E26 =  $_POST['Edit_W_1080p_Watch_Links_E26'];    
    $Edit_W_480p_Watch_Links_E27 =  $_POST['Edit_W_480p_Watch_Links_E27'];
    $Edit_W_720p_Watch_Links_E27 =  $_POST['Edit_W_720p_Watch_Links_E27'];
    $Edit_W_1080p_Watch_Links_E27 =  $_POST['Edit_W_1080p_Watch_Links_E27'];    
    $Edit_W_480p_Watch_Links_E28 =  $_POST['Edit_W_480p_Watch_Links_E28'];
    $Edit_W_720p_Watch_Links_E28 =  $_POST['Edit_W_720p_Watch_Links_E28'];
    $Edit_W_1080p_Watch_Links_E28 =  $_POST['Edit_W_1080p_Watch_Links_E28'];    
    $Edit_W_480p_Watch_Links_E29 =  $_POST['Edit_W_480p_Watch_Links_E29'];
    $Edit_W_720p_Watch_Links_E29 =  $_POST['Edit_W_720p_Watch_Links_E29'];
    $Edit_W_1080p_Watch_Links_E29 =  $_POST['Edit_W_1080p_Watch_Links_E29'];    
    $Edit_W_480p_Watch_Links_E30 =  $_POST['Edit_W_480p_Watch_Links_E30'];
    $Edit_W_720p_Watch_Links_E30 =  $_POST['Edit_W_720p_Watch_Links_E30'];
    $Edit_W_1080p_Watch_Links_E30 =  $_POST['Edit_W_1080p_Watch_Links_E30'];


    $insertqurey_web_l= "UPDATE movies_data_webseries_links SET date_time_wl = '$Current_Date', w_480p_links_e1 = '$Edit_W_480p_Links_E1', w_480p_links_e2 = '$Edit_W_480p_Links_E2', w_480p_links_e3 = '$Edit_W_480p_Links_E3', w_480p_links_e4 = '$Edit_W_480p_Links_E4', w_480p_links_e5 = '$Edit_W_480p_Links_E5', w_480p_links_e6 = '$Edit_W_480p_Links_E6', w_480p_links_e7 = '$Edit_W_480p_Links_E7', w_480p_links_e8 = '$Edit_W_480p_Links_E8', w_480p_links_e9 = '$Edit_W_480p_Links_E9', w_480p_links_e10 = '$Edit_W_480p_Links_E10', w_480p_links_e11 = '$Edit_W_480p_Links_E11', w_480p_links_e12 = '$Edit_W_480p_Links_E12', w_480p_links_e13 = '$Edit_W_480p_Links_E13', w_480p_links_e14 = '$Edit_W_480p_Links_E14', w_480p_links_e15 = '$Edit_W_480p_Links_E15', w_480p_links_e16 = '$Edit_W_480p_Links_E16', w_480p_links_e17 = '$Edit_W_480p_Links_E17', w_480p_links_e18 = '$Edit_W_480p_Links_E18', w_480p_links_e19 = '$Edit_W_480p_Links_E19', w_480p_links_e20 = '$Edit_W_480p_Links_E20', w_480p_links_e21 = '$Edit_W_480p_Links_E21', w_480p_links_e22 = '$Edit_W_480p_Links_E22', w_480p_links_e23 = '$Edit_W_480p_Links_E23', w_480p_links_e24 = '$Edit_W_480p_Links_E24', w_480p_links_e25 = '$Edit_W_480p_Links_E25', w_480p_links_e26 = '$Edit_W_480p_Links_E26', w_480p_links_e27 = '$Edit_W_480p_Links_E27', w_480p_links_e28 = '$Edit_W_480p_Links_E28', w_480p_links_e29 = '$Edit_W_480p_Links_E29', w_480p_links_e30 = '$Edit_W_480p_Links_E30', w_720p_links_e1 = '$Edit_W_720p_Links_E1', w_720p_links_e2 = '$Edit_W_720p_Links_E2', w_720p_links_e3 = '$Edit_W_720p_Links_E3', w_720p_links_e4 = '$Edit_W_720p_Links_E4', w_720p_links_e5 = '$Edit_W_720p_Links_E5', w_720p_links_e6 = '$Edit_W_720p_Links_E6', w_720p_links_e7 = '$Edit_W_720p_Links_E7', w_720p_links_e8 = '$Edit_W_720p_Links_E8', w_720p_links_e9 = '$Edit_W_720p_Links_E9', w_720p_links_e10 = '$Edit_W_720p_Links_E10', w_720p_links_e11 = '$Edit_W_720p_Links_E11', w_720p_links_e12 = '$Edit_W_720p_Links_E12', w_720p_links_e13 = '$Edit_W_720p_Links_E13', w_720p_links_e14 = '$Edit_W_720p_Links_E14', w_720p_links_e15 = '$Edit_W_720p_Links_E15', w_720p_links_e16 = '$Edit_W_720p_Links_E16', w_720p_links_e17 = '$Edit_W_720p_Links_E17', w_720p_links_e18 = '$Edit_W_720p_Links_E18', w_720p_links_e19 = '$Edit_W_720p_Links_E19', w_720p_links_e20 = '$Edit_W_720p_Links_E20', w_720p_links_e21 = '$Edit_W_720p_Links_E21', w_720p_links_e22 = '$Edit_W_720p_Links_E22', w_720p_links_e23 = '$Edit_W_720p_Links_E23', w_720p_links_e24 = '$Edit_W_720p_Links_E24', w_720p_links_e25 = '$Edit_W_720p_Links_E25', w_720p_links_e26 = '$Edit_W_720p_Links_E26', w_720p_links_e27 = '$Edit_W_720p_Links_E27', w_720p_links_e28 = '$Edit_W_720p_Links_E28', w_720p_links_e29 = '$Edit_W_720p_Links_E29', w_720p_links_e30 = '$Edit_W_720p_Links_E30', w_1080p_links_e1 = '$Edit_W_1080p_Links_E1', w_1080p_links_e2 = '$Edit_W_1080p_Links_E2', w_1080p_links_e3 = '$Edit_W_1080p_Links_E3', w_1080p_links_e4 = '$Edit_W_1080p_Links_E4', w_1080p_links_e5 = '$Edit_W_1080p_Links_E5', w_1080p_links_e6 = '$Edit_W_1080p_Links_E6', w_1080p_links_e7 = '$Edit_W_1080p_Links_E7', w_1080p_links_e8 = '$Edit_W_1080p_Links_E8', w_1080p_links_e9 = '$Edit_W_1080p_Links_E9', w_1080p_links_e10 = '$Edit_W_1080p_Links_E10', w_1080p_links_e11 = '$Edit_W_1080p_Links_E11', w_1080p_links_e12 = '$Edit_W_1080p_Links_E12', w_1080p_links_e13 = '$Edit_W_1080p_Links_E13', w_1080p_links_e14 = '$Edit_W_1080p_Links_E14', w_1080p_links_e15 = '$Edit_W_1080p_Links_E15', w_1080p_links_e16 = '$Edit_W_1080p_Links_E16', w_1080p_links_e17 = '$Edit_W_1080p_Links_E17', w_1080p_links_e18 = '$Edit_W_1080p_Links_E18', w_1080p_links_e19 = '$Edit_W_1080p_Links_E19', w_1080p_links_e20 = '$Edit_W_1080p_Links_E20', w_1080p_links_e20 = '$Edit_W_1080p_Links_E20', w_1080p_links_e21 = '$Edit_W_1080p_Links_E21', w_1080p_links_e22 = '$Edit_W_1080p_Links_E22', w_1080p_links_e23 = '$Edit_W_1080p_Links_E23', w_1080p_links_e24 = '$Edit_W_1080p_Links_E24', w_1080p_links_e25 = '$Edit_W_1080p_Links_E25', w_1080p_links_e26 = '$Edit_W_1080p_Links_E26', w_1080p_links_e27 = '$Edit_W_1080p_Links_E27', w_1080p_links_e28 = '$Edit_W_1080p_Links_E28', w_1080p_links_e29 = '$Edit_W_1080p_Links_E29', w_1080p_links_e30 = '$Edit_W_1080p_Links_E30' WHERE date_time_wl ='$Date_Time'" ;


    $insertqurey_web_w_l= "UPDATE movies_data_webseries_watch_links SET date_time_wl = '$Current_Date', w_480p_links_e1 = '$Edit_W_480p_Watch_Links_E1', w_480p_links_e2 = '$Edit_W_480p_Watch_Links_E2', w_480p_links_e3 = '$Edit_W_480p_Watch_Links_E3', w_480p_links_e4 = '$Edit_W_480p_Watch_Links_E4', w_480p_links_e5 = '$Edit_W_480p_Watch_Links_E5', w_480p_links_e6 = '$Edit_W_480p_Watch_Links_E6', w_480p_links_e7 = '$Edit_W_480p_Watch_Links_E7', w_480p_links_e8 = '$Edit_W_480p_Watch_Links_E8', w_480p_links_e9 = '$Edit_W_480p_Watch_Links_E9', w_480p_links_e10 = '$Edit_W_480p_Watch_Links_E10', w_480p_links_e11 = '$Edit_W_480p_Watch_Links_E11', w_480p_links_e12 = '$Edit_W_480p_Watch_Links_E12', w_480p_links_e13 = '$Edit_W_480p_Watch_Links_E13', w_480p_links_e14 = '$Edit_W_480p_Watch_Links_E14', w_480p_links_e15 = '$Edit_W_480p_Watch_Links_E15', w_480p_links_e16 = '$Edit_W_480p_Watch_Links_E16', w_480p_links_e17 = '$Edit_W_480p_Watch_Links_E17', w_480p_links_e18 = '$Edit_W_480p_Watch_Links_E18', w_480p_links_e19 = '$Edit_W_480p_Watch_Links_E19', w_480p_links_e20 = '$Edit_W_480p_Watch_Links_E20', w_480p_links_e21 = '$Edit_W_480p_Watch_Links_E21', w_480p_links_e22 = '$Edit_W_480p_Watch_Links_E22', w_480p_links_e23 = '$Edit_W_480p_Watch_Links_E23', w_480p_links_e24 = '$Edit_W_480p_Watch_Links_E24', w_480p_links_e25 = '$Edit_W_480p_Watch_Links_E25', w_480p_links_e26 = '$Edit_W_480p_Watch_Links_E26', w_480p_links_e27 = '$Edit_W_480p_Watch_Links_E27', w_480p_links_e28 = '$Edit_W_480p_Watch_Links_E28', w_480p_links_e29 = '$Edit_W_480p_Watch_Links_E29', w_480p_links_e30 = '$Edit_W_480p_Watch_Links_E30', w_720p_links_e1 = '$Edit_W_720p_Watch_Links_E1', w_720p_links_e2 = '$Edit_W_720p_Watch_Links_E2', w_720p_links_e3 = '$Edit_W_720p_Watch_Links_E3', w_720p_links_e4 = '$Edit_W_720p_Watch_Links_E4', w_720p_links_e5 = '$Edit_W_720p_Watch_Links_E5', w_720p_links_e6 = '$Edit_W_720p_Watch_Links_E6', w_720p_links_e7 = '$Edit_W_720p_Watch_Links_E7', w_720p_links_e8 = '$Edit_W_720p_Watch_Links_E8', w_720p_links_e9 = '$Edit_W_720p_Watch_Links_E9', w_720p_links_e10 = '$Edit_W_720p_Watch_Links_E10', w_720p_links_e11 = '$Edit_W_720p_Watch_Links_E11', w_720p_links_e12 = '$Edit_W_720p_Watch_Links_E12', w_720p_links_e13 = '$Edit_W_720p_Watch_Links_E13', w_720p_links_e14 = '$Edit_W_720p_Watch_Links_E14', w_720p_links_e15 = '$Edit_W_720p_Watch_Links_E15', w_720p_links_e16 = '$Edit_W_720p_Watch_Links_E16', w_720p_links_e17 = '$Edit_W_720p_Watch_Links_E17', w_720p_links_e18 = '$Edit_W_720p_Watch_Links_E18', w_720p_links_e19 = '$Edit_W_720p_Watch_Links_E19', w_720p_links_e20 = '$Edit_W_720p_Watch_Links_E20', w_720p_links_e21 = '$Edit_W_720p_Watch_Links_E21', w_720p_links_e22 = '$Edit_W_720p_Watch_Links_E22', w_720p_links_e23 = '$Edit_W_720p_Watch_Links_E23', w_720p_links_e24 = '$Edit_W_720p_Watch_Links_E24', w_720p_links_e25 = '$Edit_W_720p_Watch_Links_E25', w_720p_links_e26 = '$Edit_W_720p_Watch_Links_E26', w_720p_links_e27 = '$Edit_W_720p_Watch_Links_E27', w_720p_links_e28 = '$Edit_W_720p_Watch_Links_E28', w_720p_links_e29 = '$Edit_W_720p_Watch_Links_E29', w_720p_links_e30 = '$Edit_W_720p_Watch_Links_E30', w_1080p_links_e1 = '$Edit_W_1080p_Watch_Links_E1', w_1080p_links_e2 = '$Edit_W_1080p_Watch_Links_E2', w_1080p_links_e3 = '$Edit_W_1080p_Watch_Links_E3', w_1080p_links_e4 = '$Edit_W_1080p_Watch_Links_E4', w_1080p_links_e5 = '$Edit_W_1080p_Watch_Links_E5', w_1080p_links_e6 = '$Edit_W_1080p_Watch_Links_E6', w_1080p_links_e7 = '$Edit_W_1080p_Watch_Links_E7', w_1080p_links_e8 = '$Edit_W_1080p_Watch_Links_E8', w_1080p_links_e9 = '$Edit_W_1080p_Watch_Links_E9', w_1080p_links_e10 = '$Edit_W_1080p_Watch_Links_E10', w_1080p_links_e11 = '$Edit_W_1080p_Watch_Links_E11', w_1080p_links_e12 = '$Edit_W_1080p_Watch_Links_E12', w_1080p_links_e13 = '$Edit_W_1080p_Watch_Links_E13', w_1080p_links_e14 = '$Edit_W_1080p_Watch_Links_E14', w_1080p_links_e15 = '$Edit_W_1080p_Watch_Links_E15', w_1080p_links_e16 = '$Edit_W_1080p_Watch_Links_E16', w_1080p_links_e17 = '$Edit_W_1080p_Watch_Links_E17', w_1080p_links_e18 = '$Edit_W_1080p_Watch_Links_E18', w_1080p_links_e19 = '$Edit_W_1080p_Watch_Links_E19', w_1080p_links_e20 = '$Edit_W_1080p_Watch_Links_E20', w_1080p_links_e20 = '$Edit_W_1080p_Watch_Links_E20', w_1080p_links_e21 = '$Edit_W_1080p_Watch_Links_E21', w_1080p_links_e22 = '$Edit_W_1080p_Watch_Links_E22', w_1080p_links_e23 = '$Edit_W_1080p_Watch_Links_E23', w_1080p_links_e24 = '$Edit_W_1080p_Watch_Links_E24', w_1080p_links_e25 = '$Edit_W_1080p_Watch_Links_E25', w_1080p_links_e26 = '$Edit_W_1080p_Watch_Links_E26', w_1080p_links_e27 = '$Edit_W_1080p_Watch_Links_E27', w_1080p_links_e28 = '$Edit_W_1080p_Watch_Links_E28', w_1080p_links_e29 = '$Edit_W_1080p_Watch_Links_E29', w_1080p_links_e30 = '$Edit_W_1080p_Watch_Links_E30' WHERE date_time_wl ='$Date_Time'" ;


    mysqli_query($link, $insertqurey);
    mysqli_query($link, $insertqurey_web_w_l);

    if (mysqli_query($link, $insertqurey_web_l)) {
      $_SESSION['edit_message'] = "Saved Successfully";
      header("Location:index.php");
      exit(); 
  } else {
      $_SESSION['edit_message_error'] = mysqli_error($link);
      header("Location:index.php");
      exit();

  }

}else{

	if (mysqli_query($link, $insertqurey)) {
		$_SESSION['edit_message'] = "Saved Successfully";
		header("Location:index.php");
		exit(); 
	} else {
		$_SESSION['edit_message_error'] = mysqli_error($link);
		header("Location:index.php");
		exit();

	}

}


}

?>

<form method="POST" class="row" action="edit_data.php?dataid=<?php echo $_GET['dataid'] ?>" enctype="multipart/form-data">
	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

		<div class="form-group">
			<label>Movie Image</label><br>
			<div style="display: inline-flex;height: 40px;width: 100%">
				<input type="file" class="form-control maini" name="Edit_Movie_Image" accept="image/*" onchange="readURL(this);" style="height: 43px;">
				<!-- <input type="file" class="form-control" name="banner-Image" onchange="readURL(this);"> -->
				<img src="photo/<?php echo $Movie_Image;?>" class="blah" style="margin-left: 10px;top: -30px;position: relative;width: 70px;height: 100px;">

			</div>
		</div>

		<div class="form-group"> 

			<label for="Edit_Movie_Name">Movie Name</label>
			<input type="text" class="form-control" id="Edit_Movie_Name" name="Edit_Movie_Name" value="<?php echo $Movie_Name ; ?>" required="required" maxlength="80">
		</div>

		<div class="form-group" style="display: inline-flex;"> 
			<div class="col-lg-5 col-md-5 col-sm-3 col-xs-3">
				<label for="Edit_Movie_Links_480p">480p Links</label>
				<input type="text" class="form-control" id="Edit_Movie_Links_480p" name="Edit_Movie_Links_480p" value="<?php echo $Movie_Links_480p ; ?>">
			</div>
			<div class="col-lg-4 col-md-4 col-sm-3 col-xs-3">
				<label for="Edit_Movie_Links_480p_Watch">Watch Link</label>
				<input type="text" class="form-control" id="Edit_Movie_Links_480p_Watch" name="Edit_Movie_Links_480p_Watch" value="<?php echo $Movie_Links_480p_Watch ; ?>">
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
				<label for="Edit_Movie_Size_480p">480p Size</label>
				<input type="text" class="form-control" id="Edit_Movie_Size_480p" name="Edit_Movie_Size_480p" value="<?php echo $Movie_Size_480p ; ?>">
			</div>
		</div>
		<div class="form-group" style="display: inline-flex;">
			<div class="col-lg-5 col-md-5 col-sm-3 col-xs-3">
				<label for="Edit_Movie_Links_720p">720p Links</label>
				<input type="text" class="form-control" id="Edit_Movie_Links_720p" name="Edit_Movie_Links_720p" value="<?php echo $Movie_Links_720p ; ?>">
			</div>
			<div class="col-lg-4 col-md-4 col-sm-3 col-xs-3">
				<label for="Edit_Movie_Links_720p_Watch">Watch Link</label>
				<input type="text" class="form-control" id="Edit_Movie_Links_720p_Watch" name="Edit_Movie_Links_720p_Watch" value="<?php echo $Movie_Links_720p_Watch ; ?>">
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
				<label for="Edit_Movie_Size_720p">720p Size</label>
				<input type="text" class="form-control" id="Edit_Movie_Size_720p" name="Edit_Movie_Size_720p" value="<?php echo $Movie_Size_720p ; ?>">
			</div>
		</div>
		<div class="form-group" style="display: inline-flex;">
			<div class="col-lg-5 col-md-5 col-sm-3 col-xs-3">
				<label for="Edit_Movie_Links_1080p">1080p_links</label>
				<input type="text" class="form-control" id="Edit_Movie_Links_1080p" name="Edit_Movie_Links_1080p" value="<?php echo $Movie_Links_1080p ; ?>">
			</div>
			<div class="col-lg-4 col-md-4 col-sm-3 col-xs-3">
				<label for="Edit_Movie_Links_1080p_Watch">Watch Link</label>
				<input type="text" class="form-control" id="Edit_Movie_Links_1080p_Watch" name="Edit_Movie_Links_1080p_Watch" value="<?php echo $Movie_Links_1080p_Watch ; ?>">
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
				<label for="Edit_Movie_Size_1080p">1080p Size</label>
				<input type="text" class="form-control" id="Edit_Movie_Size_1080p" name="Edit_Movie_Size_1080p" value="<?php echo $Movie_Size_1080p ; ?>">
			</div>
		</div> 
		<div class="form-group">

			<label for="Edit_Movie_Description">Movie Description</label>
			<textarea type="text" class="form-control" id="Edit_Movie_Description" name="Edit_Movie_Description" required="required" style="height: 220px;"  required="required"><?php echo $Movie_Description ;?></textarea>
		</div>                      
		<div class="form-group">

			<label for="Edit_Movie_ShortName">Movie ShortName</label>
			<input type="text" class="form-control" id="Edit_Movie_ShortName" name="Edit_Movie_ShortName" value="<?php echo $Movie_ShortName ; ?>" required="required">
		</div>                      
		<div class="form-group">

			<label for="Edit_Movie_IMDb_Rating">IMDb Rating</label>
			<input type="text" class="form-control" id="Edit_Movie_IMDb_Rating" name="Edit_Movie_IMDb_Rating" value="<?php echo $Movie_IMDb_Rating ; ?>" required="required">
		</div>                      
		<div class="form-group">

			<label for="Edit_Movie_Director">Movie Director</label>
			<input type="text" class="form-control" id="Edit_Movie_Director" name="Edit_Movie_Director"  value="<?php echo $Movie_Director ; ?>"required="required">
		</div>                       
		<div class="form-group">

			<label for="Edit_Movie_Stars">Movie Stars</label>
			<input type="text" class="form-control" id="Edit_Movie_Stars" name="Edit_Movie_Stars" value="<?php echo $Movie_Stars ; ?>" required="required">
		</div> 

       <div class="form-group" style="text-align: center;">

        <label>Year</label>
        <div style="display: inline-flex;">
         <select name="Edit_Movie_Year" style="margin-left: 5px;">
          <option value="2021" <?php if ($Movie_Year == "2021") {echo "selected";} ?> >2021</option>
          <option value="2020" <?php if ($Movie_Year == "2020") {echo "selected";} ?> >2020</option>
          <option value="2019" <?php if ($Movie_Year == "2019") {echo "selected";} ?> >2019</option>  
          <option value="2018" <?php if ($Movie_Year == "2018") {echo "selected";} ?> >2018</option>
          <option value="2017" <?php if ($Movie_Year == "2017") {echo "selected";} ?> >2017</option> 
          <option value="2016" <?php if ($Movie_Year == "2016") {echo "selected";} ?> >2016</option>
          <option value="2015" <?php if ($Movie_Year == "2015") {echo "selected";} ?> >2015</option>         
          <option value="2010-2015" <?php if ($Movie_Year == "2010-2015") {echo "selected";} ?> >2010-2015</option>
          <option value="2005-2010" <?php if ($Movie_Year == "2005-2010") {echo "selected";} ?> >2005-2010</option> 
          <option value="2000-2005" <?php if ($Movie_Year == "2000-2005") {echo "selected";} ?> >2000-2005</option> 
          <option value="1980-2000" <?php if ($Movie_Year == "1980-2000") {echo "selected";} ?> >1980-2000</option> 


      </select>
  </div>
  <label>Movie Catagory</label>
  <div style="display: inline-flex;">
     <select name="Edit_Movie_Catagory" style="margin-left: 5px;">
      <option value="Hollywood" <?php if ($Movie_Catagory == "Hollywood") {echo "selected";} ?> >Hollywood</option>
      <option value="Web Series" <?php if ($Movie_Catagory == "Web Series") {echo "selected";} ?> >Web Series</option>
      <option value="Hindi Movies" <?php if ($Movie_Catagory == "Hindi Movies") {echo "selected";} ?> >Hindi Movies</option>  
  </select>
</div>
</div>

</div>

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="display: inline-flex;">
  <div class="vl"></div>
  <div style="width: 100%">

    <div style="font-weight: 800"><p>Extra Links</p></div>
    <div class="form-group" style="display: inline-flex;">
      <div class="col-lg-1 col-md-1 col-sm-3 col-xs-3">
        <label>S</label>
        <label>S2:</label>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-3 col-xs-3">
        <label for="Edit_Movie_Links_480p_2">480p Link</label>
        <input type="text" class="form-control" id="Edit_Movie_Links_480p_2" name="Edit_Movie_Links_480p_2" value="<?php echo $Movie_Links_480p_2 ; ?>">
    </div>
    <div class="col-lg-4 col-md-4 col-sm-3 col-xs-3">
        <label for="Edit_Movie_Links_720p_2">720p Link</label>
        <input type="text" class="form-control" id="Edit_Movie_Links_720p_2" name="Edit_Movie_Links_720p_2" value="<?php echo $Movie_Links_720p_2 ; ?>">
    </div>
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
        <label for="Edit_Movie_Size_1080p_2">1080p link</label>
        <input type="text" class="form-control" id="Edit_Movie_Links_1080p_2" name="Edit_Movie_Links_1080p_2" value="<?php echo $Movie_Links_1080p_2 ; ?>">
    </div>
</div> 
<div class="form-group" style="display: inline-flex;">
  <div class="col-lg-1 col-md-1 col-sm-3 col-xs-3">
    <label>S3:</label>
</div>
<div class="col-lg-4 col-md-4 col-sm-3 col-xs-3">
    <input type="text" class="form-control" id="Edit_Movie_Links_480p_3" name="Edit_Movie_Links_480p_3" value="<?php echo $Movie_Links_480p_3 ; ?>">
</div>
<div class="col-lg-4 col-md-4 col-sm-3 col-xs-3">
    <input type="text" class="form-control" id="Edit_Movie_Links_720p_3" name="Edit_Movie_Links_720p_3" value="<?php echo $Movie_Links_720p_3 ; ?>">
</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
    <input type="text" class="form-control" id="Edit_Movie_Links_1080p_3" name="Edit_Movie_Links_1080p_3" value="<?php echo $Movie_Links_1080p_3 ; ?>">
</div>
</div> 
<div class="form-group" style="display: inline-flex;">
  <div class="col-lg-1 col-md-1 col-sm-3 col-xs-3">
    <label>S4:</label>
</div>
<div class="col-lg-4 col-md-4 col-sm-3 col-xs-3">
    <input type="text" class="form-control" id="Edit_Movie_Links_480p_4" name="Edit_Movie_Links_480p_4" value="<?php echo $Movie_Links_480p_4 ; ?>">
</div>
<div class="col-lg-4 col-md-4 col-sm-3 col-xs-3">
    <input type="text" class="form-control" id="Edit_Movie_Links_720p_4" name="Edit_Movie_Links_720p_4" value="<?php echo $Movie_Links_720p_4 ; ?>">
</div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
    <input type="text" class="form-control" id="Edit_Movie_Links_1080p_4" name="Edit_Movie_Links_1080p_4" value="<?php echo $Movie_Links_1080p_4 ; ?>">
</div>
</div> 

<div class="form-group">
    <label style="margin-top: 15px; margin-bottom: 5px">SS 1</label><br>
    <div style="display: inline-flex;height: 40px;width: 100%;">
     <input type="file" class="form-control ssi1" name="Edit_Ss_Images1" onchange="ssi1(this);" accept="image/png, image/jpeg" style="height: 43px;" accept="image/*">
     <img src="photo/<?php echo $Ss_Images1;?>" class="blah1" style="margin-left: 10px;top: -30px;position: relative;width: 70px;height: 70px;">
 </div>
 <label style="margin-top: 15px; margin-bottom: 5px">SS 2</label><br>
 <div style="display: inline-flex;height: 40px;width: 100%;">
     <input type="file" class="form-control ssi2" id="Edit_Ss_Images2" name="Edit_Ss_Images2" onchange="ssi2(this);" style="height: 43px;" accept="image/*">
     <img src="photo/<?php echo $Ss_Images2;?>" class="blah2" style="margin-left: 10px;top: -30px;position: relative;width: 70px;height: 70px;">
 </div>
 <label style="margin-top: 15px; margin-bottom: 5px">SS 3</label><br>
 <div style="display: inline-flex;height: 40px;width: 100%;">
     <input type="file" class="form-control ssi3" id="Edit_Ss_Images3" name="Edit_Ss_Images3" onchange="ssi3(this);" style="height: 43px;" accept="image/*">
     <img src="photo/<?php echo $Ss_Images3;?>" class="blah3" style="margin-left: 10px;top: -30px;position: relative;width: 70px;height: 70px;">
 </div>
 <label style="margin-top: 15px; margin-bottom: 5px">SS 4</label><br>
 <div style="display: inline-flex;height: 40px;width: 100%;">
     <input type="file" class="form-control ssi4" id="Edit_Ss_Images4" name="Edit_Ss_Images4" onchange="ssi4(this);" style="height: 43px;" accept="image/*">
     <img src="photo/<?php echo $Ss_Images4;?>" class="blah4" style="margin-left: 10px;top: -30px;position: relative;width: 70px;height: 70px;">
 </div>
 <label style="margin-top: 15px; margin-bottom: 5px">SS 5</label><br>
 <div style="display: inline-flex;height: 40px;width: 100%;">
     <input type="file" class="form-control ssi5" id="Edit_Ss_Images5" name="Edit_Ss_Images5" onchange="ssi5(this);" style="height: 43px;" accept="image/*">
     <img src="photo/<?php echo $Ss_Images5;?>" class="blah5" style="margin-left: 10px;top: -30px;position: relative;width: 70px;height: 70px;">
 </div>
 <label style="margin-top: 15px; margin-bottom: 5px">SS 6</label><br>
 <div style="display: inline-flex;height: 40px;width: 100%;">
     <input type="file" class="form-control ssi6" id="Edit_Ss_Images6" name="Edit_Ss_Images6" onchange="ssi6(this);" style="height: 43px;" accept="image/*">
     <img src="photo/<?php echo $Ss_Images6;?>" class="blah6" style="margin-left: 10px;top: -30px;position: relative;width: 70px;height: 70px;">
 </div>

</div>
<div class="form-group">
    <div class="gallery"></div>
</div>
<div class="form-group">
    <div class="row">
     <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
      <input type="checkbox" id="Edit_Latest_Released_c" name="Edit_Latest_Released_c" value="yes" <?php if ($Latest_Released_c == "yes") {echo "checked";} ?> >
      <label for="Edit_Latest_Released_c">Latest Released</label><br>
      <input type="checkbox" id="Edit_Dual_Audio_c" name="Edit_Dual_Audio_c" value="yes" <?php if ($Dual_Audio_c == "yes") {echo "checked";} ?> >
      <label for="Edit_Dual_Audio_c">Dual Audio</label><br>
      <input type="checkbox" id="Edit_Multi_Audio_c" name="Edit_Multi_Audio_c" value="yes" <?php if ($Multi_Audio_c == "yes") {echo "checked";} ?> >
      <label for="Edit_Multi_Audio_c">Multi Audio</label><br>
      <input type="checkbox" id="Edit_English_L_c" name="Edit_English_L_c" value="yes"<?php if ($English_L_c == "yes") {echo "checked";} ?> >
      <label for="Edit_English_L_c">Only English</label><br>
      <input type="checkbox" id="Edit_Hindi_L_c" name="Edit_Hindi_L_c" value="yes"<?php if ($Hindi_L_c == "yes") {echo "checked";} ?> >
      <label for="Edit_Hindi_L_c">Only Hindi</label><br>
      <input type="checkbox" id="Edit_Adult_Movie_c" name="Edit_Adult_Movie_c" value="yes" <?php if ($Adult_Movie_c == "yes") {echo "checked";} ?> >
      <label for="Edit_Adult_Movie_c">Adult Movie</label><br>
      <input type="checkbox" id="Edit_Asian_Movie_c" name="Edit_Asian_Movie_c" value="yes" <?php if ($Asian_Movie_c == "yes") {echo "checked";} ?> >
      <label for="Edit_Asian_Movie_c">Asian Movie</label><br>
      <input type="checkbox" id="Edit_English_Movie_c" name="Edit_English_Movie_c" value="yes" <?php if ($English_Movie_c == "yes") {echo "checked";} ?> >
      <label for="Edit_English_Movie_c">English Movie</label><br>
      <input type="checkbox" id="Edit_Hacking_Movie_c" name="Edit_Hacking_Movie_c" value="yes" <?php if ($Hacking_Movie_c == "yes") {echo "checked";} ?> >
      <label for="Edit_Hacking_Movie_c">Hacking Movie</label><br>
  </div>
  <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
      <input type="checkbox" id="Edit_480p_Movie_c" name="Edit_480p_Movie_c" value="yes" <?php if ($Movie_c_480p == "yes") {echo "checked";} ?> >
      <label for="Edit_480p_Movie_c">480p Movie</label><br>
      <input type="checkbox" id="Edit_720p_Movie_c" name="Edit_720p_Movie_c" value="yes" <?php if ($Movie_c_720p == "yes") {echo "checked";} ?> >
      <label for="Edit_Edit_720p_Movie_c">720p Movie</label><br>
      <input type="checkbox" id="Edit_1080p_Movie_c" name="Edit_1080p_Movie_c" value="yes" <?php if ($Movie_c_1080p == "yes") {echo "checked";} ?> >
      <label for="Edit_1080p_Movie_c">1080p Movie</label><br>
      <input type="checkbox" id="Edit_4K_Ultra_HD_c" name="Edit_4K_Ultra_HD_c" value="yes" <?php if ($Ultra_HD_c_4K == "yes") {echo "checked";} ?> >
      <label for="Edit_4K_Ultra_HD_c">4K Ultra HD</label><br>
      <input type="checkbox" id="Edit_300mb_Movie_c" name="Edit_300mb_Movie_c" value="yes" <?php if ($Movie_c_300mb == "yes") {echo "checked";} ?> >
      <label for="Edit_300mb_Movie_c">300mb Movie</label><br>
      <input type="checkbox" id="Edit_500mb_Movie_c" name="Edit_500mb_Movie_c" value="yes" <?php if ($Movie_c_500mb == "yes") {echo "checked";} ?> >
      <label for="Edit_500mb_Movie_c">500mb Movie</label><br>
      <input type="checkbox" id="Edit_700mb_Movie_c" name="Edit_700mb_Movie_c" value="yes" <?php if ($Movie_c_700mb == "yes") {echo "checked";} ?> >
      <label for="Edit_700mb_Movie_c">700mb Movie</label><br>
      <input type="checkbox" id="Edit_1gb_Movie_c" name="Edit_1gb_Movie_c" value="yes" <?php if ($Movie_c_1gb == "yes") {echo "checked";} ?> >
      <label for="Edit_1gb_Movie_c">1gb Movie</label><br>
  </div>
  <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">

      <input type="checkbox" id="Edit_G_Action" name="Edit_G_Action" value="yes" <?php if ($G_Action == "yes") {echo "checked";} ?> >
      <label for="Edit_G_Action">Action</label><br>                              <input type="checkbox" id="Edit_G_Adventure" name="Edit_G_Adventure" value="yes" <?php if ($G_Adventure == "yes") {echo "checked";} ?> >
      <label for="Edit_G_Adventure">Adventure</label><br>                              <input type="checkbox" id="Edit_G_Animated" name="Edit_G_Animated" value="yes" <?php if ($G_Animated == "yes") {echo "checked";} ?> >
      <label for="Edit_G_Animated">Animated</label><br>                              <input type="checkbox" id="Edit_G_Comedy" name="Edit_G_Comedy" value="yes" <?php if ($G_Comedy == "yes") {echo "checked";} ?> >
      <label for="Edit_G_Comedy">Comedy</label><br>                              <input type="checkbox" id="Edit_G_Crime" name="Edit_G_Crime" value="yes" <?php if ($G_Crime == "yes") {echo "checked";} ?> >
      <label for="Edit_G_Crime">Crime</label><br>                              <input type="checkbox" id="Edit_G_Fantasy" name="Edit_G_Fantasy" value="yes" <?php if ($G_Fantasy == "yes") {echo "checked";} ?> >
      <label for="Edit_G_Fantasy">Fantasy</label><br>                              <input type="checkbox" id="Edit_G_Horror" name="Edit_G_Horror" value="yes" <?php if ($G_Horror == "yes") {echo "checked";} ?> >
      <label for="Edit_G_Horror">Horror</label><br>                              <input type="checkbox" id="Edit_G_Mystery" name="Edit_G_Mystery" value="yes" <?php if ($G_Mystery == "yes") {echo "checked";} ?> >
      <label for="Edit_G_Mystery">Mystery</label><br>                              <input type="checkbox" id="Edit_G_Romance" name="Edit_G_Romance" value="yes" <?php if ($G_Romance == "yes") {echo "checked";} ?> >
      <label for="Edit_G_Romance">Romance</label><br>                              <input type="checkbox" id="Edit_G_Sci-fi" name="Edit_G_Sci-fi" value="yes" <?php if ($G_Sci_fi == "yes") {echo "checked";} ?> >
      <label for="Edit_G_Sci-fi">Sci-fi</label><br>                              <input type="checkbox" id="Edit_G_Thriller" name="Edit_G_Thriller" value="yes" <?php if ($G_Thriller == "yes") {echo "checked";} ?> >
      <label for="Edit_G_Thriller">Thriller</label><br>
  </div>
</div>
</div>

</div>
</div>

<?php 
if ($Movie_Catagory == "Web Series") {
   echo "<script>$('.showhidediv').show();</script>";
}else{
   echo "<script>$('.showhidediv').hide();</script>";
}	
?> 


<div class="webseries_sh showhidediv col-lg-12" id="webseries_sh">
  <div class="row" style="font-weight: bold; margin-bottom: 15px">
   <div class="col-lg-2">Webseries</div>
   <div class="col-lg-4">
    <label for="">480p Links</label>
</div>
<div class="col-lg-3">
    <label for="">720p Links</label>
</div>
<div class="col-lg-3">
    <label for="">1080p Links</label>
</div>
</div>  

<div class="row" style="margin-bottom: 10px;">
   <div class="col-lg-2">Episode 1</div>
   <div class="col-lg-4 row" style="margin: 0!important;">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_480p_Links_E1" name="Edit_W_480p_Links_E1" placeholder="Download Link" value="<?php echo $W_480p_Links_E1; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_480p_Watch_Links_E1" name="Edit_W_480p_Watch_Links_E1" placeholder="Watch Link" value="<?php echo $W_480p_Watch_Links_E1 ; ?>">
 </div>        
</div>
<div class="col-lg-3 row" style="margin: 0!important">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_720p_Links_E1" name="Edit_W_720p_Links_E1" placeholder="Download Link" value="<?php echo $W_720p_Links_E1 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_720p_Watch_Links_E1" name="Edit_W_720p_Watch_Links_E1" placeholder="Watch Link" value="<?php echo $W_720p_Watch_Links_E1 ; ?>">
 </div>  
</div>
<div class="col-lg-3 row" style="margin: 0!important">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_1080p_Links_E1" name="Edit_W_1080p_Links_E1" placeholder="Download Link" value="<?php echo $W_1080p_Links_E1 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
     <input type="text" class="form-control" id="Edit_W_1080p_Watch_Links_E1" name="Edit_W_1080p_Watch_Links_E1" placeholder="Watch Link" value="<?php echo $W_1080p_Watch_Links_E1 ; ?>">
 </div>  
</div>
</div> 

<div class="row" style="margin-bottom: 10px;">
   <div class="col-lg-2">Episode 2</div>
   <div class="col-lg-4 row" style="margin: 0!important;">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_480p_Links_E2" name="Edit_W_480p_Links_E2" placeholder="Download Link" value="<?php echo $W_480p_Links_E2 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_480p_Watch_Links_E2" name="Edit_W_480p_Watch_Links_E2" placeholder="Watch Link" value="<?php echo $W_480p_Watch_Links_E2 ; ?>">
 </div>        
</div>
<div class="col-lg-3 row" style="margin: 0!important">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_720p_Links_E2" name="Edit_W_720p_Links_E2" placeholder="Download Link" value="<?php echo $W_720p_Links_E2 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_720p_Watch_Links_E2" name="Edit_W_720p_Watch_Links_E2" placeholder="Watch Link" value="<?php echo $W_720p_Watch_Links_E2 ; ?>">
 </div>  
</div>
<div class="col-lg-3 row" style="margin: 0!important">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_1080p_Links_E2" name="Edit_W_1080p_Links_E2" placeholder="Download Link" value="<?php echo $W_1080p_Links_E2 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
     <input type="text" class="form-control" id="Edit_W_1080p_Watch_Links_E2" name="Edit_W_1080p_Watch_Links_E2Edit_W_1080p_Links_E2" placeholder="Watch Link" value="<?php echo $W_1080p_Watch_Links_E2 ; ?>">
 </div>  
</div>
</div> 

<div class="row" style="margin-bottom: 10px;">
   <div class="col-lg-2">Episode 3</div>
   <div class="col-lg-4 row" style="margin: 0!important;">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_480p_Links_E3" name="Edit_W_480p_Links_E3" placeholder="Download Link" value="<?php echo $W_480p_Links_E3 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_480p_Watch_Links_E3" name="Edit_W_480p_Watch_Links_E3" placeholder="Watch Link" value="<?php echo $W_480p_Watch_Links_E3 ; ?>">
 </div>        
</div>
<div class="col-lg-3 row" style="margin: 0!important">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_720p_Links_E3" name="Edit_W_720p_Links_E3" placeholder="Download Link" value="<?php echo $W_720p_Links_E3 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_720p_Watch_Links_E3" name="Edit_W_720p_Watch_Links_E3" placeholder="Watch Link" value="<?php echo $W_720p_Watch_Links_E3 ; ?>">
 </div>  
</div>
<div class="col-lg-3 row" style="margin: 0!important">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_1080p_Links_E3" name="Edit_W_1080p_Links_E3" placeholder="Download Link" value="<?php echo $W_1080p_Links_E3 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
     <input type="text" class="form-control" id="Edit_W_1080p_Watch_Links_E3" name="Edit_W_1080p_Watch_Links_E3" placeholder="Watch Link" value="<?php echo $W_1080p_Watch_Links_E3 ; ?>">
 </div>  
</div>
</div> 


<div class="row" style="margin-bottom: 10px;">
   <div class="col-lg-2">Episode 4</div>
   <div class="col-lg-4 row" style="margin: 0!important;">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_480p_Links_E4" name="Edit_W_480p_Links_E4" placeholder="Download Link" value="<?php echo $W_480p_Links_E4 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_480p_Watch_Links_E4" name="Edit_W_480p_Watch_Links_E4" placeholder="Watch Link" value="<?php echo $W_480p_Watch_Links_E4 ; ?>">
 </div>        
</div>
<div class="col-lg-3 row" style="margin: 0!important">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_720p_Links_E4" name="Edit_W_720p_Links_E4" placeholder="Download Link" value="<?php echo $W_720p_Links_E4 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_720p_Watch_Links_E4" name="Edit_W_720p_Watch_Links_E4" placeholder="Watch Link" value="<?php echo $W_720p_Watch_Links_E4 ; ?>">
 </div>  
</div>
<div class="col-lg-3 row" style="margin: 0!important">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_1080p_Links_E4" name="Edit_W_1080p_Links_E4" placeholder="Download Link" value="<?php echo $W_1080p_Links_E4 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
     <input type="text" class="form-control" id="Edit_W_1080p_Watch_Links_E4" name="Edit_W_1080p_Watch_Links_E4" placeholder="Watch Link" value="<?php echo $W_1080p_Watch_Links_E4 ; ?>">
 </div>  
</div>
</div> 

<div class="row" style="margin-bottom: 10px;">
   <div class="col-lg-2">Episode 5</div>
   <div class="col-lg-4 row" style="margin: 0!important;">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_480p_Links_E5" name="Edit_W_480p_Links_E5" placeholder="Download Link" value="<?php echo $W_480p_Links_E5 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_480p_Watch_Links_E5" name="Edit_W_480p_Watch_Links_E5" placeholder="Watch Link" value="<?php echo $W_480p_Watch_Links_E5 ; ?>">
 </div>        
</div>
<div class="col-lg-3 row" style="margin: 0!important">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_720p_Links_E5" name="Edit_W_720p_Links_E5" placeholder="Download Link" value="<?php echo $W_720p_Links_E5 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_720p_Watch_Links_E5" name="Edit_W_720p_Watch_Links_E5" placeholder="Watch Link" value="<?php echo $W_720p_Watch_Links_E5 ; ?>">
 </div>  
</div>
<div class="col-lg-3 row" style="margin: 0!important">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_1080p_Links_E5" name="Edit_W_1080p_Links_E5" placeholder="Download Link" value="<?php echo $W_1080p_Links_E5 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
     <input type="text" class="form-control" id="Edit_W_1080p_Watch_Links_E5" name="Edit_W_1080p_Watch_Links_E5" placeholder="Watch Link" value="<?php echo $W_1080p_Watch_Links_E5 ; ?>">
 </div>  
</div>
</div> 

<div class="row" style="margin-bottom: 10px;">
   <div class="col-lg-2">Episode 6</div>
   <div class="col-lg-4 row" style="margin: 0!important;">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_480p_Links_E6" name="Edit_W_480p_Links_E6" placeholder="Download Link" value="<?php echo $W_480p_Links_E6 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_480p_Watch_Links_E6" name="Edit_W_480p_Watch_Links_E6" placeholder="Watch Link" value="<?php echo $W_480p_Watch_Links_E6 ; ?>">
 </div>        
</div>
<div class="col-lg-3 row" style="margin: 0!important">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_720p_Links_E6" name="Edit_W_720p_Links_E6" placeholder="Download Link" value="<?php echo $W_720p_Links_E6 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_720p_Watch_Links_E6" name="Edit_W_720p_Watch_Links_E6" placeholder="Watch Link" value="<?php echo $W_720p_Watch_Links_E6 ; ?>">
 </div>  
</div>
<div class="col-lg-3 row" style="margin: 0!important">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_1080p_Links_E6" name="Edit_W_1080p_Links_E6" placeholder="Download Link" value="<?php echo $W_1080p_Links_E6 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
     <input type="text" class="form-control" id="Edit_W_1080p_Watch_Links_E6" name="Edit_W_1080p_Watch_Links_E6" placeholder="Watch Link" value="<?php echo $W_1080p_Watch_Links_E6 ; ?>">
 </div>  
</div>
</div> 

<div class="row" style="margin-bottom: 10px;">
   <div class="col-lg-2">Episode 7</div>
   <div class="col-lg-4 row" style="margin: 0!important;">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_480p_Links_E7" name="Edit_W_480p_Links_E7" placeholder="Download Link" value="<?php echo $W_480p_Links_E7 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_480p_Watch_Links_E7" name="Edit_W_480p_Watch_Links_E7" placeholder="Watch Link" value="<?php echo $W_480p_Watch_Links_E7 ; ?>">
 </div>        
</div>
<div class="col-lg-3 row" style="margin: 0!important">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_720p_Links_E7" name="Edit_W_720p_Links_E7" placeholder="Download Link" value="<?php echo $W_720p_Links_E7 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_720p_Watch_Links_E7" name="Edit_W_720p_Watch_Links_E7" placeholder="Watch Link" value="<?php echo $W_720p_Watch_Links_E7 ; ?>">
 </div>  
</div>
<div class="col-lg-3 row" style="margin: 0!important">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_1080p_Links_E7" name="Edit_W_1080p_Links_E7" placeholder="Download Link" value="<?php echo $W_1080p_Links_E7 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
     <input type="text" class="form-control" id="Edit_W_1080p_Watch_Links_E7" name="Edit_W_1080p_Watch_Links_E7" placeholder="Watch Link" value="<?php echo $W_1080p_Watch_Links_E7 ; ?>">
 </div>  
</div>
</div> 

<div class="row" style="margin-bottom: 10px;">
   <div class="col-lg-2">Episode 8</div>
   <div class="col-lg-4 row" style="margin: 0!important;">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_480p_Links_E8" name="Edit_W_480p_Links_E8" placeholder="Download Link" value="<?php echo $W_480p_Links_E8 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_480p_Watch_Links_E8" name="Edit_W_480p_Watch_Links_E8" placeholder="Watch Link" value="<?php echo $W_480p_Watch_Links_E8 ; ?>">
 </div>        
</div>
<div class="col-lg-3 row" style="margin: 0!important">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_720p_Links_E8" name="Edit_W_720p_Links_E8" placeholder="Download Link" value="<?php echo $W_720p_Links_E8 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_720p_Watch_Links_E8" name="Edit_W_720p_Watch_Links_E8" placeholder="Watch Link" value="<?php echo $W_720p_Watch_Links_E8 ; ?>">
 </div>  
</div>
<div class="col-lg-3 row" style="margin: 0!important">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_1080p_Links_E8" name="Edit_W_1080p_Links_E8" placeholder="Download Link" value="<?php echo $W_1080p_Links_E8 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
     <input type="text" class="form-control" id="Edit_W_1080p_Watch_Links_E8" name="Edit_W_1080p_Watch_Links_E8" placeholder="Watch Link" value="<?php echo $W_1080p_Watch_Links_E8 ; ?>">
 </div>  
</div>
</div> 

<div class="row" style="margin-bottom: 10px;">
   <div class="col-lg-2">Episode 9</div>
   <div class="col-lg-4 row" style="margin: 0!important;">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_480p_Links_E9" name="Edit_W_480p_Links_E9" placeholder="Download Link" value="<?php echo $W_480p_Links_E9 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_480p_Watch_Links_E9" name="Edit_W_480p_Watch_Links_E9" placeholder="Watch Link" value="<?php echo $W_480p_Watch_Links_E9 ; ?>">
 </div>        
</div>
<div class="col-lg-3 row" style="margin: 0!important">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_720p_Links_E9" name="Edit_W_720p_Links_E9" placeholder="Download Link" value="<?php echo $W_720p_Links_E9 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_720p_Watch_Links_E9" name="Edit_W_720p_Watch_Links_E9" placeholder="Watch Link" value="<?php echo $W_720p_Watch_Links_E9 ; ?>">
 </div>  
</div>
<div class="col-lg-3 row" style="margin: 0!important">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_1080p_Links_E9" name="Edit_W_1080p_Links_E9" placeholder="Download Link" value="<?php echo $W_1080p_Links_E9 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
     <input type="text" class="form-control" id="Edit_W_1080p_Watch_Links_E9" name="Edit_W_1080p_Watch_Links_E9" placeholder="Watch Link" value="<?php echo $W_1080p_Watch_Links_E9 ; ?>">
 </div>  
</div>
</div> 

<div class="row" style="margin-bottom: 10px;">
   <div class="col-lg-2">Episode 10</div>
   <div class="col-lg-4 row" style="margin: 0!important;">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_480p_Links_E10" name="Edit_W_480p_Links_E10" placeholder="Download Link" value="<?php echo $W_480p_Links_E10 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_480p_Watch_Links_E10" name="Edit_W_480p_Watch_Links_E10" placeholder="Watch Link" value="<?php echo $W_480p_Watch_Links_E10 ; ?>">
 </div>        
</div>
<div class="col-lg-3 row" style="margin: 0!important">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_720p_Links_E10" name="Edit_W_720p_Links_E10" placeholder="Download Link" value="<?php echo $W_720p_Links_E10 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_720p_Watch_Links_E10" name="Edit_W_720p_Watch_Links_E10" placeholder="Watch Link" value="<?php echo $W_720p_Watch_Links_E10 ; ?>">
 </div>  
</div>
<div class="col-lg-3 row" style="margin: 0!important">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_1080p_Links_E10" name="Edit_W_1080p_Links_E10" placeholder="Download Link" value="<?php echo $W_1080p_Links_E10 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
     <input type="text" class="form-control" id="Edit_W_1080p_Watch_Links_E10" name="Edit_W_1080p_Watch_Links_E10" placeholder="Watch Link" value="<?php echo $W_1080p_Watch_Links_E10 ; ?>">
 </div>  
</div>
</div> 

<div class="row" style="margin-bottom: 10px;">
   <div class="col-lg-2">Episode 11</div>
   <div class="col-lg-4 row" style="margin: 0!important;">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_480p_Links_E11" name="Edit_W_480p_Links_E11" placeholder="Download Link" value="<?php echo $W_480p_Links_E11 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_480p_Watch_Links_E11" name="Edit_W_480p_Watch_Links_E11" placeholder="Watch Link" value="<?php echo $W_480p_Watch_Links_E11 ; ?>">
 </div>        
</div>
<div class="col-lg-3 row" style="margin: 0!important">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_720p_Links_E11" name="Edit_W_720p_Links_E11" placeholder="Download Link" value="<?php echo $W_720p_Links_E11 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_720p_Watch_Links_E11" name="Edit_W_720p_Watch_Links_E11" placeholder="Watch Link" value="<?php echo $W_720p_Watch_Links_E11 ; ?>">
 </div>  
</div>
<div class="col-lg-3 row" style="margin: 0!important">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_1080p_Links_E11" name="Edit_W_1080p_Links_E11" placeholder="Download Link" value="<?php echo $W_1080p_Links_E11 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
     <input type="text" class="form-control" id="Edit_W_1080p_Watch_Links_E11" name="Edit_W_1080p_Watch_Links_E11" placeholder="Watch Link" value="<?php echo $W_1080p_Watch_Links_E11 ; ?>">
 </div>  
</div>
</div> 

<div class="row" style="margin-bottom: 10px;">
   <div class="col-lg-2">Episode 12</div>
   <div class="col-lg-4 row" style="margin: 0!important;">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_480p_Links_E12" name="Edit_W_480p_Links_E12" placeholder="Download Link" value="<?php echo $W_480p_Links_E12 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_480p_Watch_Links_E12" name="Edit_W_480p_Watch_Links_E12" placeholder="Watch Link" value="<?php echo $W_480p_Watch_Links_E12 ; ?>">
 </div>        
</div>
<div class="col-lg-3 row" style="margin: 0!important">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_720p_Links_E12" name="Edit_W_720p_Links_E12" placeholder="Download Link" value="<?php echo $W_720p_Links_E12 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_720p_Watch_Links_E12" name="W_720p_Watch_Links_E12" placeholder="Watch Link" value="<?php echo $W_720p_Watch_Links_E12 ; ?>">
 </div>  
</div>
<div class="col-lg-3 row" style="margin: 0!important">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_1080p_Links_E12" name="Edit_W_1080p_Links_E12" placeholder="Download Link" value="<?php echo $W_1080p_Links_E12 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
     <input type="text" class="form-control" id="Edit_W_1080p_Watch_Links_E12" name="Edit_W_1080p_Watch_Links_E12" placeholder="Watch Link" value="<?php echo $W_1080p_Watch_Links_E12 ; ?>">
 </div>  
</div>
</div> 

<div class="row" style="margin-bottom: 10px;">
   <div class="col-lg-2">Episode 13</div>
   <div class="col-lg-4 row" style="margin: 0!important;">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_480p_Links_E13" name="Edit_W_480p_Links_E13" placeholder="Download Link" value="<?php echo $W_480p_Links_E13 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_480p_Watch_Links_E13" name="Edit_W_480p_Watch_Links_E13" placeholder="Watch Link" value="<?php echo $W_480p_Watch_Links_E13 ; ?>">
 </div>        
</div>
<div class="col-lg-3 row" style="margin: 0!important">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_720p_Links_E13" name="Edit_W_720p_Links_E13" placeholder="Download Link" value="<?php echo $W_720p_Links_E13 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_720p_Watch_Links_E13" name="Edit_W_720p_Watch_Links_E13" placeholder="Watch Link" value="<?php echo $W_720p_Watch_Links_E13 ; ?>">
 </div>  
</div>
<div class="col-lg-3 row" style="margin: 0!important">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_1080p_Links_E13" name="Edit_W_1080p_Links_E13" placeholder="Download Link" value="<?php echo $W_1080p_Links_E13 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
     <input type="text" class="form-control" id="Edit_W_1080p_Watch_Links_E13" name="Edit_W_1080p_Watch_Links_E13" placeholder="Watch Link" value="<?php echo $W_1080p_Watch_Links_E13 ; ?>">
 </div>  
</div>
</div> 

<div class="row" style="margin-bottom: 10px;">
   <div class="col-lg-2">Episode 14</div>
   <div class="col-lg-4 row" style="margin: 0!important;">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_480p_Links_E14" name="Edit_W_480p_Links_E14" placeholder="Download Link" value="<?php echo $W_480p_Links_E14 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_480p_Watch_Links_E14" name="Edit_W_480p_Watch_Links_E14" placeholder="Watch Link" value="<?php echo $W_480p_Watch_Links_E14 ; ?>">
 </div>        
</div>
<div class="col-lg-3 row" style="margin: 0!important">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_720p_Links_E14" name="Edit_W_720p_Links_E14" placeholder="Download Link" value="<?php echo $W_720p_Links_E14 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_720p_Watch_Links_E14" name="Edit_W_720p_Watch_Links_E14" placeholder="Watch Link" value="<?php echo $W_720p_Watch_Links_E14 ; ?>">
 </div>  
</div>
<div class="col-lg-3 row" style="margin: 0!important">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_1080p_Links_E14" name="Edit_W_1080p_Links_E14" placeholder="Download Link" value="<?php echo $W_1080p_Links_E14 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
     <input type="text" class="form-control" id="Edit_W_1080p_Watch_Links_E14" name="Edit_W_1080p_Watch_Links_E14" placeholder="Watch Link" value="<?php echo $W_1080p_Watch_Links_E14 ; ?>">
 </div>  
</div>
</div> 

<div class="row" style="margin-bottom: 10px;">
   <div class="col-lg-2">Episode 15</div>
   <div class="col-lg-4 row" style="margin: 0!important;">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_480p_Links_E15" name="Edit_W_480p_Links_E15" placeholder="Download Link" value="<?php echo $W_480p_Links_E15 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_480p_Watch_Links_E15" name="Edit_W_480p_Watch_Links_E15" placeholder="Watch Link" value="<?php echo $W_480p_Watch_Links_E15 ; ?>">
 </div>        
</div>
<div class="col-lg-3 row" style="margin: 0!important">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_720p_Links_E15" name="Edit_W_720p_Links_E15" placeholder="Download Link" value="<?php echo $W_720p_Links_E15 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_720p_Watch_Links_E15" name="Edit_W_720p_Watch_Links_E15" placeholder="Watch Link" value="<?php echo $W_720p_Watch_Links_E15 ; ?>">
 </div>  
</div>
<div class="col-lg-3 row" style="margin: 0!important">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_1080p_Links_E15" name="Edit_W_1080p_Links_E15" placeholder="Download Link" value="<?php echo $W_1080p_Links_E15 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
     <input type="text" class="form-control" id="Edit_W_1080p_Watch_Links_E15" name="Edit_W_1080p_Watch_Links_E15" placeholder="Watch Link" value="<?php echo $W_1080p_Watch_Links_E15 ; ?>">
 </div>  
</div>
</div> 

<div class="row" style="margin-bottom: 10px;">
   <div class="col-lg-2">Episode 16</div>
   <div class="col-lg-4 row" style="margin: 0!important;">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_480p_Links_E16" name="Edit_W_480p_Links_E16" placeholder="Download Link" value="<?php echo $W_480p_Links_E16 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_480p_Watch_Links_E16" name="Edit_W_480p_Watch_Links_E16" placeholder="Watch Link" value="<?php echo $W_480p_Watch_Links_E16 ; ?>">
 </div>        
</div>
<div class="col-lg-3 row" style="margin: 0!important">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_720p_Links_E16" name="Edit_W_720p_Links_E16" placeholder="Download Link" value="<?php echo $W_720p_Links_E16 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_720p_Watch_Links_E16" name="Edit_W_720p_Watch_Links_E16" placeholder="Watch Link" value="<?php echo $W_720p_Watch_Links_E16 ; ?>">
 </div>  
</div>
<div class="col-lg-3 row" style="margin: 0!important">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_1080p_Links_E16" name="Edit_W_1080p_Links_E16" placeholder="Download Link" value="<?php echo $W_1080p_Links_E16 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
     <input type="text" class="form-control" id="Edit_W_1080p_Watch_Links_E16" name="Edit_W_1080p_Watch_Links_E16" placeholder="Watch Link" value="<?php echo $W_1080p_Watch_Links_E16 ; ?>">
 </div>  
</div>
</div> 

<div class="row" style="margin-bottom: 10px;">
   <div class="col-lg-2">Episode 17</div>
   <div class="col-lg-4 row" style="margin: 0!important;">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_480p_Links_E17" name="Edit_W_480p_Links_E17" placeholder="Download Link" value="<?php echo $W_480p_Links_E17 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_480p_Watch_Links_E17" name="Edit_W_480p_Watch_Links_E17" placeholder="Watch Link" value="<?php echo $W_480p_Watch_Links_E17 ; ?>">
 </div>        
</div>
<div class="col-lg-3 row" style="margin: 0!important">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_720p_Links_E17" name="Edit_W_720p_Links_E17" placeholder="Download Link" value="<?php echo $W_720p_Links_E17 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_720p_Watch_Links_E17" name="Edit_W_720p_Watch_Links_E17" placeholder="Watch Link" value="<?php echo $W_720p_Watch_Links_E17 ; ?>">
 </div>  
</div>
<div class="col-lg-3 row" style="margin: 0!important">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_1080p_Links_E17" name="Edit_W_1080p_Links_E17" placeholder="Download Link" value="<?php echo $W_1080p_Links_E17 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
     <input type="text" class="form-control" id="Edit_W_1080p_Watch_Links_E17" name="Edit_W_1080p_Watch_Links_E17" placeholder="Watch Link" value="<?php echo $W_1080p_Watch_Links_E17 ; ?>">
 </div>  
</div>
</div> 

<div class="row" style="margin-bottom: 10px;">
   <div class="col-lg-2">Episode 18</div>
   <div class="col-lg-4 row" style="margin: 0!important;">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_480p_Links_E18" name="Edit_W_480p_Links_E18" placeholder="Download Link" value="<?php echo $W_480p_Links_E18 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_480p_Watch_Links_E18" name="Edit_W_480p_Watch_Links_E18" placeholder="Watch Link" value="<?php echo $W_480p_Watch_Links_E18 ; ?>">
 </div>        
</div>
<div class="col-lg-3 row" style="margin: 0!important">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_720p_Links_E18" name="Edit_W_720p_Links_E18" placeholder="Download Link" value="<?php echo $W_720p_Links_E18 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_720p_Watch_Links_E18" name="Edit_W_720p_Watch_Links_E18" placeholder="Watch Link" value="<?php echo $W_720p_Watch_Links_E18 ; ?>">
 </div>  
</div>
<div class="col-lg-3 row" style="margin: 0!important">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_1080p_Links_E18" name="Edit_W_1080p_Links_E18" placeholder="Download Link" value="<?php echo $W_1080p_Links_E18 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
     <input type="text" class="form-control" id="Edit_W_1080p_Watch_Links_E18" name="Edit_W_1080p_Watch_Links_E18" placeholder="Watch Link" value="<?php echo $W_1080p_Watch_Links_E18 ; ?>">
 </div>  
</div>
</div> 

<div class="row" style="margin-bottom: 10px;">
   <div class="col-lg-2">Episode 19</div>
   <div class="col-lg-4 row" style="margin: 0!important;">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_480p_Links_E19" name="Edit_W_480p_Links_E19" placeholder="Download Link" value="<?php echo $W_480p_Links_E19 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_480p_Watch_Links_E19" name="Edit_W_480p_Watch_Links_E19" placeholder="Watch Link" value="<?php echo $W_480p_Watch_Links_E19 ;?>">
 </div>        
</div>
<div class="col-lg-3 row" style="margin: 0!important">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_720p_Links_E19" name="Edit_W_720p_Links_E19" placeholder="Download Link" value="<?php echo $W_720p_Links_E19 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_720p_Watch_Links_E19" name="Edit_W_720p_Watch_Links_E19" placeholder="Watch Link" value="<?php echo $W_720p_Watch_Links_E19 ; ?>">
 </div>  
</div>
<div class="col-lg-3 row" style="margin: 0!important">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_1080p_Links_E19" name="Edit_W_1080p_Links_E19" placeholder="Download Link" value="<?php echo $W_1080p_Links_E19 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
     <input type="text" class="form-control" id="Edit_W_1080p_Watch_Links_E19" name="Edit_W_1080p_Watch_Links_E19" placeholder="Watch Link" value="<?php echo $W_1080p_Watch_Links_E19 ; ?>">
 </div>  
</div>
</div> 

<div class="row" style="margin-bottom: 10px;">
   <div class="col-lg-2">Episode 20</div>
   <div class="col-lg-4 row" style="margin: 0!important;">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_480p_Links_E20" name="Edit_W_480p_Links_E20" placeholder="Download Link" value="<?php echo $W_480p_Links_E20 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_480p_Watch_Links_E20" name="Edit_W_480p_Watch_Links_E20" placeholder="Watch Link" value="<?php echo $W_480p_Watch_Links_E20 ; ?>">
 </div>        
</div>
<div class="col-lg-3 row" style="margin: 0!important">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_720p_Links_E20" name="Edit_W_720p_Links_E20" placeholder="Download Link" value="<?php echo $W_720p_Links_E20 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_720p_Watch_Links_E20" name="Edit_W_720p_Watch_Links_E20" placeholder="Watch Link" value="<?php echo $W_720p_Watch_Links_E20 ; ?>">
 </div>  
</div>
<div class="col-lg-3 row" style="margin: 0!important">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_1080p_Links_E20" name="Edit_W_1080p_Links_E20" placeholder="Download Link" value="<?php echo $W_1080p_Links_E20 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
     <input type="text" class="form-control" id="Edit_W_1080p_Watch_Links_E20" name="Edit_W_1080p_Watch_Links_E20" placeholder="Watch Link" value="<?php echo $W_1080p_Watch_Links_E20 ; ?>">
 </div>  
</div>
</div> 

<div class="row" style="margin-bottom: 10px;">
   <div class="col-lg-2">Episode 21</div>
   <div class="col-lg-4 row" style="margin: 0!important;">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_480p_Links_E21" name="Edit_W_480p_Links_E21" placeholder="Download Link" value="<?php echo $W_480p_Links_E21 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_480p_Watch_Links_E21" name="Edit_W_480p_Watch_Links_E21" placeholder="Watch Link" value="<?php echo $W_480p_Watch_Links_E21 ; ?>">
 </div>        
</div>
<div class="col-lg-3 row" style="margin: 0!important">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_720p_Links_E21" name="Edit_W_720p_Links_E21" placeholder="Download Link" value="<?php echo $W_720p_Links_E21 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_720p_Watch_Links_E21" name="Edit_W_720p_Watch_Links_E21" placeholder="Watch Link" value="<?php echo $W_720p_Watch_Links_E21 ; ?>">
 </div>  
</div>
<div class="col-lg-3 row" style="margin: 0!important">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_1080p_Links_E21" name="Edit_W_1080p_Links_E21" placeholder="Download Link" value="<?php echo $W_1080p_Links_E21 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
     <input type="text" class="form-control" id="Edit_W_1080p_Watch_Links_E21" name="Edit_W_1080p_Watch_Links_E21" placeholder="Watch Link" value="<?php echo $W_1080p_Watch_Links_E21 ; ?>">
 </div>  
</div>
</div> 

<div class="row" style="margin-bottom: 10px;">
   <div class="col-lg-2">Episode 22</div>
   <div class="col-lg-4 row" style="margin: 0!important;">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_480p_Links_E22" name="Edit_W_480p_Links_E22" placeholder="Download Link" value="<?php echo $W_480p_Links_E22 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_480p_Watch_Links_E22" name="Edit_W_480p_Watch_Links_E22" placeholder="Watch Link" value="<?php echo $W_480p_Watch_Links_E22 ; ?>">
 </div>        
</div>
<div class="col-lg-3 row" style="margin: 0!important">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_720p_Links_E22" name="Edit_W_720p_Links_E22" placeholder="Download Link" value="<?php echo $W_720p_Links_E22 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_720p_Watch_Links_E22" name="Edit_W_720p_Watch_Links_E22" placeholder="Watch Link" value="<?php echo $W_720p_Watch_Links_E22 ; ?>">
 </div>  
</div>
<div class="col-lg-3 row" style="margin: 0!important">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_1080p_Links_E22" name="Edit_W_1080p_Links_E22" placeholder="Download Link" value="<?php echo $W_1080p_Links_E22 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
     <input type="text" class="form-control" id="Edit_W_1080p_Watch_Links_E22" name="Edit_W_1080p_Watch_Links_E22" placeholder="Watch Link" value="<?php echo $W_1080p_Watch_Links_E22 ; ?>">
 </div>  
</div>
</div> 

<div class="row" style="margin-bottom: 10px;">
   <div class="col-lg-2">Episode 23</div>
   <div class="col-lg-4 row" style="margin: 0!important;">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_480p_Links_E23" name="Edit_W_480p_Links_E23" placeholder="Download Link" value="<?php echo $W_480p_Links_E23 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_480p_Watch_Links_E23" name="Edit_W_480p_Watch_Links_E23" placeholder="Watch Link" value="<?php echo $W_480p_Watch_Links_E23 ; ?>">
 </div>        
</div>
<div class="col-lg-3 row" style="margin: 0!important">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_720p_Links_E23" name="Edit_W_720p_Links_E23" placeholder="Download Link" value="<?php echo $W_720p_Links_E23 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_720p_Watch_Links_E23" name="Edit_W_720p_Watch_Links_E23" placeholder="Watch Link" value="<?php echo $W_720p_Watch_Links_E23 ; ?>">
 </div>  
</div>
<div class="col-lg-3 row" style="margin: 0!important">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_1080p_Links_E23" name="Edit_W_1080p_Links_E23" placeholder="Download Link" value="<?php echo $W_1080p_Links_E23 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
     <input type="text" class="form-control" id="Edit_W_1080p_Watch_Links_E23" name="Edit_W_1080p_Watch_Links_E23" placeholder="Watch Link" value="<?php echo $W_1080p_Watch_Links_E23 ; ?>">
 </div>  
</div>
</div> 

<div class="row" style="margin-bottom: 10px;">
   <div class="col-lg-2">Episode 24</div>
   <div class="col-lg-4 row" style="margin: 0!important;">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_480p_Links_E24" name="Edit_W_480p_Links_E24" placeholder="Download Link" value="<?php echo $W_480p_Links_E24 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_480p_Watch_Links_E24" name="Edit_W_480p_Watch_Links_E24" placeholder="Watch Link" value="<?php echo $W_480p_Watch_Links_E24 ; ?>">
 </div>        
</div>
<div class="col-lg-3 row" style="margin: 0!important">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_720p_Links_E24" name="Edit_W_720p_Links_E24" placeholder="Download Link" value="<?php echo $W_720p_Links_E24 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_720p_Watch_Links_E24" name="Edit_W_720p_Watch_Links_E24" placeholder="Watch Link" value="<?php echo $W_720p_Watch_Links_E24 ; ?>">
 </div>  
</div>
<div class="col-lg-3 row" style="margin: 0!important">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_1080p_Links_E24" name="Edit_W_1080p_Links_E24" placeholder="Download Link" value="<?php echo $W_1080p_Links_E24 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
     <input type="text" class="form-control" id="Edit_W_1080p_Watch_Links_E24" name="Edit_W_1080p_Watch_Links_E24" placeholder="Watch Link" value="<?php echo $W_1080p_Watch_Links_E24 ; ?>">
 </div>  
</div>
</div> 

<div class="row" style="margin-bottom: 10px;">
   <div class="col-lg-2">Episode 25</div>
   <div class="col-lg-4 row" style="margin: 0!important;">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_480p_Links_E25" name="Edit_W_480p_Links_E25" placeholder="Download Link" value="<?php echo $W_480p_Links_E25 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_480p_Watch_Links_E25" name="Edit_W_480p_Watch_Links_E25" placeholder="Watch Link" value="<?php echo $W_480p_Watch_Links_E25 ; ?>">
 </div>        
</div>
<div class="col-lg-3 row" style="margin: 0!important">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_720p_Links_E25" name="Edit_W_720p_Links_E25" placeholder="Download Link" value="<?php echo $W_720p_Links_E25 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_720p_Watch_Links_E25" name="Edit_W_720p_Watch_Links_E25" placeholder="Watch Link" value="<?php echo $W_720p_Watch_Links_E25 ; ?>">
 </div>  
</div>
<div class="col-lg-3 row" style="margin: 0!important">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_1080p_Links_E25" name="Edit_W_1080p_Links_E25" placeholder="Download Link" value="<?php echo $W_1080p_Links_E25 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
     <input type="text" class="form-control" id="Edit_W_1080p_Watch_Links_E25" name="W_1080p_Watch_Links_E25" placeholder="Watch Link" value="<?php echo $W_480p_Links_E1 ; ?>">
 </div>  
</div>
</div> 

<div class="row" style="margin-bottom: 10px;">
   <div class="col-lg-2">Episode 26</div>
   <div class="col-lg-4 row" style="margin: 0!important;">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_480p_Links_E26" name="Edit_W_480p_Links_E26" placeholder="Download Link" value="<?php echo $W_480p_Links_E26 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_480p_Watch_Links_E26" name="Edit_W_480p_Watch_Links_E26" placeholder="Watch Link" value="<?php echo $W_480p_Watch_Links_E26 ; ?>">
 </div>        
</div>
<div class="col-lg-3 row" style="margin: 0!important">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_720p_Links_E26" name="Edit_W_720p_Links_E26" placeholder="Download Link" value="<?php echo $W_720p_Links_E26 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_720p_Watch_Links_E26" name="Edit_W_720p_Watch_Links_E26" placeholder="Watch Link" value="<?php echo $W_720p_Watch_Links_E26 ; ?>">
 </div>  
</div>
<div class="col-lg-3 row" style="margin: 0!important">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_1080p_Links_E26" name="Edit_W_1080p_Links_E26" placeholder="Download Link" value="<?php echo $W_1080p_Links_E26 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
     <input type="text" class="form-control" id="Edit_W_1080p_Watch_Links_E26" name="Edit_W_1080p_Watch_Links_E26" placeholder="Watch Link" value="<?php echo $W_1080p_Watch_Links_E26 ; ?>">
 </div>  
</div>
</div> 

<div class="row" style="margin-bottom: 10px;">
   <div class="col-lg-2">Episode 27</div>
   <div class="col-lg-4 row" style="margin: 0!important;">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_480p_Links_E27" name="Edit_W_480p_Links_E27" placeholder="Download Link" value="<?php echo $W_480p_Links_E27 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_480p_Watch_Links_E27" name="Edit_W_480p_Watch_Links_E27" placeholder="Watch Link" value="<?php echo $W_480p_Watch_Links_E27 ; ?>">
 </div>        
</div>
<div class="col-lg-3 row" style="margin: 0!important">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_720p_Links_E27" name="Edit_W_720p_Links_E27" placeholder="Download Link" value="<?php echo $W_720p_Links_E27 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_720p_Watch_Links_E27" name="Edit_W_720p_Watch_Links_E27" placeholder="Watch Link" value="<?php echo $W_720p_Watch_Links_E27 ; ?>">
 </div>  
</div>
<div class="col-lg-3 row" style="margin: 0!important">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_1080p_Links_E27" name="Edit_W_1080p_Links_E27" placeholder="Download Link" value="<?php echo $W_1080p_Links_E27 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
     <input type="text" class="form-control" id="Edit_W_1080p_Watch_Links_E27" name="Edit_W_1080p_Watch_Links_E27" placeholder="Watch Link" value="<?php echo $W_1080p_Watch_Links_E27 ; ?>">
 </div>  
</div>
</div> 

<div class="row" style="margin-bottom: 10px;">
   <div class="col-lg-2">Episode 28</div>
   <div class="col-lg-4 row" style="margin: 0!important;">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_480p_Links_E28" name="Edit_W_480p_Links_E28" placeholder="Download Link" value="<?php echo $W_480p_Links_E28 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_480p_Watch_Links_E28" name="Edit_W_480p_Watch_Links_E28" placeholder="Watch Link" value="<?php echo $W_480p_Watch_Links_E28 ; ?>">
 </div>        
</div>
<div class="col-lg-3 row" style="margin: 0!important">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_720p_Links_E28" name="Edit_W_720p_Links_E28" placeholder="Download Link" value="<?php echo $W_720p_Links_E28 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_720p_Watch_Links_E28" name="Edit_W_720p_Watch_Links_E28" placeholder="Watch Link" value="<?php echo $W_720p_Watch_Links_E28 ; ?>">
 </div>  
</div>
<div class="col-lg-3 row" style="margin: 0!important">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_1080p_Links_E28" name="Edit_W_1080p_Links_E28" placeholder="Download Link" value="<?php echo $W_1080p_Links_E28 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
     <input type="text" class="form-control" id="Edit_W_1080p_Watch_Links_E28" name="Edit_W_1080p_Watch_Links_E28" placeholder="Watch Link" value="<?php echo $W_1080p_Watch_Links_E28 ; ?>">
 </div>  
</div>
</div> 

<div class="row" style="margin-bottom: 10px;">
   <div class="col-lg-2">Episode 29</div>
   <div class="col-lg-4 row" style="margin: 0!important;">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_480p_Links_E29" name="Edit_W_480p_Links_E29" placeholder="Download Link" value="<?php echo $W_480p_Links_E29 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_480p_Watch_Links_E29" name="Edit_W_480p_Watch_Links_E29" placeholder="Watch Link" value="<?php echo $W_480p_Watch_Links_E29 ; ?>">
 </div>        
</div>
<div class="col-lg-3 row" style="margin: 0!important">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_720p_Links_E29" name="Edit_W_720p_Links_E29" placeholder="Download Link" value="<?php echo $W_720p_Links_E29 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_720p_Watch_Links_E29" name="Edit_W_720p_Watch_Links_E29" placeholder="Watch Link" value="<?php echo $W_720p_Watch_Links_E29 ; ?>">
 </div>  
</div>
<div class="col-lg-3 row" style="margin: 0!important">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_1080p_Links_E29" name="Edit_W_1080p_Links_E29" placeholder="Download Link" value="<?php echo $W_1080p_Links_E29 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
     <input type="text" class="form-control" id="Edit_W_1080p_Watch_Links_E29" name="Edit_W_1080p_Watch_Links_E29" placeholder="Watch Link" value="<?php echo $W_1080p_Watch_Links_E29 ; ?>">
 </div>  
</div>
</div> 

<div class="row" style="margin-bottom: 10px;">
   <div class="col-lg-2">Episode 30</div>
   <div class="col-lg-4 row" style="margin: 0!important;">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_480p_Links_E30" name="Edit_W_480p_Links_E30" placeholder="Download Link" value="<?php echo $W_480p_Links_E30 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_480p_Watch_Links_E30" name="Edit_W_480p_Watch_Links_E30" placeholder="Watch Link" value="<?php echo $W_480p_Watch_Links_E30 ; ?>">
 </div>        
</div>
<div class="col-lg-3 row" style="margin: 0!important">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_720p_Links_E30" name="Edit_W_720p_Links_E30" placeholder="Download Link" value="<?php echo $W_720p_Links_E30 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_720p_Watch_Links_E30" name="Edit_W_720p_Watch_Links_E30" placeholder="Watch Link" value="<?php echo $W_720p_Watch_Links_E30 ; ?>">
 </div>  
</div>
<div class="col-lg-3 row" style="margin: 0!important">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
     <input type="text" class="form-control" id="Edit_W_1080p_Links_E30" name="Edit_W_1080p_Links_E30" placeholder="Download Link" value="<?php echo $W_1080p_Links_E30 ; ?>">
 </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
     <input type="text" class="form-control" id="Edit_W_1080p_Watch_Links_E30" name="Edit_W_1080p_Watch_Links_E30" placeholder="Watch Link" value="<?php echo $W_1080p_Watch_Links_E30 ; ?>">
 </div>  
</div>
</div> 

</div>

<div class="modal-footer" style="width: 100%;">
  <button type="submit" id="edit_data" name="edit_data" class="btn btn-primary">Save</button>
  <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
</div>
</form>

<script>


	function readURL(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();

			reader.onload = function (e) {
				$('.blah')
				.attr('src', e.target.result)
				.width(70)
				.height(100);
			};

			reader.readAsDataURL(input.files[0]);
		}
	}	

	$(".maini").select(function() {
		alert( "Handler for .select() called." );
		$(".blah").show();
	});

	function ssi1(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();

			reader.onload = function (e) {
				$('.blah1')
				.attr('src', e.target.result)
				.width(70)
				.height(70);
			};

			reader.readAsDataURL(input.files[0]);
		}
	}	

	$(".ssi1").select(function() {
		alert( "Handler for .select() called." );
		$(".blah1").show();
	});

	function ssi2(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();

			reader.onload = function (e) {
				$('.blah2')
				.attr('src', e.target.result)
				.width(70)
				.height(70);
			};

			reader.readAsDataURL(input.files[0]);
		}
	}	

	$(".ssi2").select(function() {
		alert( "Handler for .select() called." );
		$(".blah2").show();
	});

	function ssi3(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();

			reader.onload = function (e) {
				$('.blah3')
				.attr('src', e.target.result)
				.width(70)
				.height(70);
			};

			reader.readAsDataURL(input.files[0]);
		}
	}	

	$(".ssi3").select(function() {
		alert( "Handler for .select() called." );			
		$(".blah3").show();
	});

	function ssi4(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();

			reader.onload = function (e) {
				$('.blah4')
				.attr('src', e.target.result)
				.width(70)
				.height(70);
			};

			reader.readAsDataURL(input.files[0]);
		}
	}	

	$(".ssi4").select(function() {
		alert( "Handler for .select() called." );
		$(".blah4").show();
	});

	function ssi5(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();

			reader.onload = function (e) {
				$('.blah5')
				.attr('src', e.target.result)
				.width(70)
				.height(70);
			};

			reader.readAsDataURL(input.files[0]);
		}
	}	

	$(".ssi5").select(function() {
		alert( "Handler for .select() called." );
		$(".blah5").show();
	});

	function ssi6(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();

			reader.onload = function (e) {
				$('.blah6')
				.attr('src', e.target.result)
				.width(70)
				.height(70);
			};

			reader.readAsDataURL(input.files[0]);
		}
	}	

	$(".ssi6").select(function() {
		alert( "Handler for .select() called." );
		$(".blah6").show();
	});


</script>