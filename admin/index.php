<?php 
session_start();
include "check_login_sesstion.php";
include "config.php";

if(isset($_POST['Add_data'])){

  date_default_timezone_set('Asia/Kolkata');
  $Current_Date = date('d-m-Y g:i:s A');

  $Movie_Name = $_POST['Movie_Name'];
  $Movie_Catagory = $_POST['Movie_Catagory'];
  $Movie_Year = $_POST['Movie_Year'];
  $Movie_Quality = $_POST['Movie_Quality'];
  $Movie_Links_480p = $_POST['Movie_Links_480p'];
  $Movie_Links_720p = $_POST['Movie_Links_720p'];
  $Movie_Links_1080p = $_POST['Movie_Links_1080p'];

  $Movie_Links_480p_2 = $_POST['Movie_Links_480p_2'];
  $Movie_Links_720p_2 = $_POST['Movie_Links_720p_2'];
  $Movie_Links_1080p_2 = $_POST['Movie_Links_1080p_2'];
  $Movie_Links_480p_3 = $_POST['Movie_Links_480p_3'];
  $Movie_Links_720p_3 = $_POST['Movie_Links_720p_3'];
  $Movie_Links_1080p_3 = $_POST['Movie_Links_1080p_3'];
  $Movie_Links_480p_4 = $_POST['Movie_Links_480p_4'];
  $Movie_Links_720p_4 = $_POST['Movie_Links_720p_4'];
  $Movie_Links_1080p_4 = $_POST['Movie_Links_1080p_4'];

  $Movie_Links_480p_Watch = $_POST['Movie_Links_480p_Watch'];
  $Movie_Links_720p_Watch = $_POST['Movie_Links_720p_Watch'];
  $Movie_Links_1080p_Watch = $_POST['Movie_Links_1080p_Watch'];
  $Movie_Size_480p = $_POST['Movie_Size_480p'];
  $Movie_Size_720p = $_POST['Movie_Size_720p'];
  $Movie_Size_1080p = $_POST['Movie_Size_1080p'];
  $Movie_Description = $_POST['Movie_Description'];
  $Movie_ShortName = $_POST['Movie_ShortName'];
  $Movie_IMDb_Rating = $_POST['Movie_IMDb_Rating'];
  $Movie_Director = $_POST['Movie_Director'];
  $Movie_Stars = $_POST['Movie_Stars'];

  $Latest_Released_c = $_POST['Latest_Released_c'];
  $Dual_Audio_c = $_POST['Dual_Audio_c'];
  $Multi_Audio_c = $_POST['Multi_Audio_c'];
  $English_L_c = $_POST['English_L_c'];
  $Hindi_L_c = $_POST['Hindi_L_c'];
  $Adult_Movie_c = $_POST['Adult_Movie_c'];
  $Asian_Movie_c = $_POST['Asian_Movie_c'];
  $English_Movie_c = $_POST['English_Movie_c'];
  $Hacking_Movie_c = $_POST['Hacking_Movie_c'];
  $Movie_c_480p = $_POST['480p_Movie_c'];
  $Movie_c_720p = $_POST['720p_Movie_c'];
  $Movie_c_1080p = $_POST['1080p_Movie_c'];
  $Ultra_HD_c_4K = $_POST['4K_Ultra_HD_c'];
  $Movie_c_300mb = $_POST['300mb_Movie_c'];
  $Movie_c_500mb = $_POST['500mb_Movie_c'];
  $Movie_c_700mb = $_POST['700mb_Movie_c'];
  $Movie_c_1gb = $_POST['1gb_Movie_c'];
  $G_Action = $_POST['G_Action'];
  $G_Adventure = $_POST['G_Adventure'];
  $G_Animated = $_POST['G_Animated'];
  $G_Comedy = $_POST['G_Comedy'];
  $G_Crime = $_POST['G_Crime'];
  $G_Fantasy = $_POST['G_Fantasy'];
  $G_Horror = $_POST['G_Horror'];
  $G_Mystery = $_POST['G_Mystery'];
  $G_Romance = $_POST['G_Romance'];
  $G_Sci_fi = $_POST['G_Sci-fi'];
  $G_Thriller = $_POST['G_Thriller'];


  $Movie_Image = $_FILES['Movie_Image'];

  $num_gr = date('Ymdhs');
  $filename = $num_gr.$Movie_Image['name'];
  $filepath = $Movie_Image['tmp_name'];
  $fileerror = $Movie_Image['error'];

  $destfile = 'photo/'.$filename;
  move_uploaded_file($filepath, $destfile);


  $uploads_dir = 'photo/';
  $name = array();
  $i=1;

  foreach ($_FILES["ss_images"]["error"] as $key => $error) {

    $name[$i] = "";

    if ($error == UPLOAD_ERR_OK) {
      $tmp_name = $_FILES["ss_images"]["tmp_name"][$key];
      $name[$i] = $_FILES["ss_images"]["name"][$key];
      move_uploaded_file($tmp_name, "$uploads_dir/$num_gr$name[$i]");
    }
    $i++;
  }
  $insertqurey= "INSERT INTO movies_data (date_time, latest_released, dual_audio, multi_audio, english_l, hindi_l, adult_movies, asian_movies, english_movies, hacking_movies, 480p_movies, 720p_movies, 1080p_movies, 4k_ultra_hd, 300mb_movies, 500mb_movies, 700mb_movies, 1gb_movies, action_movies, adventure_movies, animated_movies , comedy_movies, crime_movies, fantasy_movies, horror_movies, mystery_movies, romance_movies, sci_fi_movies , thriller_movies, movie_name, movie_catagory, year, 480p_links, 720p_links, 1080p_links, 480p_links_2, 720p_links_2, 1080p_links_2, 480p_links_3, 720p_links_3, 1080p_links_3, 480p_links_4, 720p_links_4, 1080p_links_4, 480p_watch_links, 720p_watch_links, 1080p_watch_links, 480p_m_size, 720p_m_size, 1080p_m_size, movie_description, movie_shortname, movie_imdb, movie_director, movie_stars, main_image, ss_images1, ss_images2, ss_images3, ss_images4, ss_images5, ss_images6) VALUES ('$Current_Date', '$Latest_Released_c', '$Dual_Audio_c', '$Multi_Audio_c', '$English_L_c', '$Hindi_L_c', '$Adult_Movie_c', '$Asian_Movie_c', '$English_Movie_c', '$Hacking_Movie_c', '$Movie_c_480p', '$Movie_c_720p', '$Movie_c_1080p', '$Ultra_HD_c_4K', '$Movie_c_300mb', '$Movie_c_500mb', '$Movie_c_700mb', '$Movie_c_1gb', '$G_Action', '$G_Adventure', '$G_Animated', '$G_Comedy', '$G_Crime', '$G_Fantasy', '$G_Horror', '$G_Mystery', '$G_Romance', '$G_Sci_fi', '$G_Thriller', '$Movie_Name', '$Movie_Catagory', '$Movie_Year', '$Movie_Links_480p', '$Movie_Links_720p', '$Movie_Links_1080p', '$Movie_Links_480p_2', '$Movie_Links_720p_2', '$Movie_Links_1080p_2', '$Movie_Links_480p_3', '$Movie_Links_720p_3', '$Movie_Links_1080p_3', '$Movie_Links_480p_4', '$Movie_Links_720p_4', '$Movie_Links_1080p_4', '$Movie_Links_480p_Watch', '$Movie_Links_720p_Watch', '$Movie_Links_1080p_Watch', '$Movie_Size_480p', '$Movie_Size_720p', '$Movie_Size_1080p', '$Movie_Description', '$Movie_ShortName', '$Movie_IMDb_Rating', '$Movie_Director', '$Movie_Stars', '$filename', '$num_gr$name[1]', '$num_gr$name[2]', '$num_gr$name[3]', '$num_gr$name[4]', '$num_gr$name[5]', '$num_gr$name[6]')";



  if ($Movie_Catagory == "Web Series") {

    $W_480p_Links_E1 = $_POST['W_480p_Links_E1'];
    $W_720p_Links_E1 = $_POST['W_720p_Links_E1'];
    $W_1080p_Links_E1 = $_POST['W_1080p_Links_E1'];
    $W_480p_Links_E2 = $_POST['W_480p_Links_E2'];
    $W_720p_Links_E2 = $_POST['W_720p_Links_E2'];
    $W_1080p_Links_E2 = $_POST['W_1080p_Links_E2'];    
    $W_480p_Links_E3 = $_POST['W_480p_Links_E3'];
    $W_720p_Links_E3 = $_POST['W_720p_Links_E3'];
    $W_1080p_Links_E3 = $_POST['W_1080p_Links_E3'];    
    $W_480p_Links_E4 = $_POST['W_480p_Links_E4'];
    $W_720p_Links_E4 = $_POST['W_720p_Links_E4'];
    $W_1080p_Links_E4 = $_POST['W_1080p_Links_E4'];    
    $W_480p_Links_E5 = $_POST['W_480p_Links_E5'];
    $W_720p_Links_E5 = $_POST['W_720p_Links_E5'];
    $W_1080p_Links_E5 = $_POST['W_1080p_Links_E5'];    
    $W_480p_Links_E6 = $_POST['W_480p_Links_E6'];
    $W_720p_Links_E6 = $_POST['W_720p_Links_E6'];
    $W_1080p_Links_E6 = $_POST['W_1080p_Links_E6'];    
    $W_480p_Links_E7 = $_POST['W_480p_Links_E7'];
    $W_720p_Links_E7 = $_POST['W_720p_Links_E7'];
    $W_1080p_Links_E7 = $_POST['W_1080p_Links_E7'];    
    $W_480p_Links_E8 = $_POST['W_480p_Links_E8'];
    $W_720p_Links_E8 = $_POST['W_720p_Links_E8'];
    $W_1080p_Links_E8 = $_POST['W_1080p_Links_E8'];    
    $W_480p_Links_E9 = $_POST['W_480p_Links_E9'];
    $W_720p_Links_E9 = $_POST['W_720p_Links_E9'];
    $W_1080p_Links_E9 = $_POST['W_1080p_Links_E9'];    
    $W_480p_Links_E10 = $_POST['W_480p_Links_E10'];
    $W_720p_Links_E10 = $_POST['W_720p_Links_E10'];
    $W_1080p_Links_E10 = $_POST['W_1080p_Links_E10'];    
    $W_480p_Links_E11 = $_POST['W_480p_Links_E11'];
    $W_720p_Links_E11 = $_POST['W_720p_Links_E11'];
    $W_1080p_Links_E11 = $_POST['W_1080p_Links_E11'];    
    $W_480p_Links_E12 = $_POST['W_480p_Links_E12'];
    $W_720p_Links_E12 = $_POST['W_720p_Links_E12'];
    $W_1080p_Links_E12 = $_POST['W_1080p_Links_E12'];    
    $W_480p_Links_E13 = $_POST['W_480p_Links_E13'];
    $W_720p_Links_E13 = $_POST['W_720p_Links_E13'];
    $W_1080p_Links_E13 = $_POST['W_1080p_Links_E13'];    
    $W_480p_Links_E14 = $_POST['W_480p_Links_E14'];
    $W_720p_Links_E14 = $_POST['W_720p_Links_E14'];
    $W_1080p_Links_E14 = $_POST['W_1080p_Links_E14'];    
    $W_480p_Links_E15 = $_POST['W_480p_Links_E15'];
    $W_720p_Links_E15 = $_POST['W_720p_Links_E15'];
    $W_1080p_Links_E15 = $_POST['W_1080p_Links_E15'];   
    $W_480p_Links_E16 = $_POST['W_480p_Links_E16'];
    $W_720p_Links_E16 = $_POST['W_720p_Links_E16'];
    $W_1080p_Links_E16 = $_POST['W_1080p_Links_E16'];   
    $W_480p_Links_E17 = $_POST['W_480p_Links_E17'];
    $W_720p_Links_E17 = $_POST['W_720p_Links_E17'];
    $W_1080p_Links_E17 = $_POST['W_1080p_Links_E17'];    
    $W_480p_Links_E18 = $_POST['W_480p_Links_E18'];
    $W_720p_Links_E18 = $_POST['W_720p_Links_E18'];
    $W_1080p_Links_E18 = $_POST['W_1080p_Links_E18'];    
    $W_480p_Links_E19 = $_POST['W_480p_Links_E19'];
    $W_720p_Links_E19 = $_POST['W_720p_Links_E19'];
    $W_1080p_Links_E19 = $_POST['W_1080p_Links_E19'];    
    $W_480p_Links_E20 = $_POST['W_480p_Links_E20'];
    $W_720p_Links_E20 = $_POST['W_720p_Links_E20'];
    $W_1080p_Links_E20 = $_POST['W_1080p_Links_E20'];    
    $W_480p_Links_E21 = $_POST['W_480p_Links_E21'];
    $W_720p_Links_E21 = $_POST['W_720p_Links_E21'];
    $W_1080p_Links_E21 = $_POST['W_1080p_Links_E21'];    
    $W_480p_Links_E22 = $_POST['W_480p_Links_E22'];
    $W_720p_Links_E22 = $_POST['W_720p_Links_E22'];
    $W_1080p_Links_E22 = $_POST['W_1080p_Links_E22'];    
    $W_480p_Links_E23 = $_POST['W_480p_Links_E23'];
    $W_720p_Links_E23 = $_POST['W_720p_Links_E23'];
    $W_1080p_Links_E23 = $_POST['W_1080p_Links_E23'];    
    $W_480p_Links_E24 = $_POST['W_480p_Links_E24'];
    $W_720p_Links_E24 = $_POST['W_720p_Links_E24'];
    $W_1080p_Links_E24 = $_POST['W_1080p_Links_E24'];    
    $W_480p_Links_E25 = $_POST['W_480p_Links_E25'];
    $W_720p_Links_E25 = $_POST['W_720p_Links_E25'];
    $W_1080p_Links_E25 = $_POST['W_1080p_Links_E25'];    
    $W_480p_Links_E26 = $_POST['W_480p_Links_E26'];
    $W_720p_Links_E26 = $_POST['W_720p_Links_E26'];
    $W_1080p_Links_E26 = $_POST['W_1080p_Links_E26'];    
    $W_480p_Links_E27 = $_POST['W_480p_Links_E27'];
    $W_720p_Links_E27 = $_POST['W_720p_Links_E27'];
    $W_1080p_Links_E27 = $_POST['W_1080p_Links_E27'];    
    $W_480p_Links_E28 = $_POST['W_480p_Links_E28'];
    $W_720p_Links_E28 = $_POST['W_720p_Links_E28'];
    $W_1080p_Links_E28 = $_POST['W_1080p_Links_E28'];    
    $W_480p_Links_E29 = $_POST['W_480p_Links_E29'];
    $W_720p_Links_E29 = $_POST['W_720p_Links_E29'];
    $W_1080p_Links_E29 = $_POST['W_1080p_Links_E29'];    
    $W_480p_Links_E30 = $_POST['W_480p_Links_E30'];
    $W_720p_Links_E30 = $_POST['W_720p_Links_E30'];
    $W_1080p_Links_E30 = $_POST['W_1080p_Links_E30'];

    $W_480p_Watch_Links_E1  =  $_POST['W_480p_Watch_Links_E1'];
    $W_720p_Watch_Links_E1  =  $_POST['W_720p_Watch_Links_E1'];
    $W_1080p_Watch_Links_E1  =  $_POST['W_1080p_Watch_Links_E1'];
    $W_480p_Watch_Links_E2 =  $_POST['W_480p_Watch_Links_E2'];
    $W_720p_Watch_Links_E2 =  $_POST['W_720p_Watch_Links_E2'];
    $W_1080p_Watch_Links_E2 =  $_POST['W_1080p_Watch_Links_E2'];    
    $W_480p_Watch_Links_E3 =  $_POST['W_480p_Watch_Links_E3'];
    $W_720p_Watch_Links_E3 =  $_POST['W_720p_Watch_Links_E3'];
    $W_1080p_Watch_Links_E3 =  $_POST['W_1080p_Watch_Links_E3'];    
    $W_480p_Watch_Links_E4 =  $_POST['W_480p_Watch_Links_E4'];
    $W_720p_Watch_Links_E4 =  $_POST['W_720p_Watch_Links_E4'];
    $W_1080p_Watch_Links_E4 =  $_POST['W_1080p_Watch_Links_E4'];    
    $W_480p_Watch_Links_E5 =  $_POST['W_480p_Watch_Links_E5'];
    $W_720p_Watch_Links_E5 =  $_POST['W_720p_Watch_Links_E5'];
    $W_1080p_Watch_Links_E5 =  $_POST['W_1080p_Watch_Links_E5'];    
    $W_480p_Watch_Links_E6 =  $_POST['W_480p_Watch_Links_E6'];
    $W_720p_Watch_Links_E6 =  $_POST['W_720p_Watch_Links_E6'];
    $W_1080p_Watch_Links_E6 =  $_POST['W_1080p_Watch_Links_E6'];    
    $W_480p_Watch_Links_E7 =  $_POST['W_480p_Watch_Links_E7'];
    $W_720p_Watch_Links_E7 =  $_POST['W_720p_Watch_Links_E7'];
    $W_1080p_Watch_Links_E7 =  $_POST['W_1080p_Watch_Links_E7'];    
    $W_480p_Watch_Links_E8 =  $_POST['W_480p_Watch_Links_E8'];
    $W_720p_Watch_Links_E8 =  $_POST['W_720p_Watch_Links_E8'];
    $W_1080p_Watch_Links_E8 =  $_POST['W_1080p_Watch_Links_E8'];    
    $W_480p_Watch_Links_E9 =  $_POST['W_480p_Watch_Links_E9'];
    $W_720p_Watch_Links_E9 =  $_POST['W_720p_Watch_Links_E9'];
    $W_1080p_Watch_Links_E9 =  $_POST['W_1080p_Watch_Links_E9'];    
    $W_480p_Watch_Links_E10 =  $_POST['W_480p_Watch_Links_E10'];
    $W_720p_Watch_Links_E10 =  $_POST['W_720p_Watch_Links_E10'];
    $W_1080p_Watch_Links_E10 =  $_POST['W_1080p_Watch_Links_E10'];    
    $W_480p_Watch_Links_E11 =  $_POST['W_480p_Watch_Links_E11'];
    $W_720p_Watch_Links_E11 =  $_POST['W_720p_Watch_Links_E11'];
    $W_1080p_Watch_Links_E11 =  $_POST['W_1080p_Watch_Links_E11'];    
    $W_480p_Watch_Links_E12 =  $_POST['W_480p_Watch_Links_E12'];
    $W_720p_Watch_Links_E12 =  $_POST['W_720p_Watch_Links_E12'];
    $W_1080p_Watch_Links_E12 =  $_POST['W_1080p_Watch_Links_E12'];    
    $W_480p_Watch_Links_E13 =  $_POST['W_480p_Watch_Links_E13'];
    $W_720p_Watch_Links_E13 =  $_POST['W_720p_Watch_Links_E13'];
    $W_1080p_Watch_Links_E13 =  $_POST['W_1080p_Watch_Links_E13'];    
    $W_480p_Watch_Links_E14 =  $_POST['W_480p_Watch_Links_E14'];
    $W_720p_Watch_Links_E14 =  $_POST['W_720p_Watch_Links_E14'];
    $W_1080p_Watch_Links_E14 =  $_POST['W_1080p_Watch_Links_E14'];    
    $W_480p_Watch_Links_E15 =  $_POST['W_480p_Watch_Links_E15'];
    $W_720p_Watch_Links_E15 =  $_POST['W_720p_Watch_Links_E15'];
    $W_1080p_Watch_Links_E15 =  $_POST['W_1080p_Watch_Links_E15'];    
    $W_480p_Watch_Links_E16 =  $_POST['W_480p_Watch_Links_E16'];
    $W_720p_Watch_Links_E16 =  $_POST['W_720p_Watch_Links_E16'];
    $W_1080p_Watch_Links_E16 =  $_POST['W_1080p_Watch_Links_E16'];    
    $W_480p_Watch_Links_E17 =  $_POST['W_480p_Watch_Links_E17'];
    $W_720p_Watch_Links_E17 =  $_POST['W_720p_Watch_Links_E17'];
    $W_1080p_Watch_Links_E17 =  $_POST['W_1080p_Watch_Links_E17'];    
    $W_480p_Watch_Links_E18 =  $_POST['W_480p_Watch_Links_E18'];
    $W_720p_Watch_Links_E18 =  $_POST['W_720p_Watch_Links_E18'];
    $W_1080p_Watch_Links_E18 =  $_POST['W_1080p_Watch_Links_E18'];    
    $W_480p_Watch_Links_E19 =  $_POST['W_480p_Watch_Links_E19'];
    $W_720p_Watch_Links_E19 =  $_POST['W_720p_Watch_Links_E19'];
    $W_1080p_Watch_Links_E19 =  $_POST['W_1080p_Watch_Links_E19'];    
    $W_480p_Watch_Links_E20 =  $_POST['W_480p_Watch_Links_E20'];
    $W_720p_Watch_Links_E20 =  $_POST['W_720p_Watch_Links_E20'];
    $W_1080p_Watch_Links_E20 =  $_POST['W_1080p_Watch_Links_E20'];    
    $W_480p_Watch_Links_E21 =  $_POST['W_480p_Watch_Links_E21'];
    $W_720p_Watch_Links_E21 =  $_POST['W_720p_Watch_Links_E21'];
    $W_1080p_Watch_Links_E21 =  $_POST['W_1080p_Watch_Links_E21'];    
    $W_480p_Watch_Links_E22 =  $_POST['W_480p_Watch_Links_E22'];
    $W_720p_Watch_Links_E22 =  $_POST['W_720p_Watch_Links_E22'];
    $W_1080p_Watch_Links_E22 =  $_POST['W_1080p_Watch_Links_E22'];    
    $W_480p_Watch_Links_E23 =  $_POST['W_480p_Watch_Links_E23'];
    $W_720p_Watch_Links_E23 =  $_POST['W_720p_Watch_Links_E23'];
    $W_1080p_Watch_Links_E23 =  $_POST['W_1080p_Watch_Links_E23'];    
    $W_480p_Watch_Links_E24 =  $_POST['W_480p_Watch_Links_E24'];
    $W_720p_Watch_Links_E24 =  $_POST['W_720p_Watch_Links_E24'];
    $W_1080p_Watch_Links_E24 =  $_POST['W_1080p_Watch_Links_E24'];    
    $W_480p_Watch_Links_E25 =  $_POST['W_480p_Watch_Links_E25'];
    $W_720p_Watch_Links_E25 =  $_POST['W_720p_Watch_Links_E25'];
    $W_1080p_Watch_Links_E25 =  $_POST['W_1080p_Watch_Links_E25'];    
    $W_480p_Watch_Links_E26 =  $_POST['W_480p_Watch_Links_E26'];
    $W_720p_Watch_Links_E26 =  $_POST['W_720p_Watch_Links_E26'];
    $W_1080p_Watch_Links_E26 =  $_POST['W_1080p_Watch_Links_E26'];    
    $W_480p_Watch_Links_E27 =  $_POST['W_480p_Watch_Links_E27'];
    $W_720p_Watch_Links_E27 =  $_POST['W_720p_Watch_Links_E27'];
    $W_1080p_Watch_Links_E27 =  $_POST['W_1080p_Watch_Links_E27'];    
    $W_480p_Watch_Links_E28 =  $_POST['W_480p_Watch_Links_E28'];
    $W_720p_Watch_Links_E28 =  $_POST['W_720p_Watch_Links_E28'];
    $W_1080p_Watch_Links_E28 =  $_POST['W_1080p_Watch_Links_E28'];    
    $W_480p_Watch_Links_E29 =  $_POST['W_480p_Watch_Links_E29'];
    $W_720p_Watch_Links_E29 =  $_POST['W_720p_Watch_Links_E29'];
    $W_1080p_Watch_Links_E29 =  $_POST['W_1080p_Watch_Links_E29'];    
    $W_480p_Watch_Links_E30 =  $_POST['W_480p_Watch_Links_E30'];
    $W_720p_Watch_Links_E30 =  $_POST['W_720p_Watch_Links_E30'];
    $W_1080p_Watch_Links_E30 =  $_POST['W_1080p_Watch_Links_E30'];


    $insertqurey_web_l= "INSERT INTO movies_data_webseries_links (date_time_wl, w_480p_links_e1, w_480p_links_e2, w_480p_links_e3, w_480p_links_e4, w_480p_links_e5, w_480p_links_e6, w_480p_links_e7, w_480p_links_e8, w_480p_links_e9, w_480p_links_e10, w_480p_links_e11, w_480p_links_e12, w_480p_links_e13, w_480p_links_e14, w_480p_links_e15, w_480p_links_e16, w_480p_links_e17, w_480p_links_e18, w_480p_links_e19, w_480p_links_e20, w_480p_links_e21, w_480p_links_e22, w_480p_links_e23, w_480p_links_e24, w_480p_links_e25, w_480p_links_e26, w_480p_links_e27 , w_480p_links_e28, w_480p_links_e29, w_480p_links_e30, w_720p_links_e1, w_720p_links_e2, w_720p_links_e3, w_720p_links_e4, w_720p_links_e5, w_720p_links_e6, w_720p_links_e7, w_720p_links_e8, w_720p_links_e9, w_720p_links_e10, w_720p_links_e11, w_720p_links_e12, w_720p_links_e13, w_720p_links_e14, w_720p_links_e15, w_720p_links_e16, w_720p_links_e17, w_720p_links_e18, w_720p_links_e19, w_720p_links_e20, w_720p_links_e21, w_720p_links_e22, w_720p_links_e23, w_720p_links_e24, w_720p_links_e25, w_720p_links_e26, w_720p_links_e27, w_720p_links_e28, w_720p_links_e29, w_720p_links_e30, w_1080p_links_e1, w_1080p_links_e2, w_1080p_links_e3, w_1080p_links_e4, w_1080p_links_e5, w_1080p_links_e6, w_1080p_links_e7, w_1080p_links_e8, w_1080p_links_e9, w_1080p_links_e10, w_1080p_links_e11, w_1080p_links_e12, w_1080p_links_e13, w_1080p_links_e14, w_1080p_links_e15, w_1080p_links_e16, w_1080p_links_e17, w_1080p_links_e18, w_1080p_links_e19, w_1080p_links_e20, w_1080p_links_e21, w_1080p_links_e22, w_1080p_links_e23, w_1080p_links_e24, w_1080p_links_e25, w_1080p_links_e26, w_1080p_links_e27, w_1080p_links_e28, w_1080p_links_e29, w_1080p_links_e30) VALUES ('$Current_Date', '$W_480p_Links_E1', '$W_480p_Links_E2', '$W_480p_Links_E3', '$W_480p_Links_E4', '$W_480p_Links_E5', '$W_480p_Links_E6', '$W_480p_Links_E7', '$W_480p_Links_E8', '$W_480p_Links_E9', '$W_480p_Links_E10', '$W_480p_Links_E11', '$W_480p_Links_E12', '$W_480p_Links_E13', '$W_480p_Links_E14', '$W_480p_Links_E15', '$W_480p_Links_E16', '$W_480p_Links_E17', '$W_480p_Links_E18', '$W_480p_Links_E19', '$W_480p_Links_E20', '$W_480p_Links_E21', '$W_480p_Links_E22', '$W_480p_Links_E23', '$W_480p_Links_E24', '$W_480p_Links_E25', '$W_480p_Links_E26', '$W_480p_Links_E27', '$W_480p_Links_E28', '$W_480p_Links_E29', '$W_480p_Links_E30', '$W_720p_Links_E1', '$W_720p_Links_E2', '$W_720p_Links_E3', '$W_720p_Links_E4', '$W_720p_Links_E5', '$W_720p_Links_E6', '$W_720p_Links_E7', '$W_720p_Links_E8', '$W_720p_Links_E9', '$W_720p_Links_E10', '$W_720p_Links_E11', '$W_720p_Links_E12', '$W_720p_Links_E13', '$W_720p_Links_E14', '$W_720p_Links_E15', '$W_720p_Links_E16', '$W_720p_Links_E17', '$W_720p_Links_E18', '$W_720p_Links_E19', '$W_720p_Links_E20', '$W_720p_Links_E21', '$W_720p_Links_E22', '$W_720p_Links_E23', '$W_720p_Links_E24', '$W_720p_Links_E25', '$W_720p_Links_E26', '$W_720p_Links_E27', '$W_720p_Links_E28', '$W_720p_Links_E29', '$W_720p_Links_E30', '$W_1080p_Links_E1', '$W_1080p_Links_E2', '$W_1080p_Links_E3', '$W_1080p_Links_E4', '$W_1080p_Links_E5', '$W_1080p_Links_E6', '$W_1080p_Links_E7', '$W_1080p_Links_E8', '$W_1080p_Links_E9', '$W_1080p_Links_E10', '$W_1080p_Links_E11', '$W_1080p_Links_E12', '$W_1080p_Links_E13', '$W_1080p_Links_E14', '$W_1080p_Links_E15', '$W_1080p_Links_E16', '$W_1080p_Links_E17', '$W_1080p_Links_E18', '$W_1080p_Links_E19', '$W_1080p_Links_E20', '$W_1080p_Links_E21', '$W_1080p_Links_E22', '$W_1080p_Links_E23', '$W_1080p_Links_E24', '$W_1080p_Links_E25', '$W_1080p_Links_E26', '$W_1080p_Links_E27', '$W_1080p_Links_E28', '$W_1080p_Links_E29', '$W_1080p_Links_E30')";


    $insertqurey_web_w_l= "INSERT INTO movies_data_webseries_watch_links (date_time_wl, w_480p_links_e1, w_480p_links_e2, w_480p_links_e3, w_480p_links_e4, w_480p_links_e5, w_480p_links_e6, w_480p_links_e7, w_480p_links_e8, w_480p_links_e9, w_480p_links_e10, w_480p_links_e11, w_480p_links_e12, w_480p_links_e13, w_480p_links_e14, w_480p_links_e15, w_480p_links_e16, w_480p_links_e17, w_480p_links_e18, w_480p_links_e19, w_480p_links_e20, w_480p_links_e21, w_480p_links_e22, w_480p_links_e23, w_480p_links_e24, w_480p_links_e25, w_480p_links_e26, w_480p_links_e27 , w_480p_links_e28, w_480p_links_e29, w_480p_links_e30, w_720p_links_e1, w_720p_links_e2, w_720p_links_e3, w_720p_links_e4, w_720p_links_e5, w_720p_links_e6, w_720p_links_e7, w_720p_links_e8, w_720p_links_e9, w_720p_links_e10, w_720p_links_e11, w_720p_links_e12, w_720p_links_e13, w_720p_links_e14, w_720p_links_e15, w_720p_links_e16, w_720p_links_e17, w_720p_links_e18, w_720p_links_e19, w_720p_links_e20, w_720p_links_e21, w_720p_links_e22, w_720p_links_e23, w_720p_links_e24, w_720p_links_e25, w_720p_links_e26, w_720p_links_e27, w_720p_links_e28, w_720p_links_e29, w_720p_links_e30, w_1080p_links_e1, w_1080p_links_e2, w_1080p_links_e3, w_1080p_links_e4, w_1080p_links_e5, w_1080p_links_e6, w_1080p_links_e7, w_1080p_links_e8, w_1080p_links_e9, w_1080p_links_e10, w_1080p_links_e11, w_1080p_links_e12, w_1080p_links_e13, w_1080p_links_e14, w_1080p_links_e15, w_1080p_links_e16, w_1080p_links_e17, w_1080p_links_e18, w_1080p_links_e19, w_1080p_links_e20, w_1080p_links_e21, w_1080p_links_e22, w_1080p_links_e23, w_1080p_links_e24, w_1080p_links_e25, w_1080p_links_e26, w_1080p_links_e27, w_1080p_links_e28, w_1080p_links_e29, w_1080p_links_e30) VALUES ('$Current_Date', '$W_480p_Watch_Links_E1', '$W_480p_Watch_Links_E2', '$W_480p_Watch_Links_E3', '$W_480p_Watch_Links_E4', '$W_480p_Watch_Links_E5', '$W_480p_Watch_Links_E6', '$W_480p_Watch_Links_E7', '$W_480p_Watch_Links_E8', '$W_480p_Watch_Links_E9', '$W_480p_Watch_Links_E10', '$W_480p_Watch_Links_E11', '$W_480p_Watch_Links_E12', '$W_480p_Watch_Links_E13', '$W_480p_Watch_Links_E14', '$W_480p_Watch_Links_E15', '$W_480p_Watch_Links_E16', '$W_480p_Watch_Links_E17', '$W_480p_Watch_Links_E18', '$W_480p_Watch_Links_E19', '$W_480p_Watch_Links_E20', '$W_480p_Watch_Links_E21', '$W_480p_Watch_Links_E22', '$W_480p_Watch_Links_E23', '$W_480p_Watch_Links_E24', '$W_480p_Watch_Links_E25', '$W_480p_Watch_Links_E26', '$W_480p_Watch_Links_E27', '$W_480p_Watch_Links_E28', '$W_480p_Watch_Links_E29', '$W_480p_Watch_Links_E30', '$W_720p_Watch_Links_E1', '$W_720p_Watch_Links_E2', '$W_720p_Watch_Links_E3', '$W_720p_Watch_Links_E4', '$W_720p_Watch_Links_E5', '$W_720p_Watch_Links_E6', '$W_720p_Watch_Links_E7', '$W_720p_Watch_Links_E8', '$W_720p_Watch_Links_E9', '$W_720p_Watch_Links_E10', '$W_720p_Watch_Links_E11', '$W_720p_Watch_Links_E12', '$W_720p_Watch_Links_E13', '$W_720p_Watch_Links_E14', '$W_720p_Watch_Links_E15', '$W_720p_Watch_Links_E16', '$W_720p_Watch_Links_E17', '$W_720p_Watch_Links_E18', '$W_720p_Watch_Links_E19', '$W_720p_Watch_Links_E20', '$W_720p_Watch_Links_E21', '$W_720p_Watch_Links_E22', '$W_720p_Watch_Links_E23', '$W_720p_Watch_Links_E24', '$W_720p_Watch_Links_E25', '$W_720p_Watch_Links_E26', '$W_720p_Watch_Links_E27', '$W_720p_Watch_Links_E28', '$W_720p_Watch_Links_E29', '$W_720p_Watch_Links_E30', '$W_1080p_Watch_Links_E1', '$W_1080p_Watch_Links_E2', '$W_1080p_Watch_Links_E3', '$W_1080p_Watch_Links_E4', '$W_1080p_Watch_Links_E5', '$W_1080p_Watch_Links_E6', '$W_1080p_Watch_Links_E7', '$W_1080p_Watch_Links_E8', '$W_1080p_Watch_Links_E9', '$W_1080p_Watch_Links_E10', '$W_1080p_Watch_Links_E11', '$W_1080p_Watch_Links_E12', '$W_1080p_Watch_Links_E13', '$W_1080p_Watch_Links_E14', '$W_1080p_Watch_Links_E15', '$W_1080p_Watch_Links_E16', '$W_1080p_Watch_Links_E17', '$W_1080p_Watch_Links_E18', '$W_1080p_Watch_Links_E19', '$W_1080p_Watch_Links_E20', '$W_1080p_Watch_Links_E21', '$W_1080p_Watch_Links_E22', '$W_1080p_Watch_Links_E23', '$W_1080p_Watch_Links_E24', '$W_1080p_Watch_Links_E25', '$W_1080p_Watch_Links_E26', '$W_1080p_Watch_Links_E27', '$W_1080p_Watch_Links_E28', '$W_1080p_Watch_Links_E29', '$W_1080p_Watch_Links_E30')";


    mysqli_query($link, $insertqurey);
    mysqli_query($link, $insertqurey_web_w_l);

    if (mysqli_query($link, $insertqurey_web_l)) {
     $_SESSION['message'] = "Added Successfully";
     header("Location:index.php");
     exit(); 
   } else {
    $_SESSION['message_error'] = mysqli_error($link);
    header("Location:index.php");
    exit();
  }

}else{

  if (mysqli_query($link, $insertqurey)) {
   $_SESSION['message'] = "Added Successfully";
   header("Location:index.php");
   exit(); 
 } else {
  $_SESSION['message_error'] = mysqli_error($link);
  header("Location:index.php");
  exit();

}

}

}




