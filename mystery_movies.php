<?php include 'config.php'; ?>    

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mystery Movies | MoviesArea</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Moviesarea.online | MoviesArea | Movies</title>
  <meta name="description" content="Mystery Movies free download site with fast server">
  <meta name="keywords" content="Mystery Movies, free download, movies, free movies, download, download movies, moviesarea, moviesarea.online, hdmovies,all movies, whach online movies, whach online">
  <link rel ="icon" href ="image/icon.png" type ="image/x-icon"> 
  <meta name="author" content="moviesarea.online">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="css/jquery.min.js"></script>
  <script src="css/bootstrap.min.js"></script>
</head>
<body>
<div class="tital">Mystery Movies | Moviesarea</div> 
  <?php include "topbar.php"; ?>

  <div class="container-fluid" style="margin-top: 70px;padding-right: 0;padding-left: 0;">
    <div class="container tophead">
      <div>
        <p>Mystery Movies</p>
      </div>
    </div>

    <div class="search-box" style="text-align: center;">
      <div class="form-group">
        <label for="Search_movie" style="margin: 5px;font-weight: bold;margin-left: -215px;">Search:</label>
        <input type="text" id="Search_movie" autocomplete="on" placeholder="Search Movies..." />
        <div class="result container-fluid" style="padding-right: 0;padding-left: 0;"></div>
      </div>
      <div id="hr"><hr></div>
    </div>
    <?php include 'body_head_part.php'; ?>

    <div class="wrap">
      <?php

      $q1 = mysqli_query($link, "SELECT * FROM movies_data WHERE mystery_movies = 'yes'");

      $row1=mysqli_fetch_assoc($q1);
      $Date_Time = $row1['date_time'];
      
      $count = mysqli_num_rows($q1);
      $prev_page_main = $next_page_main = "";
      $rowsperpage = 112;
      $page = $_REQUEST['page'];  
      $page = $page - 1;

      $p = $page * $rowsperpage;  

      $sql = "SELECT * FROM movies_data WHERE mystery_movies = 'yes' ORDER BY id DESC LIMIT ".$p.", ".$rowsperpage;
      $query = mysqli_query($link,$sql);
      while($row=mysqli_fetch_assoc($query)){
        $id = $row['id']; 
        $Movie_Name = $row['movie_name']; 
        $Movie_Image = $row['main_image'];    
        $Date_Time   = $row['date_time']; 
        $newDateTime = date('M d, Y', strtotime($Date_Time));   

        $sql_wf_id = "SELECT id FROM movies_data_webseries_links WHERE date_time_wl ='$Date_Time'";
        $query_wf_id = mysqli_query($link,$sql_wf_id);
        $row_wf_id = mysqli_fetch_assoc($query_wf_id);
        if (isset($row_wf_id)) {
          $wid = $row_wf_id['id']; 
        }else{
          $wid ="";
        }   
        
        echo "

        <a href='movies_data.php?id=$id"?><?php if(isset($row_wf_id)){echo "&wid=$wid";} ?><?php echo " '>    
        <div class='box'>
        <div class=''>
        <div class='card'>
        <img src='admin/photo/$Movie_Image' width='100%'>
        <p>$newDateTime</p>
        </div>
        <div class='pname card'>
        <p>$Movie_Name...</p>
        </div>
        </div>
        </div>
        </a>

        ";
      }


      if($_REQUEST['page'] > 1){
        $prev_page = $_REQUEST['page'] - 1;
        $prev_page_main = '<div class=""><a href= "mystery_movies.php?page='.$prev_page.'">Previous</a></div>';   

      }else{
        $prev_page = $_REQUEST['page'] - 1;
        $prev_page_main = '<div class=" disabled"><a href= "mystery_movies.php?page='.$prev_page.'">Previous</a></div>';   
      }

      $check = $p + $rowsperpage;

      if($check < $count){
        $next_page = $_REQUEST['page'] + 1;
        $next_page_main = '<div class=""><a href= "mystery_movies.php?page='.$next_page.'">next</a></div>';
      }else{
        $next_page = $_REQUEST['page'] + 1;
        $next_page_main = '<div class=" disabled"><a href= "mystery_movies.php?page='.$next_page.'">next</a></div>'; 
      }

      $limit = $count / $rowsperpage;
      $limit = ceil($limit);

      ?>
      <div class="container">
        <div class="pagination" style="margin-top:50px; width: 100%">
          <?php
          echo $prev_page_main;
          for ($i=1; $i<=$limit; $i++) { 
            if ($i==$_REQUEST['page']) {
             $page_number = $i;
             echo'<a href="mystery_movies.php?page='.$page_number.'" class="active disabled">'.$page_number.'</a>';
           }else{
            echo'<a href="mystery_movies.php?page='.$i.'">'.$i.'</a>';
          }
        }
        echo $next_page_main;
        ?>
      </div>
    </div>

  </div>
  <?php include "footer.php"; ?>

</div>

<!-- End of Page Wrapper -->


<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/chart-area-demo.js"></script>
<script src="js/demo/chart-pie-demo.js"></script>

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