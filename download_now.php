<?php
include 'config.php';

$sql = "SELECT link FROM shortaner_data_movie WHERE id ='".$_GET['id']."'";
$query = mysqli_query($link,$sql);

if (!$query){
	die('Invalid query: '.mysqli_error($link));
}
$row=mysqli_fetch_assoc($query);
$getlink = $row['link'];
$newtabopen = "https://moviesarea.online";


$sql_q = "SELECT * FROM movies_data WHERE id ='".$_GET['qid']."'";
$query_q = mysqli_query($link,$sql_q);

if (!$query_q){
	die('Invalid query: '.mysqli_error($link));
}

$row_q=mysqli_fetch_assoc($query_q);
	$get_name = $row_q['movie_shortname'];


if ($_GET['q'] == "480") {
	$getlink_q = $row_q['480p_watch_links'];
	$download_link_2 = $row_q['480p_links_2'];
	$download_link_3 = $row_q['480p_links_3'];
	$download_link_4 = $row_q['480p_links_4'];
}
if ($_GET['q'] == "720") {
	$getlink_q = $row_q['720p_watch_links'];
	$download_link_2 = $row_q['720p_links_2'];
	$download_link_3 = $row_q['720p_links_3'];
	$download_link_4 = $row_q['720p_links_4'];
}	
if ($_GET['q'] == "1080") {
	$getlink_q = $row_q['1080p_watch_links'];
	$download_link_2 = $row_q['1080p_links_2'];
	$download_link_3 = $row_q['1080p_links_3'];
	$download_link_4 = $row_q['1080p_links_4'];
}

if(isset($_GET['wid'])){

	$sql_wid_w = "SELECT * FROM movies_data_webseries_links WHERE id ='".$_GET['wid']."'";
	$query_wid_w = mysqli_query($link,$sql_wid_w);

	$row_web_l=mysqli_fetch_assoc($query_wid_w);

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

	$sql_wid_w_l = "SELECT * FROM movies_data_webseries_watch_links WHERE id ='".$_GET['wid']."'";
	$query_wid_w_l = mysqli_query($link,$sql_wid_w_l);

	$row_web_w_l=mysqli_fetch_assoc($query_wid_w_l);

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

?>	

<!DOCTYPE>
<html>
<head>
	<title><?php echo $get_name; ?> | download | moviesarea.online</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <link rel="stylesheet" href="css/bootstrap.min.css">
	<style type="text/css">
		p{
			text-align: center;
		}
		button{
			width:auto;
			border-radius:30px;
			background-color:black;
		}
		span{
		    padding: 3px!important;
		}
		.download_button_webseries{
		    display: grid;
    		justify-content: center;
		}
	</style>
</head>
<body>
	<p style="text-align: center;">download links</p>
	<div class="download_button" id="download_button" style='display:flex;justify-content: center;'>
				<p><a href="<?php echo $newtabopen; ?>"><button onclick="openweb()">Download</button></a></p>
				<?php
				if (!empty($getlink_q)) {
					echo "
						<p><a><button onclick='openwebwl()''>Whtch Online</button></a></p>
					";
				}
				if (!empty($download_link_2)) {
					echo "
						<p><a><button onclick='openwebs2()''>Server2</button></a></p>
					";
				}
				if (!empty($download_link_3)) {
					echo "
						<p><a><button onclick='openwebs3()''>Server3</button></a></p>
					";
				}
				if (!empty($download_link_4)) {
					echo "
						<p><a><button onclick='openwebs4()''>Server4</button></a></p>
					";
				}

				?>
		<script type="text/javascript">
			function openweb() {
				window.open("<?php echo $getlink;?>");
			}
			function openwebwl() {
				window.open("<?php echo $getlink_q;?>");
			}
			function openwebs2() {
				window.open("<?php echo $download_link_2;?>");
			}			
			function openwebs3() {
				window.open("<?php echo $download_link_3;?>");
			}			
			function openwebs4() {
				window.open("<?php echo $download_link_4;?>");
			}
		</script>
	</div>
		<?php if(isset($_GET['wid'])){echo "<script>document.getElementById('download_button').style.display = 'none';</script>";}?>
	<div class="download_button_webseries">

		<?php

			if ($_GET['q'] == "480") {

				for ($i=1; $i < 31; $i++) { 
					$W_480 ="W_480p_Links_E$i";
					$W_WL_480 ="W_480p_Watch_Links_E$i";

					if (!empty($$W_480)) {
						echo "
						<div style='display:inline-flex'>
						<span>Episode $i</span>
						<p><a href='$newtabopen'><button onclick='openweb480$i()'>Download</button></a></p>
						<script type='text/javascript'>
							function openweb480$i() {
							window.open('"?><?php echo $$W_480 ?><?php echo"');
							}
						</script> 
						";
						if (!empty($$W_WL_480)) {
							echo "
								<p><a href='"?><?php echo $$W_WL_480 ?><?php echo"'><button>Watch Online</button></a></p>
								</div>
							";
						}else{
							echo "
								<p><a href=''></a></p>
								</div>
							";
						}

					}
				}

			}

			if ($_GET['q'] == "720") {

				for ($i=1; $i < 31; $i++) { 
					$W_720 ="W_720p_Links_E$i";
					$W_WL_720 ="W_720p_Watch_Links_E$i";

					if (!empty($$W_720)) {
						echo "
						<div style='display:inline-flex'>
						<span>Episode $i</span>
						<p><a href='$newtabopen'><button onclick='openweb720$i()'>Download</button></a></p>
						<script type='text/javascript'>
							function openweb720$i() {
							window.open('"?><?php echo $$W_720 ?><?php echo"');
							}
						</script> 
						";
						if (!empty($$W_WL_720)) {
							echo "
								<p><a href='"?><?php echo $$W_WL_720 ?><?php echo"'><button>Watch Online</button></a></p>
								</div>
							";
						}else{
							echo "
								<p><a href=''></a></p>
								</div>
							";
						}

					}
				}

			}

			if ($_GET['q'] == "1080") {

				for ($i=1; $i < 31; $i++) { 
					$W_1080 ="W_1080p_Links_E$i";
					$W_WL_1080 ="W_1080p_Watch_Links_E$i";

					if (!empty($$W_1080)) {
						echo "
						<div style='display:inline-flex'>
						<span>Episode $i</span>
						<p><a href='$newtabopen'><button onclick='openweb1080$i()'>Download</button></a></p>
						<script type='text/javascript'>
							function openweb1080$i() {
							window.open('"?><?php echo $$W_1080 ?><?php echo"');
							}
						</script> 
						";
						if (!empty($$W_WL_1080)) {
							echo "
								<p><a href='"?><?php echo $$W_WL_1080 ?><?php echo"'><button>Watch Online</button></a></p>
								</div>
							";
						}else{
							echo "
								<p><a href=''></a></p>
								</div>
							";
						}

					}
				}

			}

		?>

	</div>

</body>	
</html>