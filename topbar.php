<?php
$current_file_name = basename($_SERVER['PHP_SELF']);
?>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php">MoviesArea.online</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="<?php if($current_file_name == "index.php"){ echo 'active'; } ?>"><a href="index.php">Home</a></li>
        <li class="dropdown <?php if($current_file_name == "latest_released.php" || $current_file_name == "hollywood.php" || $current_file_name == "hindi_movies.php" || $current_file_name == "dual_audio.php" || $current_file_name == "multi_audio.php" || $current_file_name == "adult_movies.php" || $current_file_name == "asian_movies.php" || $current_file_name == "english_movies.php" || $current_file_name == "hacking_movies.php"){ echo 'active'; } ?> ">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Movies Catagory <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="latest_released.php?page=1">Latest released</a></li>
            <li><a href="hollywood.php?page=1">Hollywood</a></li>
            <li><a href="hindi_movies.php?page=1">Hindi Movies</a></li>
            <li><a href="dual_audio.php?page=1">Dual Audio</a></li>
            <li><a href="multi_audio.php?page=1">Multi Audio</a></li>
            <li><a href="adult_movies.php?page=1">Adult Movies</a></li>
            <li><a href="asian_movies.php?page=1">Asian Movies</a></li>
            <li><a href="english_movies.php?page=1">English Movies</a></li>
            <li><a href="hacking_movies.php?page=1">Hacking Movies</a></li>
          </ul>
        </li>
        <li class="dropdown <?php if($current_file_name == "action_movies.php" || $current_file_name == "adventure_movies.php" || $current_file_name == "animated_movies.php" || $current_file_name == "comedy_movies.php" || $current_file_name == "crime_movies.php" || $current_file_name == "fantasy_movies.php" || $current_file_name == "horror_movies.php" || $current_file_name == "mystery_movies.php" || $current_file_name == "romance_movies.php" || $current_file_name == "sci_fi_movies.php" || $current_file_name == "thriller_movies.php"){ echo 'active'; } ?> ">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Genre <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="action_movies.php?page=1">Action</a></li>
            <li><a href="adventure_movies.php?page=1">Adventure</a></li>
            <li><a href="animated_movies.php?page=1">Animated</a></li>
            <li><a href="comedy_movies.php?page=1">Comedy</a></li>
            <li><a href="crime_movies.php?page=1">Crime</a></li>
            <li><a href="fantasy_movies.php?page=1">Fantasy</a></li>
            <li><a href="horror_movies.php?page=1">Horror</a></li>
            <li><a href="mystery_movies.php?page=1">Mystery</a></li>
            <li><a href="romance_movies.php?page=1">Romance</a></li>
            <li><a href="sci_fi_movies.php?page=1">Sci-fi</a></li>
            <li><a href="thriller_movies.php?page=1">Thriller</a></li>
          </ul>
        </li>
        <li class="dropdown <?php if($current_file_name == "movies_2021.php" || $current_file_name == "movies_2020.php" || $current_file_name == "movies_2019.php" || $current_file_name == "movies_2018.php" || $current_file_name == "movies_2017.php" || $current_file_name == "movies_2016.php" || $current_file_name == "movies_2015.php" || $current_file_name == "movies_2010-2015.php" || $current_file_name == "movies_2005-2010.php" || $current_file_name == "movies_2000-2005.php" || $current_file_name == "movies_1980-2000.php"){ echo 'active'; } ?> ">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Year <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="movies_2021.php?page=1">2021</a></li>
            <li><a href="movies_2020.php?page=1">2020</a></li>
            <li><a href="movies_2019.php?page=1">2019</a></li>
            <li><a href="movies_2018.php?page=1">2018</a></li>
            <li><a href="movies_2017.php?page=1">2017</a></li>
            <li><a href="movies_2016.php?page=1">2016</a></li>
            <li><a href="movies_2015.php?page=1">2015</a></li>
            <li><a href="movies_2010-2015.php?page=1">2010-2015</a></li>
            <li><a href="movies_2005-2010.php?page=1">2005-2010</a></li>
            <li><a href="movies_2000-2005.php?page=1">2000-2005</a></li>
            <li><a href="movies_1980-2000.php?page=1">1980-2000</a></li>
          </ul>
        </li>
        <li class="dropdown <?php if($current_file_name == "480p_movies.php" || $current_file_name == "720p_movies.php" || $current_file_name == "1080p_movies.php" || $current_file_name == "4k_ultra_hd.php" || $current_file_name == "300mb_movies.php" || $current_file_name == "500mb_movies.php" || $current_file_name == "700mb_movies.php" || $current_file_name == "1gb_movies.php"){ echo 'active'; } ?> ">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Quality <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="480p_movies.php?page=1">480p Movies</a></li>
            <li><a href="720p_movies.php?page=1">720p Movies</a></li>
            <li><a href="1080p_movies.php?page=1">1080p Movies</a></li>
            <li><a href="4k_ultra_hd.php?page=1">4K Ultra HD</a></li>
            <li><a href="300mb_movies.php?page=1">300mb Movies</a></li>
            <li><a href="500mb_movies.php?page=1">500mb Movies</a></li>
            <li><a href="700mb_movies.php?page=1">700mb Movies</a></li>
            <li><a href="1gb_movies.php?page=1">1gb Movies</a></li>

          </ul>
        </li>
            <li class="<?php if($current_file_name == "web_series.php"){ echo 'active'; } ?>"><a href="web_series.php?page=1">Web Series</a></li>
      </ul>

    </div>
  </div>
</nav>