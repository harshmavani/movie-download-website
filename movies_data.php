<?php
session_start();
include "config.php";

$sql = "SELECT * FROM movies_data WHERE id ='".$_GET['id']."'";
$query = mysqli_query($link,$sql);

if (!$query){
	die('Invalid query: '.mysqli_error($link));
}
$row=mysqli_fetch_assoc($query);
	
$id = $row['id'];
$Movie_Name = $row['movie_name']; 
$Movie_Description = $row['movie_description'];

$Movie_ShortName = $row['movie_shortname'];
$Movie_Year = $row['year']; 
$Movie_Catagory = $row['movie_catagory']; 
$Movie_IMDb_Rating = $row['movie_imdb'];

$Movie_c_480p = $row['480p_movies']; 
$Movie_c_720p = $row['720p_movies']; 
$Movie_c_1080p = $row['1080p_movies']; 
$Ultra_HD_c_4K = $row['4k_ultra_hd']; 

$Dual_Audio_c = $row['dual_audio'];
$Multi_Audio_c = $row['multi_audio']; 
$English_c = $row['english_l']; 
$Hindi_c = $row['hindi_l']; 

$Movie_Director = $row['movie_director'];
$Movie_Stars = $row['movie_stars'];

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

$Movie_Image = $row['main_image'];
$Ss_Images1 = $row['ss_images1']; 
$Ss_Images2 = $row['ss_images2']; 
$Ss_Images3 = $row['ss_images3']; 
$Ss_Images4 = $row['ss_images4']; 
$Ss_Images5 = $row['ss_images5'];
$Ss_Images6 = $row['ss_images6'];