?>


<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>MoviesArea.online | Add Movies</title>
  <link rel ="icon" href ="../image/icon.png" type ="image/x-icon"> 

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <style type="text/css">  

    select{
      border: 1px solid #d1d3e2;
      border-radius: 5px;
    }
    select:focus{
      outline: none;
    }
    #snackbar {
      visibility: hidden;
      min-width: 250px;
      margin-left: -125px;
      background-color: #333;
      color: #fff;
      text-align: center;
      border-radius: 2px;
      padding: 16px;
      position: fixed;
      z-index: 1;
      left: 50%;
      bottom: 30px;
      font-size: 17px;
    }

    #snackbar.show {
      visibility: visible;
      -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
      animation: fadein 0.5s, fadeout 0.5s 2.5s;
    }

    @-webkit-keyframes fadein {
      from {bottom: 0; opacity: 0;} 
      to {bottom: 30px; opacity: 1;}
    }

    @keyframes fadein {
      from {bottom: 0; opacity: 0;}
      to {bottom: 30px; opacity: 1;}
    }

    @-webkit-keyframes fadeout {
      from {bottom: 30px; opacity: 1;} 
      to {bottom: 0; opacity: 0;}
    }

    @keyframes fadeout {
      from {bottom: 30px; opacity: 1;}
      to {bottom: 0; opacity: 0;}
    }

    .vl {
      border-left: 1px solid;
      margin-right: 1.5rem;
    }
    .gallery img{
      margin: 5px;
    }
    @media(max-width: 767px){
      .vl {
        display: none;
      }
    }

    .webseries_sh{
      text-align: center;
      border: 1px solid;
      border-radius: 8px;
      padding: 15px;
      display: none;
    }

  </style>
