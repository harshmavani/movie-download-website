<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"])){
    header("location: index.php");
    exit;
}
 
// Include config file
include "config.php";
 
// Define variables and initialize with empty array_values()
$email = $password = "";
$email_err = $password_err = "";
  
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if email is empty
    if(empty(trim($_POST["email"]))){
        $email_err = "<p class='alert alert-danger pt-1 pb-1'>"."Please enter your email."."</p>";
    } else{
        $email = trim($_POST["email"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "<p class='alert alert-danger pt-1 pb-1'>"."Please enter your password."."</p>" ;
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($email_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, email, password FROM admin_data WHERE email = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            
            // Set parameters
            $param_email = $email;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if email exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $email, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                      
                        if($_POST['password'] == $hashed_password){

                            // Password is correct, so start a new session
                            
                            // Store data in session variables
                          $_SESSION["loggedin"] = true;
                          $_SESSION["id"] = $id;
                          $_SESSION["email"] = $email; 

                          // get and store firstname,lastname 
                          $sql ="SELECT firstname, lastname FROM admin_data WHERE id='{$id}'";
                          if($query = mysqli_query($link,$sql)){

                            if($row = mysqli_fetch_array($query)){
                              $_SESSION["firstname"] = $row["firstname"];   
                              $_SESSION["lastname"] = $row["lastname"];
                             // Redirect user to welcome page
                            header("location: index.php");  

                            }
                          }   
                           

                        } else{
                            // Display an error message if password is not valid
                            $password_err ="<p class='alert alert-danger pt-1 pb-1'>"."The password you entered was not valid."."</p>";                     
                               }
                    }
                } else{
                    // Display an error message if email doesn't exist
                     $email_err ="<p class='alert alert-danger pt-1 pb-1'>"."No account found with that email."."</p>";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

  <title>admin-Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <style type="text/css">
    @media (min-width: 576px){
      .loginform{
    min-width:300px!important; 
  }
}
  </style>

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">


        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                  </div>
                  <form class="user loginform" method="POST">
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter Email Address..." value="<?php echo $email; ?>">
                      <span></span>
                    </div>
                    <div class="form-group">
                        <?php echo "$email_err"; ?>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password" value="<?php echo $password; ?>">
                    </div>
                     <div class="form-group">
                        <?php echo "$password_err"; ?>
                    </div>
                     <div class="form-group">
                   <input type="submit" class="btn btn-block btn-primary" value="login">
                     </div>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="forgot-password.php">Forgot Password?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="register.php">Create an Account!</a>
                  </div>
                </div>

          </div>
        </div>


    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>