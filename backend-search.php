<?php
include 'config.php';

if(isset($_REQUEST["term"])){
    // Prepare a select statement
    $sql = "SELECT * FROM movies_data WHERE movie_name LIKE ?";
    
    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "s", $param_term);
        
        // Set parameters
        $param_term = $_REQUEST["term"] . '%';
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
            
            // Check number of rows in the result set
            if(mysqli_num_rows($result) > 0){
                // Fetch result rows as an associative array
                echo "<div style='font-weight: 600;margin-top: 20px;text-align: center;inline-size: -webkit-fill-available;'>Search result :</div>";

                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                    $show_product = "SELECT * FROM movies_data WHERE movie_name = '".$row['movie_name']."'";
                    $query = mysqli_query($link, $show_product);
                    $row=mysqli_fetch_assoc($query);
        $id = $row['id']; 
        $Movie_Name = $row['movie_name']; 
        $Movie_Image = $row['main_image']; 
        $Date_Time   = $row['date_time']; 
        $newDateTime = date('M d, Y', strtotime($Date_Time));  
        echo "

        <a href='movies_data.php?id=$id"?><?php if(isset($row_wf_id)){echo "&wid=$wid";} ?><?php echo " '>    
        <div class='box'>
        <div class=''>
        <div class='card'>
        <img src='admin/photo/$Movie_Image' width='100%'>
          <p style='color:#ad3b3b;font-size:13px;'>$newDateTime</p>
        </div>
        <div class='pname card'>
        <p style='color: #ffffff; font-size:14px;'>$Movie_Name...</p>
        </div>
        </div>
        </div>
        </a>

        ";
                    }
                } else{
                    echo "<p style='font-weight: 600;margin-top: 20px;'>No matches found</p>";
                }
            } else{
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
            }
        }

    // Close statement
        mysqli_stmt_close($stmt);
    }

// close connection
    mysqli_close($link);

    ?>