// $Movie_Links_480p = "https://www.webschooltoday.com/i-am-not-robot-checker?id=".$row['480p_links']; 
// $Movie_Links_720p = "https://www.webschooltoday.com/i-am-not-robot-checker?id=".$row['720p_links'];
// $Movie_Links_1080p = "https://www.webschooltoday.com/i-am-not-robot-checker?id=".$row['1080p_links'];
$Movie_Links_480p = "http://localhost/projects/new_project/download_now.php?id=".$row['480p_links']; 
$Movie_Links_720p = "http://localhost/projects/new_project/download_now.php?id=".$row['720p_links'];
$Movie_Links_1080p = "http://localhost/projects/new_project/download_now.php?id=".$row['1080p_links'];
$Movie_Size_480p = $row['480p_m_size'];
$Movie_Size_720p = $row['720p_m_size'];
$Movie_Size_1080p = $row['1080p_m_size'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $Movie_ShortName; ?> Download -moviesarea.online</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="css/jquery.min.js"></script>
	<script src="css/bootstrap.min.js"></script>
	<style type="text/css">
		p{
			font-size: 20px;
			color: #01267b;
		}
		.border_box{
			text-align: center;
			border: 1px solid;
			margin-top: 20px;
			margin-bottom: 20px;
			padding: 25px;
		}
		h3 {
			font-size: 24px;
			background-color: #222222;
			color: whitesmoke;
			padding: 10px;
		}
		ul {
			padding: 0;
		}
		.s_Catagory li{
		    padding: 10px;
	        background-color: #e0dede;
        	font-size: 18px;

		}
		.mimage img{
			border: 1px solid;
		    width: 35%;
		    margin: 5px;
		}
		.ssimage img{
			border: 1px solid;
		    width: 80%;
		    margin: 5px;
		}
		.myButton {
		    box-shadow: 4px 4px 9px 3px #01267b;
		    background-color: #01267b;
		    border-radius: 25px;
		    border: 2px solid #ff0000;
		    display: inline-block;
		    cursor: pointer;
		    color: #ff0000;
		    font-family: Arial;
		    font-size: 15px;
		    font-weight: bold;
		    padding: 6px 24px;
		    text-decoration: none;
		    margin: 10px;
		}
		.myButton:hover {
			background-color:#000;
		}
		.myButton:active {
			position:relative;
			top:1px;
		}
		.myButton:focus {
			outline: none;
		}
		span{
		    color: #ff0000a6;
		}
		  @media(max-width: 500px){
			.mimage img{
			    width: 80%;
			}
			.ssimage img{
			    width: 97%;
			    height: 100%
			}
		  }

	</style>
</head>
<body>

	<?php include "topbar.php"; ?>

	<div class="container-fluid" style="margin-top: 70px;padding-right: 0;padding-left: 0;">
		<div class="container">
			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
				<div class="border_box">
					<div class="search-box" style="text-align: center;">
						<div class="form-group">
							<label for="Search_movie" style="margin: 5px;font-weight: bold;margin-left: -215px;">Search:</label>
							<input type="text" id="Search_movie" autocomplete="on" placeholder="Search movie..." />
							<div class="result container-fluid" style="padding-right: 0;padding-left: 0;"></div>
						</div>
						<div id="hr"><hr></div>
					</div>
					<div class="m_data border_box">
						<p style="font-size: 27px;"><?php echo $Movie_Name; ?></p>
					</div>
					<div class="">
						<div class="mimage"><img src="admin/photo/<?php echo $Movie_Image; ?>"></div>
						<h2 style="color: white;background-color: #222222;padding: 8px;">Movie Information</h2>
						<p><?php echo $Movie_Description; ?></p>
						<p><span>Movie Name: </span> <?php echo $Movie_ShortName; ?></p>
						<p><span>Year: </span> <?php echo $Movie_Year; ?></p>
						<p><span>Catagory: </span> <?php echo $Movie_Catagory; ?></p>
						<p><span>IMDb Rating: </span> <?php echo $Movie_IMDb_Rating; ?></p>
						<p><span>Quality: </span> 
							<?php 
								if ($Movie_c_480p == "yes") {echo "480p ";}
								if ($Movie_c_720p == "yes") {echo "| 720p ";} 
								if ($Movie_c_1080p == "yes") {echo "| 1080p ";}
								if ($Ultra_HD_c_4K == "yes") {echo "| 4k Ultra HD";} 
							?>
						</p>
						<p><span>Language: </span>
						 	<?php
								if ($Dual_Audio_c == "yes") {echo "Hindi Dubbed | English (Dual Audio)";}
								if ($English_c == "yes") {echo "English";}
								if ($Hindi_c == "yes") {echo "Hindi";}
								if ($Multi_Audio_c == "yes") {echo "Multi Audio";}
					  	 	?>
						</p>
						<p><span>Director: </span> <?php echo $Movie_Director; ?></p>
						<p><span>Stars: </span> <?php echo $Movie_Stars; ?></p>
						<p><span>Genres: </span> 
							<?php 
								if ($G_Action == "yes") {echo "Action ";}
								if ($G_Adventure == "yes") {echo "| Adventure ";} 
								if ($G_Animated == "yes") {echo "| Animated ";}
								if ($G_Comedy == "yes") {echo "| Comedy";}
								if ($G_Crime == "yes") {echo "| Crime ";} 
								if ($G_Fantasy == "yes") {echo "| Fantasy ";}
								if ($G_Horror == "yes") {echo "| Horror";}			
								if ($G_Mystery == "yes") {echo "| Mystery ";} 
								if ($G_Romance == "yes") {echo "| Romance ";}
								if ($G_Sci_fi == "yes") {echo "| Sci fi";}				
								if ($G_Thriller == "yes") {echo "| Thriller ";} 
							?>
						</p>
						<div class="ssimage">
							<h2 style="color: white;background-color: #222222;padding: 8px;">Screen shots</h2>
							<?php if (strlen($Ss_Images1)>20) {
							  echo "<img src='admin/photo/$Ss_Images1'>";
							} ?>
							<?php if (strlen($Ss_Images2)>20) {
							  echo "<img src='admin/photo/$Ss_Images2'>";
							} ?>													
							<?php if (strlen($Ss_Images3)>20) {
							  echo "<img src='admin/photo/$Ss_Images3'>";
							} ?>
							<?php if (strlen($Ss_Images4)>20) {
							  echo "<img src='admin/photo/$Ss_Images4'>";
							} ?>
							<?php if (strlen($Ss_Images5)>20) {
							  echo "<img src='admin/photo/$Ss_Images5'>";
							} ?>
							<?php if (strlen($Ss_Images6)>20) {
							  echo "<img src='admin/photo/$Ss_Images6'>";
							} ?>
						</div>
						<div class="dlinks">
							<h2>Download Links</h2>
						 		<?php

						 		if ($Movie_Catagory == "Web Series") {
										$wid = $_GET['wid'];
									if (strlen($Movie_Links_480p) != 57) { echo "<a href='$Movie_Links_480p&q=480&qid=$id&wid=$wid'><button class='myButton'>480p Download<p style='margin:0;color: red;font-size: 15px;'>[$Movie_Size_480p]</p></button></a></br>";
									}
									if (strlen($Movie_Links_720p) != 57) { echo "<a href='$Movie_Links_720p&q=720&qid=$id&wid=$wid'><button class='myButton'>720p Download<p style='margin:0;color: red;font-size: 15px;'>[$Movie_Size_720p]</p></button></a></br>";
									}
									if (strlen($Movie_Links_1080p) != 57) { echo "<a href='$Movie_Links_1080p&q=1080&qid=$id&wid=$wid'><button class='myButton'>1080p Download<p  style='margin:0;color: red;font-size: 15px;'>[$Movie_Size_1080p]</p></button></a></br>";
									}
						 		}else{
									if (strlen($Movie_Links_480p) != 57) { echo "<a href='$Movie_Links_480p&q=480&qid=$id'><button class='myButton'>480p Download<p style='margin:0;color: red;font-size: 15px;'>[$Movie_Size_480p]</p></button></a></br>";
									}
									if (strlen($Movie_Links_720p) != 57) { echo "<a href='$Movie_Links_720p&q=720&qid=$id'><button class='myButton'>720p Download<p style='margin:0;color: red;font-size: 15px;'>[$Movie_Size_720p]</p></button></a></br>";
									}
									if (strlen($Movie_Links_1080p) != 57) { echo "<a href='$Movie_Links_1080p&q=1080&qid=$id'><button class='myButton'>1080p Download<p  style='margin:0;color: red;font-size: 15px;'>[$Movie_Size_1080p]</p></button></a></br>";
									}
						 		}

					  	 		?>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div class="border_box" style="padding-top: 0">
					<span>
						<h3>Recent Movie</h3>
						<?php
						$sql2 = "SELECT movie_name,id FROM movies_data ORDER BY id DESC LIMIT 7";
						$query2 = mysqli_query($link,$sql2);
						echo "<ul style='list-style-type: none;'>";
						while($row2=mysqli_fetch_assoc($query2)){
							$id_L = $row2['id'];
							$L_A_M = $row2['movie_name']; 
							echo "<li><a href='movies_data.php?id=$id_L'>$L_A_M</a></li>";
						}
						echo "</ul>";

						?>
						<h3>Catagory</h3>
						<ul class="s_Catagory" style="list-style-type: none;">
							<li><a href="latest_released.php?page=1">Latest released</a></li>
							<li><a href="hollywood.php?page=1">Hollywood</a></li>
							<li><a href="web_series.php?page=1">Web Series</a></li>
							<li><a href="tv_series.php?page=1">Tv Series</a></li>
							<li><a href="hindi_movies.php?page=1">Hindi Movies</a></li>
							<li><a href="dual_audio.php?page=1">Dual Audio</a></li>
							<li><a href="multi_audio.php?page=1">Multi Audio</a></li>
							<li><a href="adult_movies.php?page=1">Adult Movies</a></li>
							<li><a href="asian_movies.php?page=1">Asian Movies</a></li>
							<li><a href="english_movies.php?page=1">English Movies</a></li>
							<li><a href="hacking_movies.php?page=1">Hacking Movies</a></li>
							<li><a href="action_movies.php?page=1">Action Movies</a></li>
							<li><a href="adventure_movies.php?page=1">Adventure Movies</a></li>
							<li><a href="animated_movies.php?page=1">Animated Movies</a></li>
							<li><a href="comedy_movies.php?page=1">Comedy Movies</a></li>
							<li><a href="crime_movies.php?page=1">Crime Movies</a></li>
							<li><a href="fantasy_movies.php?page=1">Fantasy Movies</a></li>
							<li><a href="horror_movies.php?page=1">Horror Movies</a></li>
							<li><a href="mystery_movies.php?page=1">Mystery Movies</a></li>
							<li><a href="romance_movies.php?page=1">Romance Movies</a></li>
							<li><a href="sci_fi_movies.php?page=1">Sci-fi Movies</a></li>
							<li><a href="thriller_movies.php?page=1">Thriller Movies</a></li>
							<li><a href="movies_2021.php?page=1">Year 2021 Movies</a></li>
							<li><a href="movies_2020.php?page=1">Year 2020 Movies</a></li>
							<li><a href="movies_2019.php?page=1">Year 2019 Movies</a></li>
							<li><a href="movies_2018.php?page=1">Year 2018 Movies</a></li>
							<li><a href="movies_2017.php?page=1">Year 2017 Movies</a></li>
							<li><a href="movies_2016.php?page=1">Year 2016 Movies</a></li>
							<li><a href="movies_2015.php?page=1">Year 2015 Movies</a></li>
							<li><a href="movies_2010-2015.php?page=1">Year 2010-2015 Movies</a></li>
							<li><a href="movies_2005-2010.php?page=1">Year 2005-2010 Movies</a></li>
							<li><a href="movies_2000-2005.php?page=1">Year 2000-2005 Movies</a></li>
							<li><a href="movies_1980-2000.php?page=1">Year 1980-2000 Movies</a></li>
							<li><a href="480p_movies.php?page=1">480p Movies</a></li>
							<li><a href="720p_movies.php?page=1">720p Movies</a></li>
							<li><a href="1080p_movies.php?page=1">1080p Movies</a></li>
							<li><a href="4k_ultra_hd.php?page=1">4K Ultra HD</a></li>
							<li><a href="latest_released.php?page=1">300mb Movies</a></li>
							<li><a href="500mb_movies.php?page=1">500mb Movies</a></li>
							<li><a href="700mb_movies.php?page=1">700mb Movies</a></li>
							<li><a href="1gb_movies.php?page=1">1gb Movies</a></li>
						</ul>
					</span>
				</div>
			</div>
				<?php include "contact.php"; ?>
		</div>
		<?php include "footer.php"; ?>
	</div>
	<!-- End of Page Wrapper -->


	<!-- Scroll to Top Button-->
	<a class="scroll-to-top rounded" href="#page-top">
		<i class="fas fa-angle-up"></i>
	</a>

	<!-- search script -->

	<script type="text/javascript">
		$(document).ready(function(){
			$('.search-box input[type="text"]').on("keyup input", function(){
				/* Get input value on change */
				var inputVal = $(this).val();
				var resultDropdown = $(this).siblings(".result");
				if(inputVal.length){
					$.get("backend-search.php", {term: inputVal}).done(function(data){
            // Display the returned data in browser
            resultDropdown.html(data);
            document.getElementById("hr").style.display = "block";

        });
				} else{
					resultDropdown.empty();
					document.getElementById("hr").style.display = "none";

				}
			});

// Set search input value on click of result item
$(document).on("click", ".result", function(){
    // $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
    $(this).parent(".result").empty();

});
});
</script>

</body>
</html>