</head>

<body id="page-top" onload="myFunction();">
  <?php
  if (isset($_SESSION['message'])) {
    echo "<div id='snackbar' style='background-color:green!important'>".$_SESSION['message']."</div>";
    unset($_SESSION['message']);
  } 
  if (isset($_SESSION['message_error'])) {
    echo "<div id='snackbar' style='background-color:red!important';>".$_SESSION['message_error']."</div>";
    unset($_SESSION['message_error']);
  } 
  if (isset($_SESSION['edit_message'])) {
    echo "<div id='snackbar' style='background-color:green!important';>".$_SESSION['edit_message']."</div>";
    unset($_SESSION['edit_message']);
  } 
  if (isset($_SESSION['edit_message_error'])) {
    echo "<div id='snackbar' style='background-color:red!important';>".$_SESSION['edit_message_error']."</div>";
    unset($_SESSION['edit_message_error']);
  }
  if (isset($_SESSION['delete_message'])) {
    echo "<div id='snackbar' style='background-color:green!important';>".$_SESSION['delete_message']."</div>";
    unset($_SESSION['delete_message']);
  }   
  if (isset($_SESSION['delete_message_error'])) {
    echo "<div id='snackbar' style='background-color:red!important';>".$_SESSION['delete_message_error']."</div>";
    unset($_SESSION['delete_message_error']);
  }
  ?>
  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php include "sidebar.php" ?>

    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php include "topbar.php" ?>

        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- modal -->

          <div id="luanch_modal" aria-labelledby="myLargeModalLabel" role="dialog" style="margin-bottom: 25px;">
            <div class="">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Add Movies</h4>
                </div>
                <div class="modal-body">
                  <form method="POST" class="row" enctype="multipart/form-data" id="reset" name="reset" action="index.php">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                      <div class="form-group">
                        <label>Movie Image</label><br>
                        <div style="display: inline-flex;height: 40px;width: 100%">
                          <input type="file" class="form-control container-fluid" id="Movie_Image" name="Movie_Image" onchange="readURL(this);" style="height: 43px;" accept="image/*" required="required">
                          <img class="blah" style="margin-left: 10px;top:-30px; position: relative;">
                        </div>
                      </div>

                      <div class="form-group"> 

                        <label for="Movie_Name">Movie Name</label>
                        <input type="text" class="form-control" id="Movie_Name" name="Movie_Name" required="required" maxlength="70">
                      </div>

                      <div class="form-group">

                        <label for="Movie_Description">Movie Description</label>
                        <textarea type="text" class="form-control" id="Movie_Description" name="Movie_Description" required="required" style="height: 55px;"></textarea>
                      </div>                      
                      <div class="form-group">

                        <label for="Movie_ShortName">Movie ShortName</label>
                        <input type="text" class="form-control" id="Movie_ShortName" name="Movie_ShortName" required="required">
                      </div>                      
                      <div class="form-group">

                        <label for="Movie_IMDb_Rating">IMDb Rating</label>
                        <input type="text" class="form-control" id="Movie_IMDb_Rating" name="Movie_IMDb_Rating" required="required">
                      </div>                      
                      <div class="form-group">

                        <label for="Movie_Director">Movie Director</label>
                        <input type="text" class="form-control" id="Movie_Director" name="Movie_Director" required="required">
                      </div>                       
                      <div class="form-group">

                        <label for="Movie_Stars">Movie Stars</label>
                        <input type="text" class="form-control" id="Movie_Stars" name="Movie_Stars" required="required">
                      </div>
                      <div class="form-group" style="text-align: center;">
                        <label>Movie Catagory</label>
                        <div style="display: inline-flex;">
                          <select name="Movie_Catagory" id="Movie_Catagory" style="margin-left: 5px;">
                            <option value="Hollywood">Hollywood</option>
                            <option value="Web Series">Web Series</option>
                            <option value="Hindi Movies">Hindi Movies</option>  
                          </select>
                        </div>

                        <label>Year</label>
                        <div style="display: inline-flex;">
                          <select name="Movie_Year" style="margin-left: 5px;">
                            <option value="2021">2021</option>
                            <option value="2020">2020</option>
                            <option value="2019">2019</option>  
                            <option value="2018">2018</option>
                            <option value="2017">2017</option> 
                            <option value="2016">2016</option>
                            <option value="2015">2015</option>         
                            <option value="2010-2015">2010-2015</option>
                            <option value="2005-2010">2005-2010</option> 
                            <option value="2000-2005">2000-2005</option> 
                            <option value="1980-2000">1980-2000</option> 

                          </select>
                        </div>
                      </div> 
                      <div class="form-group">
                        <label>SS Images (6 images)</label><br>
                        <div style="display: inline-flex;height: 50px;width: 100%;">
                          <input type="file" class="form-control container-fluid" id="ss_images" name="ss_images[]" onchange="readURL2(this);" multiple="multiple" style="height: 43px;" accept="image/*" required="required">
                        </div>

                      </div>
                      <div class="form-group">
                        <div class="gallery"></div>
                      </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="display: inline-flex;">
                      <div class="vl"></div>
                      <div style="width: 100%">

                        <div class="form-group" style="display: inline-flex;"> 
                          <div class="col-lg-5 col-md-5 col-sm-3 col-xs-3">
                            <label for="Movie_Links_480p">480p Link</label>
                            <input type="text" class="form-control" id="Movie_Links_480p" name="Movie_Links_480p">
                          </div>
                          <div class="col-lg-4 col-md-4 col-sm-3 col-xs-3">
                            <label for="Movie_Links_480p_Watch">Watch Link</label>
                            <input type="text" class="form-control" id="Movie_Links_480p_Watch" name="Movie_Links_480p_Watch">
                          </div>
                          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <label for="Movie_Size_480p">480p Size</label>
                            <input type="text" class="form-control" id="Movie_Size_480p" name="Movie_Size_480p">
                          </div>
                        </div>
                        <div class="form-group" style="display: inline-flex;">
                          <div class="col-lg-5 col-md-5 col-sm-3 col-xs-3">
                            <label for="Movie_Links_720p">720p Link</label>
                            <input type="text" class="form-control" id="Movie_Links_720p" name="Movie_Links_720p">
                          </div>
                          <div class="col-lg-4 col-md-4 col-sm-3 col-xs-3">
                            <label for="Movie_Links_720p_Watch">Watch Link</label>
                            <input type="text" class="form-control" id="Movie_Links_720p_Watch" name="Movie_Links_720p_Watch">
                          </div>
                          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <label for="Movie_Size_720p">720p Size</label>
                            <input type="text" class="form-control" id="Movie_Size_720p" name="Movie_Size_720p">
                          </div>

                        </div>
                        <div class="form-group" style="display: inline-flex;">
                          <div class="col-lg-5 col-md-5 col-sm-3 col-xs-3">
                            <label for="Movie_Links_1080p">1080p Link</label>
                            <input type="text" class="form-control" id="Movie_Links_1080p" name="Movie_Links_1080p">
                          </div>
                          <div class="col-lg-4 col-md-4 col-sm-3 col-xs-3">
                            <label for="Movie_Links_1080p_Watch">Watch Link</label>
                            <input type="text" class="form-control" id="Movie_Links_1080p_Watch" name="Movie_Links_1080p_Watch">
                          </div>
                          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <label for="Movie_Size_1080p">1080p Size</label>
                            <input type="text" class="form-control" id="Movie_Size_1080p" name="Movie_Size_1080p">
                          </div>
                        </div>  


                        <div style="font-weight: 800"><p>Extra Links</p></div>
                        <div class="form-group" style="display: inline-flex;">
                          <div class="col-lg-1 col-md-1 col-sm-3 col-xs-3">
                            <label>S</label>
                            <label>S2:</label>
                          </div>
                          <div class="col-lg-4 col-md-4 col-sm-3 col-xs-3">
                            <label for="Movie_Links_480p_2">480p Link</label>
                            <input type="text" class="form-control" id="Movie_Links_480p_2" name="Movie_Links_480p_2">
                          </div>
                          <div class="col-lg-4 col-md-4 col-sm-3 col-xs-3">
                            <label for="Movie_Links_720p_2">720p Link</label>
                            <input type="text" class="form-control" id="Movie_Links_720p_2" name="Movie_Links_720p_2">
                          </div>
                          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <label for="Movie_Size_1080p_2">1080p link</label>
                            <input type="text" class="form-control" id="Movie_Links_1080p_2" name="Movie_Links_1080p_2">
                          </div>
                        </div> 
                        <div class="form-group" style="display: inline-flex;">
                          <div class="col-lg-1 col-md-1 col-sm-3 col-xs-3">
                            <label>S3:</label>
                          </div>
                          <div class="col-lg-4 col-md-4 col-sm-3 col-xs-3">
                            <input type="text" class="form-control" id="Movie_Links_480p_3" name="Movie_Links_480p_3">
                          </div>
                          <div class="col-lg-4 col-md-4 col-sm-3 col-xs-3">
                            <input type="text" class="form-control" id="Movie_Links_720p_3" name="Movie_Links_720p_3">
                          </div>
                          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <input type="text" class="form-control" id="Movie_Links_1080p_3" name="Movie_Links_1080p_3">
                          </div>
                        </div> 
                        <div class="form-group" style="display: inline-flex;">
                          <div class="col-lg-1 col-md-1 col-sm-3 col-xs-3">
                            <label>S4:</label>
                          </div>
                          <div class="col-lg-4 col-md-4 col-sm-3 col-xs-3">
                            <input type="text" class="form-control" id="Movie_Links_480p_4" name="Movie_Links_480p_4">
                          </div>
                          <div class="col-lg-4 col-md-4 col-sm-3 col-xs-3">
                            <input type="text" class="form-control" id="Movie_Links_720p_4" name="Movie_Links_720p_4">
                          </div>
                          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <input type="text" class="form-control" id="Movie_Links_1080p_4" name="Movie_Links_1080p_4">
                          </div>
                        </div> 



                        <div class="form-group">
                          <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                              <input type="checkbox" id="Latest_Released_c" name="Latest_Released_c" value="yes">
                              <label for="Latest_Released_c">Latest Released</label><br>
                              <input type="checkbox" id="Dual_Audio_c" name="Dual_Audio_c" value="yes" checked="checked">
                              <label for="Dual_Audio_c">Dual Audio</label><br>
                              <input type="checkbox" id="Multi_Audio_c" name="Multi_Audio_c" value="yes">
                              <label for="Multi_Audio_c">Multi Audio</label><br>
                              <input type="checkbox" id="English_L_c" name="English_L_c" value="yes">
                              <label for="English_L_c">Only English</label><br>
                              <input type="checkbox" id="Hindi_L_c" name="Hindi_L_c" value="yes">
                              <label for="Hindi_L_c">Only Hindi</label><br>
                              <input type="checkbox" id="Adult_Movie_c" name="Adult_Movie_c" value="yes">
                              <label for="Adult_Movie_c">Adult Movie</label><br>
                              <input type="checkbox" id="Asian_Movie_c" name="Asian_Movie_c" value="yes">
                              <label for="Asian_Movie_c">Asian Movie</label><br>
                              <input type="checkbox" id="Hacking_Movie_c" name="Hacking_Movie_c" value="yes">
                              <label for="Hacking_Movie_c">Hacking Movie</label><br>
                              <input type="checkbox" id="English_Movie_c" name="English_Movie_c" value="yes" checked="checked">
                              <label for="English_Movie_c">English Movie</label><br>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">

                              <input type="checkbox" id="480p_Movie_c" name="480p_Movie_c" value="yes" checked="checked">
                              <label for="480p_Movie_c">480p Movie</label><br>
                              <input type="checkbox" id="720p_Movie_c" name="720p_Movie_c" value="yes" checked="checked">
                              <label for="720p_Movie_c">720p Movie</label><br>
                              <input type="checkbox" id="1080p_Movie_c" name="1080p_Movie_c" value="yes" checked="checked">
                              <label for="1080p_Movie_c">1080p Movie</label><br>
                              <input type="checkbox" id="4K_Ultra_HD_c" name="4K_Ultra_HD_c" value="yes">
                              <label for="4K_Ultra_HD_c">4K Ultra HD</label><br>
                              <input type="checkbox" id="300mb_Movie_c" name="300mb_Movie_c" value="yes" checked="checked">
                              <label for="300mb_Movie_c">300mb Movie</label><br>
                              <input type="checkbox" id="500mb_Movie_c" name="500mb_Movie_c" value="yes" checked="checked">
                              <label for="500mb_Movie_c">500mb Movie</label><br>
                              <input type="checkbox" id="700mb_Movie_c" name="700mb_Movie_c" value="yes" checked="checked">
                              <label for="700mb_Movie_c">700mb Movie</label><br>
                              <input type="checkbox" id="1gb_Movie_c" name="1gb_Movie_c" value="yes" checked="checked">
                              <label for="1gb_Movie_c">1gb Movie</label><br>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                              <input type="checkbox" id="G_Action" name="G_Action" value="yes">
                              <label for="G_Action">Action</label><br>                              
                              <input type="checkbox" id="G_Adventure" name="G_Adventure" value="yes" checked="checked">
                              <label for="G_Adventure">Adventure</label><br>                              <input type="checkbox" id="G_Animated" name="G_Animated" value="yes">
                              <label for="G_Animated">Animated</label><br>                              
                              <input type="checkbox" id="G_Comedy" name="G_Comedy" value="yes">
                              <label for="G_Comedy">Comedy</label><br>                              
                              <input type="checkbox" id="G_Crime" name="G_Crime" value="yes">
                              <label for="G_Crime">Crime</label><br>                              
                              <input type="checkbox" id="G_Fantasy" name="G_Fantasy" value="yes">
                              <label for="G_Fantasy">Fantasy</label><br>                              
                              <input type="checkbox" id="G_Horror" name="G_Horror" value="yes">
                              <label for="G_Horror">Horror</label><br>                              
                              <input type="checkbox" id="G_Mystery" name="G_Mystery" value="yes">
                              <label for="G_Mystery">Mystery</label><br>                              
                              <input type="checkbox" id="G_Romance" name="G_Romance" value="yes">
                              <label for="G_Romance">Romance</label><br>                           
                              <input type="checkbox" id="G_Sci-fi" name="G_Sci-fi" value="yes" checked="checked">
                              <label for="G_Sci-fi">Sci-fi</label><br>
                              <input type="checkbox" id="G_Thriller" name="G_Thriller" value="yes">
                              <label for="G_Thriller">Thriller</label><br>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>

                    <div class="webseries_sh col-lg-12" id="webseries_sh">
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
                            <input type="text" class="form-control" id="W_480p_Links_E1" name="W_480p_Links_E1" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_480p_Watch_Links_E1" name="W_480p_Watch_Links_E1" placeholder="Watch Link">
                          </div>        
                        </div>
                        <div class="col-lg-3 row" style="margin: 0!important">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_720p_Links_E1" name="W_720p_Links_E1" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_720p_Watch_Links_E1" name="W_720p_Watch_Links_E1" placeholder="Watch Link">
                          </div>  
                        </div>
                        <div class="col-lg-3 row" style="margin: 0!important">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_1080p_Links_E1" name="W_1080p_Links_E1" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <input type="text" class="form-control" id="W_1080p_Watch_Links_E1" name="W_1080p_Watch_Links_E1" placeholder="Watch Link">
                          </div>  
                        </div>
                      </div> 

                      <div class="row" style="margin-bottom: 10px;">
                        <div class="col-lg-2">Episode 2</div>
                        <div class="col-lg-4 row" style="margin: 0!important;">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_480p_Links_E2" name="W_480p_Links_E2" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_480p_Watch_Links_E2" name="W_480p_Watch_Links_E2" placeholder="Watch Link">
                          </div>        
                        </div>
                        <div class="col-lg-3 row" style="margin: 0!important">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_720p_Links_E2" name="W_720p_Links_E2" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_720p_Watch_Links_E2" name="W_720p_Watch_Links_E2" placeholder="Watch Link">
                          </div>  
                        </div>
                        <div class="col-lg-3 row" style="margin: 0!important">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_1080p_Links_E2" name="W_1080p_Links_E2" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <input type="text" class="form-control" id="W_1080p_Watch_Links_E2" name="W_1080p_Watch_Links_E2W_1080p_Links_E2" placeholder="Watch Link">
                          </div>  
                        </div>
                      </div> 

                      <div class="row" style="margin-bottom: 10px;">
                        <div class="col-lg-2">Episode 3</div>
                        <div class="col-lg-4 row" style="margin: 0!important;">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_480p_Links_E3" name="W_480p_Links_E3" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_480p_Watch_Links_E3" name="W_480p_Watch_Links_E3" placeholder="Watch Link">
                          </div>        
                        </div>
                        <div class="col-lg-3 row" style="margin: 0!important">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_720p_Links_E3" name="W_720p_Links_E3" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_720p_Watch_Links_E3" name="W_720p_Watch_Links_E3" placeholder="Watch Link">
                          </div>  
                        </div>
                        <div class="col-lg-3 row" style="margin: 0!important">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_1080p_Links_E3" name="W_1080p_Links_E3" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <input type="text" class="form-control" id="W_1080p_Watch_Links_E3" name="W_1080p_Watch_Links_E3" placeholder="Watch Link">
                          </div>  
                        </div>
                      </div> 

                      <div class="row" style="margin-bottom: 10px;">
                        <div class="col-lg-2">Episode 4</div>
                        <div class="col-lg-4 row" style="margin: 0!important;">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_480p_Links_E4" name="W_480p_Links_E4" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_480p_Watch_Links_E4" name="W_480p_Watch_Links_E4" placeholder="Watch Link">
                          </div>        
                        </div>
                        <div class="col-lg-3 row" style="margin: 0!important">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_720p_Links_E4" name="W_720p_Links_E4" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_720p_Watch_Links_E4" name="W_720p_Watch_Links_E4" placeholder="Watch Link">
                          </div>  
                        </div>
                        <div class="col-lg-3 row" style="margin: 0!important">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_1080p_Links_E4" name="W_1080p_Links_E4" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <input type="text" class="form-control" id="W_1080p_Watch_Links_E4" name="W_1080p_Watch_Links_E4" placeholder="Watch Link">
                          </div>  
                        </div>
                      </div> 

                      <div class="row" style="margin-bottom: 10px;">
                        <div class="col-lg-2">Episode 5</div>
                        <div class="col-lg-4 row" style="margin: 0!important;">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_480p_Links_E5" name="W_480p_Links_E5" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_480p_Watch_Links_E5" name="W_480p_Watch_Links_E5" placeholder="Watch Link">
                          </div>        
                        </div>
                        <div class="col-lg-3 row" style="margin: 0!important">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_720p_Links_E5" name="W_720p_Links_E5" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_720p_Watch_Links_E5" name="W_720p_Watch_Links_E5" placeholder="Watch Link">
                          </div>  
                        </div>
                        <div class="col-lg-3 row" style="margin: 0!important">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_1080p_Links_E5" name="W_1080p_Links_E5" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <input type="text" class="form-control" id="W_1080p_Watch_Links_E5" name="W_1080p_Watch_Links_E5" placeholder="Watch Link">
                          </div>  
                        </div>
                      </div> 

                      <div class="row" style="margin-bottom: 10px;">
                        <div class="col-lg-2">Episode 6</div>
                        <div class="col-lg-4 row" style="margin: 0!important;">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_480p_Links_E6" name="W_480p_Links_E6" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_480p_Watch_Links_E6" name="W_480p_Watch_Links_E6" placeholder="Watch Link">
                          </div>        
                        </div>
                        <div class="col-lg-3 row" style="margin: 0!important">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_720p_Links_E6" name="W_720p_Links_E6" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_720p_Watch_Links_E6" name="W_720p_Watch_Links_E6" placeholder="Watch Link">
                          </div>  
                        </div>
                        <div class="col-lg-3 row" style="margin: 0!important">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_1080p_Links_E6" name="W_1080p_Links_E6" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <input type="text" class="form-control" id="W_1080p_Watch_Links_E6" name="W_1080p_Watch_Links_E6" placeholder="Watch Link">
                          </div>  
                        </div>
                      </div> 

                      <div class="row" style="margin-bottom: 10px;">
                        <div class="col-lg-2">Episode 7</div>
                        <div class="col-lg-4 row" style="margin: 0!important;">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_480p_Links_E7" name="W_480p_Links_E7" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_480p_Watch_Links_E7" name="W_480p_Watch_Links_E7" placeholder="Watch Link">
                          </div>        
                        </div>
                        <div class="col-lg-3 row" style="margin: 0!important">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_720p_Links_E7" name="W_720p_Links_E7" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_720p_Watch_Links_E7" name="W_720p_Watch_Links_E7" placeholder="Watch Link">
                          </div>  
                        </div>
                        <div class="col-lg-3 row" style="margin: 0!important">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_1080p_Links_E7" name="W_1080p_Links_E7" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <input type="text" class="form-control" id="W_1080p_Watch_Links_E7" name="W_1080p_Watch_Links_E7" placeholder="Watch Link">
                          </div>  
                        </div>
                      </div> 

                      <div class="row" style="margin-bottom: 10px;">
                        <div class="col-lg-2">Episode 8</div>
                        <div class="col-lg-4 row" style="margin: 0!important;">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_480p_Links_E8" name="W_480p_Links_E8" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_480p_Watch_Links_E8" name="W_480p_Watch_Links_E8" placeholder="Watch Link">
                          </div>        
                        </div>
                        <div class="col-lg-3 row" style="margin: 0!important">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_720p_Links_E8" name="W_720p_Links_E8" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_720p_Watch_Links_E8" name="W_720p_Watch_Links_E8" placeholder="Watch Link">
                          </div>  
                        </div>
                        <div class="col-lg-3 row" style="margin: 0!important">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_1080p_Links_E8" name="W_1080p_Links_E8" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <input type="text" class="form-control" id="W_1080p_Watch_Links_E8" name="W_1080p_Watch_Links_E8" placeholder="Watch Link">
                          </div>  
                        </div>
                      </div> 

                      <div class="row" style="margin-bottom: 10px;">
                        <div class="col-lg-2">Episode 9</div>
                        <div class="col-lg-4 row" style="margin: 0!important;">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_480p_Links_E9" name="W_480p_Links_E9" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_480p_Watch_Links_E9" name="W_480p_Watch_Links_E9" placeholder="Watch Link">
                          </div>        
                        </div>
                        <div class="col-lg-3 row" style="margin: 0!important">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_720p_Links_E9" name="W_720p_Links_E9" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_720p_Watch_Links_E9" name="W_720p_Watch_Links_E9" placeholder="Watch Link">
                          </div>  
                        </div>
                        <div class="col-lg-3 row" style="margin: 0!important">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_1080p_Links_E9" name="W_1080p_Links_E9" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <input type="text" class="form-control" id="W_1080p_Watch_Links_E9" name="W_1080p_Watch_Links_E9" placeholder="Watch Link">
                          </div>  
                        </div>
                      </div> 

                      <div class="row" style="margin-bottom: 10px;">
                        <div class="col-lg-2">Episode 10</div>
                        <div class="col-lg-4 row" style="margin: 0!important;">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_480p_Links_E10" name="W_480p_Links_E10" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_480p_Watch_Links_E10" name="W_480p_Watch_Links_E10" placeholder="Watch Link">
                          </div>        
                        </div>
                        <div class="col-lg-3 row" style="margin: 0!important">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_720p_Links_E10" name="W_720p_Links_E10" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_720p_Watch_Links_E10" name="W_720p_Watch_Links_E10" placeholder="Watch Link">
                          </div>  
                        </div>
                        <div class="col-lg-3 row" style="margin: 0!important">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_1080p_Links_E10" name="W_1080p_Links_E10" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <input type="text" class="form-control" id="W_1080p_Watch_Links_E10" name="W_1080p_Watch_Links_E10" placeholder="Watch Link">
                          </div>  
                        </div>
                      </div> 

                      <div class="row" style="margin-bottom: 10px;">
                        <div class="col-lg-2">Episode 11</div>
                        <div class="col-lg-4 row" style="margin: 0!important;">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_480p_Links_E11" name="W_480p_Links_E11" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_480p_Watch_Links_E11" name="W_480p_Watch_Links_E11" placeholder="Watch Link">
                          </div>        
                        </div>
                        <div class="col-lg-3 row" style="margin: 0!important">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_720p_Links_E11" name="W_720p_Links_E11" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_720p_Watch_Links_E11" name="W_720p_Watch_Links_E11" placeholder="Watch Link">
                          </div>  
                        </div>
                        <div class="col-lg-3 row" style="margin: 0!important">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_1080p_Links_E11" name="W_1080p_Links_E11" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <input type="text" class="form-control" id="W_1080p_Watch_Links_E11" name="W_1080p_Watch_Links_E11" placeholder="Watch Link">
                          </div>  
                        </div>
                      </div> 

                      <div class="row" style="margin-bottom: 10px;">
                        <div class="col-lg-2">Episode 12</div>
                        <div class="col-lg-4 row" style="margin: 0!important;">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_480p_Links_E12" name="W_480p_Links_E12" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_480p_Watch_Links_E12" name="W_480p_Watch_Links_E12" placeholder="Watch Link">
                          </div>        
                        </div>
                        <div class="col-lg-3 row" style="margin: 0!important">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_720p_Links_E12" name="W_720p_Links_E12" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_720p_Watch_Links_E12" name="W_720p_Watch_Links_E12" placeholder="Watch Link">
                          </div>  
                        </div>
                        <div class="col-lg-3 row" style="margin: 0!important">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_1080p_Links_E12" name="W_1080p_Links_E12" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <input type="text" class="form-control" id="W_1080p_Watch_Links_E12" name="W_1080p_Watch_Links_E12" placeholder="Watch Link">
                          </div>  
                        </div>
                      </div> 

                      <div class="row" style="margin-bottom: 10px;">
                        <div class="col-lg-2">Episode 13</div>
                        <div class="col-lg-4 row" style="margin: 0!important;">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_480p_Links_E13" name="W_480p_Links_E13" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_480p_Watch_Links_E13" name="W_480p_Watch_Links_E13" placeholder="Watch Link">
                          </div>        
                        </div>
                        <div class="col-lg-3 row" style="margin: 0!important">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_720p_Links_E13" name="W_720p_Links_E13" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_720p_Watch_Links_E13" name="W_720p_Watch_Links_E13" placeholder="Watch Link">
                          </div>  
                        </div>
                        <div class="col-lg-3 row" style="margin: 0!important">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_1080p_Links_E13" name="W_1080p_Links_E13" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <input type="text" class="form-control" id="W_1080p_Watch_Links_E13" name="W_1080p_Watch_Links_E13" placeholder="Watch Link">
                          </div>  
                        </div>
                      </div> 

                      <div class="row" style="margin-bottom: 10px;">
                        <div class="col-lg-2">Episode 14</div>
                        <div class="col-lg-4 row" style="margin: 0!important;">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_480p_Links_E14" name="W_480p_Links_E14" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_480p_Watch_Links_E14" name="W_480p_Watch_Links_E14" placeholder="Watch Link">
                          </div>        
                        </div>
                        <div class="col-lg-3 row" style="margin: 0!important">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_720p_Links_E14" name="W_720p_Links_E14" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_720p_Watch_Links_E14" name="W_720p_Watch_Links_E14" placeholder="Watch Link">
                          </div>  
                        </div>
                        <div class="col-lg-3 row" style="margin: 0!important">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_1080p_Links_E14" name="W_1080p_Links_E14" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <input type="text" class="form-control" id="W_1080p_Watch_Links_E14" name="W_1080p_Watch_Links_E14" placeholder="Watch Link">
                          </div>  
                        </div>
                      </div> 

                      <div class="row" style="margin-bottom: 10px;">
                        <div class="col-lg-2">Episode 15</div>
                        <div class="col-lg-4 row" style="margin: 0!important;">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_480p_Links_E15" name="W_480p_Links_E15" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_480p_Watch_Links_E15" name="W_480p_Watch_Links_E15" placeholder="Watch Link">
                          </div>        
                        </div>
                        <div class="col-lg-3 row" style="margin: 0!important">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_720p_Links_E15" name="W_720p_Links_E15" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_720p_Watch_Links_E15" name="W_720p_Watch_Links_E15" placeholder="Watch Link">
                          </div>  
                        </div>
                        <div class="col-lg-3 row" style="margin: 0!important">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_1080p_Links_E15" name="W_1080p_Links_E15" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <input type="text" class="form-control" id="W_1080p_Watch_Links_E15" name="W_1080p_Watch_Links_E15" placeholder="Watch Link">
                          </div>  
                        </div>
                      </div> 

                      <div class="row" style="margin-bottom: 10px;">
                        <div class="col-lg-2">Episode 16</div>
                        <div class="col-lg-4 row" style="margin: 0!important;">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_480p_Links_E16" name="W_480p_Links_E16" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_480p_Watch_Links_E16" name="W_480p_Watch_Links_E16" placeholder="Watch Link">
                          </div>        
                        </div>
                        <div class="col-lg-3 row" style="margin: 0!important">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_720p_Links_E16" name="W_720p_Links_E16" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_720p_Watch_Links_E16" name="W_720p_Watch_Links_E16" placeholder="Watch Link">
                          </div>  
                        </div>
                        <div class="col-lg-3 row" style="margin: 0!important">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_1080p_Links_E16" name="W_1080p_Links_E16" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <input type="text" class="form-control" id="W_1080p_Watch_Links_E16" name="W_1080p_Watch_Links_E16" placeholder="Watch Link">
                          </div>  
                        </div>
                      </div> 

                      <div class="row" style="margin-bottom: 10px;">
                        <div class="col-lg-2">Episode 17</div>
                        <div class="col-lg-4 row" style="margin: 0!important;">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_480p_Links_E17" name="W_480p_Links_E17" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_480p_Watch_Links_E17" name="W_480p_Watch_Links_E17" placeholder="Watch Link">
                          </div>        
                        </div>
                        <div class="col-lg-3 row" style="margin: 0!important">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_720p_Links_E17" name="W_720p_Links_E17" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_720p_Watch_Links_E17" name="W_720p_Watch_Links_E17" placeholder="Watch Link">
                          </div>  
                        </div>
                        <div class="col-lg-3 row" style="margin: 0!important">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_1080p_Links_E17" name="W_1080p_Links_E17" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <input type="text" class="form-control" id="W_1080p_Watch_Links_E17" name="W_1080p_Watch_Links_E17" placeholder="Watch Link">
                          </div>  
                        </div>
                      </div> 

                      <div class="row" style="margin-bottom: 10px;">
                        <div class="col-lg-2">Episode 18</div>
                        <div class="col-lg-4 row" style="margin: 0!important;">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_480p_Links_E18" name="W_480p_Links_E18" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_480p_Watch_Links_E18" name="W_480p_Watch_Links_E18" placeholder="Watch Link">
                          </div>        
                        </div>
                        <div class="col-lg-3 row" style="margin: 0!important">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_720p_Links_E18" name="W_720p_Links_E18" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_720p_Watch_Links_E18" name="W_720p_Watch_Links_E18" placeholder="Watch Link">
                          </div>  
                        </div>
                        <div class="col-lg-3 row" style="margin: 0!important">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_1080p_Links_E18" name="W_1080p_Links_E18" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <input type="text" class="form-control" id="W_1080p_Watch_Links_E18" name="W_1080p_Watch_Links_E18" placeholder="Watch Link">
                          </div>  
                        </div>
                      </div> 

                      <div class="row" style="margin-bottom: 10px;">
                        <div class="col-lg-2">Episode 19</div>
                        <div class="col-lg-4 row" style="margin: 0!important;">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_480p_Links_E19" name="W_480p_Links_E19" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_480p_Watch_Links_E19" name="W_480p_Watch_Links_E19" placeholder="Watch Link">
                          </div>        
                        </div>
                        <div class="col-lg-3 row" style="margin: 0!important">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_720p_Links_E19" name="W_720p_Links_E19" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_720p_Watch_Links_E19" name="W_720p_Watch_Links_E19" placeholder="Watch Link">
                          </div>  
                        </div>
                        <div class="col-lg-3 row" style="margin: 0!important">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_1080p_Links_E19" name="W_1080p_Links_E19" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <input type="text" class="form-control" id="W_1080p_Watch_Links_E19" name="W_1080p_Watch_Links_E19" placeholder="Watch Link">
                          </div>  
                        </div>
                      </div> 

                      <div class="row" style="margin-bottom: 10px;">
                        <div class="col-lg-2">Episode 20</div>
                        <div class="col-lg-4 row" style="margin: 0!important;">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_480p_Links_E20" name="W_480p_Links_E20" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_480p_Watch_Links_E20" name="W_480p_Watch_Links_E20" placeholder="Watch Link">
                          </div>        
                        </div>
                        <div class="col-lg-3 row" style="margin: 0!important">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_720p_Links_E20" name="W_720p_Links_E20" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_720p_Watch_Links_E20" name="W_720p_Watch_Links_E20" placeholder="Watch Link">
                          </div>  
                        </div>
                        <div class="col-lg-3 row" style="margin: 0!important">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_1080p_Links_E20" name="W_1080p_Links_E20" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <input type="text" class="form-control" id="W_1080p_Watch_Links_E20" name="W_1080p_Watch_Links_E20" placeholder="Watch Link">
                          </div>  
                        </div>
                      </div> 

                      <div class="row" style="margin-bottom: 10px;">
                        <div class="col-lg-2">Episode 21</div>
                        <div class="col-lg-4 row" style="margin: 0!important;">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_480p_Links_E21" name="W_480p_Links_E21" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_480p_Watch_Links_E21" name="W_480p_Watch_Links_E21" placeholder="Watch Link">
                          </div>        
                        </div>
                        <div class="col-lg-3 row" style="margin: 0!important">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_720p_Links_E21" name="W_720p_Links_E21" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_720p_Watch_Links_E21" name="W_720p_Watch_Links_E21" placeholder="Watch Link">
                          </div>  
                        </div>
                        <div class="col-lg-3 row" style="margin: 0!important">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_1080p_Links_E21" name="W_1080p_Links_E21" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <input type="text" class="form-control" id="W_1080p_Watch_Links_E21" name="W_1080p_Watch_Links_E21" placeholder="Watch Link">
                          </div>  
                        </div>
                      </div> 

                      <div class="row" style="margin-bottom: 10px;">
                        <div class="col-lg-2">Episode 22</div>
                        <div class="col-lg-4 row" style="margin: 0!important;">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_480p_Links_E22" name="W_480p_Links_E22" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_480p_Watch_Links_E22" name="W_480p_Watch_Links_E22" placeholder="Watch Link">
                          </div>        
                        </div>
                        <div class="col-lg-3 row" style="margin: 0!important">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_720p_Links_E22" name="W_720p_Links_E22" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_720p_Watch_Links_E22" name="W_720p_Watch_Links_E22" placeholder="Watch Link">
                          </div>  
                        </div>
                        <div class="col-lg-3 row" style="margin: 0!important">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_1080p_Links_E22" name="W_1080p_Links_E22" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <input type="text" class="form-control" id="W_1080p_Watch_Links_E22" name="W_1080p_Watch_Links_E22" placeholder="Watch Link">
                          </div>  
                        </div>
                      </div> 

                      <div class="row" style="margin-bottom: 10px;">
                        <div class="col-lg-2">Episode 23</div>
                        <div class="col-lg-4 row" style="margin: 0!important;">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_480p_Links_E23" name="W_480p_Links_E23" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_480p_Watch_Links_E23" name="W_480p_Watch_Links_E23" placeholder="Watch Link">
                          </div>        
                        </div>
                        <div class="col-lg-3 row" style="margin: 0!important">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_720p_Links_E23" name="W_720p_Links_E23" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_720p_Watch_Links_E23" name="W_720p_Watch_Links_E23" placeholder="Watch Link">
                          </div>  
                        </div>
                        <div class="col-lg-3 row" style="margin: 0!important">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_1080p_Links_E23" name="W_1080p_Links_E23" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <input type="text" class="form-control" id="W_1080p_Watch_Links_E23" name="W_1080p_Watch_Links_E23" placeholder="Watch Link">
                          </div>  
                        </div>
                      </div> 

                      <div class="row" style="margin-bottom: 10px;">
                        <div class="col-lg-2">Episode 24</div>
                        <div class="col-lg-4 row" style="margin: 0!important;">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_480p_Links_E24" name="W_480p_Links_E24" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_480p_Watch_Links_E24" name="W_480p_Watch_Links_E24" placeholder="Watch Link">
                          </div>        
                        </div>
                        <div class="col-lg-3 row" style="margin: 0!important">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_720p_Links_E24" name="W_720p_Links_E24" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_720p_Watch_Links_E24" name="W_720p_Watch_Links_E24" placeholder="Watch Link">
                          </div>  
                        </div>
                        <div class="col-lg-3 row" style="margin: 0!important">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_1080p_Links_E24" name="W_1080p_Links_E24" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <input type="text" class="form-control" id="W_1080p_Watch_Links_E24" name="W_1080p_Watch_Links_E24" placeholder="Watch Link">
                          </div>  
                        </div>
                      </div> 

                      <div class="row" style="margin-bottom: 10px;">
                        <div class="col-lg-2">Episode 25</div>
                        <div class="col-lg-4 row" style="margin: 0!important;">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_480p_Links_E25" name="W_480p_Links_E25" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_480p_Watch_Links_E25" name="W_480p_Watch_Links_E25" placeholder="Watch Link">
                          </div>        
                        </div>
                        <div class="col-lg-3 row" style="margin: 0!important">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_720p_Links_E25" name="W_720p_Links_E25" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_720p_Watch_Links_E25" name="W_720p_Watch_Links_E25" placeholder="Watch Link">
                          </div>  
                        </div>
                        <div class="col-lg-3 row" style="margin: 0!important">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_1080p_Links_E25" name="W_1080p_Links_E25" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <input type="text" class="form-control" id="W_1080p_Watch_Links_E25" name="W_1080p_Watch_Links_E25" placeholder="Watch Link">
                          </div>  
                        </div>
                      </div> 

                      <div class="row" style="margin-bottom: 10px;">
                        <div class="col-lg-2">Episode 26</div>
                        <div class="col-lg-4 row" style="margin: 0!important;">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_480p_Links_E26" name="W_480p_Links_E26" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_480p_Watch_Links_E26" name="W_480p_Watch_Links_E26" placeholder="Watch Link">
                          </div>        
                        </div>
                        <div class="col-lg-3 row" style="margin: 0!important">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_720p_Links_E26" name="W_720p_Links_E26" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_720p_Watch_Links_E26" name="W_720p_Watch_Links_E26" placeholder="Watch Link">
                          </div>  
                        </div>
                        <div class="col-lg-3 row" style="margin: 0!important">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_1080p_Links_E26" name="W_1080p_Links_E26" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <input type="text" class="form-control" id="W_1080p_Watch_Links_E26" name="W_1080p_Watch_Links_E26" placeholder="Watch Link">
                          </div>  
                        </div>
                      </div> 

                      <div class="row" style="margin-bottom: 10px;">
                        <div class="col-lg-2">Episode 27</div>
                        <div class="col-lg-4 row" style="margin: 0!important;">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_480p_Links_E27" name="W_480p_Links_E27" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_480p_Watch_Links_E27" name="W_480p_Watch_Links_E27" placeholder="Watch Link">
                          </div>        
                        </div>
                        <div class="col-lg-3 row" style="margin: 0!important">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_720p_Links_E27" name="W_720p_Links_E27" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_720p_Watch_Links_E27" name="W_720p_Watch_Links_E27" placeholder="Watch Link">
                          </div>  
                        </div>
                        <div class="col-lg-3 row" style="margin: 0!important">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_1080p_Links_E27" name="W_1080p_Links_E27" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <input type="text" class="form-control" id="W_1080p_Watch_Links_E27" name="W_1080p_Watch_Links_E27" placeholder="Watch Link">
                          </div>  
                        </div>
                      </div> 

                      <div class="row" style="margin-bottom: 10px;">
                        <div class="col-lg-2">Episode 28</div>
                        <div class="col-lg-4 row" style="margin: 0!important;">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_480p_Links_E28" name="W_480p_Links_E28" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_480p_Watch_Links_E28" name="W_480p_Watch_Links_E28" placeholder="Watch Link">
                          </div>        
                        </div>
                        <div class="col-lg-3 row" style="margin: 0!important">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_720p_Links_E28" name="W_720p_Links_E28" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_720p_Watch_Links_E28" name="W_720p_Watch_Links_E28" placeholder="Watch Link">
                          </div>  
                        </div>
                        <div class="col-lg-3 row" style="margin: 0!important">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_1080p_Links_E28" name="W_1080p_Links_E28" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <input type="text" class="form-control" id="W_1080p_Watch_Links_E28" name="W_1080p_Watch_Links_E28" placeholder="Watch Link">
                          </div>  
                        </div>
                      </div> 

                      <div class="row" style="margin-bottom: 10px;">
                        <div class="col-lg-2">Episode 29</div>
                        <div class="col-lg-4 row" style="margin: 0!important;">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_480p_Links_E29" name="W_480p_Links_E29" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_480p_Watch_Links_E29" name="W_480p_Watch_Links_E29" placeholder="Watch Link">
                          </div>        
                        </div>
                        <div class="col-lg-3 row" style="margin: 0!important">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_720p_Links_E29" name="W_720p_Links_E29" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_720p_Watch_Links_E29" name="W_720p_Watch_Links_E29" placeholder="Watch Link">
                          </div>  
                        </div>
                        <div class="col-lg-3 row" style="margin: 0!important">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_1080p_Links_E29" name="W_1080p_Links_E29" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <input type="text" class="form-control" id="W_1080p_Watch_Links_E29" name="W_1080p_Watch_Links_E29" placeholder="Watch Link">
                          </div>  
                        </div>
                      </div> 

                      <div class="row" style="margin-bottom: 10px;">
                        <div class="col-lg-2">Episode 30</div>
                        <div class="col-lg-4 row" style="margin: 0!important;">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_480p_Links_E30" name="W_480p_Links_E30" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_480p_Watch_Links_E30" name="W_480p_Watch_Links_E30" placeholder="Watch Link">
                          </div>        
                        </div>
                        <div class="col-lg-3 row" style="margin: 0!important">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_720p_Links_E30" name="W_720p_Links_E30" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_720p_Watch_Links_E30" name="W_720p_Watch_Links_E30" placeholder="Watch Link">
                          </div>  
                        </div>
                        <div class="col-lg-3 row" style="margin: 0!important">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-right:0!important">
                            <input type="text" class="form-control" id="W_1080p_Links_E30" name="W_1080p_Links_E30" placeholder="Download Link">
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <input type="text" class="form-control" id="W_1080p_Watch_Links_E30" name="W_1080p_Watch_Links_E30" placeholder="Watch Link">
                          </div>  
                        </div>
                      </div> 

                    </div>

                    <div class="modal-footer col-lg-12">
                      <button type="submit" id="Add_data" name="Add_data" class="btn btn-primary">Add</button>
                    </div>

                  </form>
                </div>
              </div>
            </div>
          </div>


          <!-- DataTales Example -->
          <div>
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">All Movies</h6>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" >
                    <thead>
                      <tr>
                        <th>Id</th>
                        <th>Movie Image</th>
                        <th>Movie Name</th>
                        <th>Movie Catagory</th>
                        <th>Year</th>
                        <th>Date_Time</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>


                      <?php

                      $sql = "SELECT * FROM movies_data";
                      $query = mysqli_query($link,$sql);
                      while($row=mysqli_fetch_assoc($query)){
                        $id = $row['id']; 
                        $movie_name = $row['movie_name']; 
                        $movie_catagory = $row['movie_catagory'];
                        $year = $row['year']; 
                        $Date_Time   = $row['date_time']; 
                        $main_image = $row['main_image'];

                        echo "<tr>
                        <td>$id</td>
                        <td><img src='photo/$main_image' width='70px' height = '100px'></td>
                        <td>$movie_name...</td>
                        <td>$movie_catagory</td>
                        <td>$year</td>
                        <td>$Date_Time</td>
                        <td>
                        <img src='img/edit.png' width='30px' data-id='{$id}' class='getdataid' data-toggle='modal' style='cursor:pointer'>
                        <img src='img/delete.png' width='30px'class=' delete_data_id' data-id='{$id}' style='cursor:pointer'></td>
                        </tr>";
                      }

                      ?>

                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Id</th>
                        <th>Movies Image</th>
                        <th>Movie Name</th>
                        <th>Movie Catagory</th>
                        <th>Year</th>
                        <th>Date_Time</th>
                        <th>Action</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>


  <div id="edit_menu_modal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-xl">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Edit Movie</h4>
          <button type="button" class="btn btn-primary" data-dismiss="modal">&times;</button>
        </div>
        <div id="employee_detail" class="modal-body">
        </div>
      </div>
    </div>
  </div>

  <!--modal-->

  <div id="delete_menu_modal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Delete Movie</h4>
          <button type="button" class="btn btn-primary" data-dismiss="modal">&times;</button>
        </div>
        <div id="delete_data" class="modal-body">
          <div class="modal-footer">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- modal -->

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>
  <script type="text/javascript">


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


    $(function() {
    // Multiple images preview in browser
    var imagesPreview = function(input, placeToInsertImagePreview) {

      if (input.files) {
        var filesAmount = input.files.length;

        for (i = 0; i < filesAmount; i++) {
          var reader = new FileReader();

          if (filesAmount > i) {

            reader.onload = function(event) {
              $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(placeToInsertImagePreview)
              .width(70)
              .height(70);
            }
          }

          reader.readAsDataURL(input.files[i]);
        }
      }

    };

    $('#ss_images').on('change', function() {
      imagesPreview(this, 'div.gallery');
    });
  });




    $('.getdataid').click(function(){
      var dataId = $(this).attr("data-id");

      $.ajax({
        method:"GET",
        url: "edit_data.php?dataid="+dataId,
        success:function(data){
          $('#employee_detail').html(data);
          $('#edit_menu_modal').modal("show");

        }     
      });
    });

    $('.delete_data_id').click(function(){
      var dataId = $(this).attr("data-id");

      $.ajax({
        method:"POST",
        url: "delete_data.php",
        data:{dataid:dataId},
        success:function(data){
          $('#delete_data').html(data);
          $('#delete_menu_modal').modal("show");

        }     
      });
    });

    function myFunction() {
      var x = document.getElementById("snackbar");
      x.className = "show";
      setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
    }

  </script>

  <script type="text/javascript">

    var table = $('#dataTable').DataTable();

// Sort by column 1 and then re-draw
table
.order( [ 0, 'desc' ] )
.draw();

</script>

<!-- show hide websires -->
<script>  
  $(document).ready(function(){
    $('#Movie_Catagory').on('change', function() {
      if ( this.value == 'Web Series')
      {
        $("#webseries_sh").show();
      }
      else
      {
        $("#webseries_sh").hide();
      }
    });
  });
</script>

</body>

</html>


