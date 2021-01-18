<?php
// Include config file
include "config.php";
// Define variables and initialize with empty values
$firstname = $lastname = $password = $confirm_password = $email = "";
$fill_err = $password_err = $confirm_password_err = $email_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

  if(empty(trim($_POST["email"]))){
    $email_err= "<p class='alert alert-danger pt-1 pb-1'>"."Please fill email."."</p>";
  }

  // Validate username
  if(empty(trim($_POST["firstname"] && $_POST["lastname"]))){
    $fill_err= "<p class='alert alert-danger pt-1 pb-1'>"."Please fill firstname and lastname."."</p>";

  } else{
        // Prepare a select statement
    $sql = "SELECT id FROM admin_data WHERE email=? ";

    if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
      mysqli_stmt_bind_param($stmt, "s", $param_email);

            // Set parameters
      $param_email = trim($_POST["email"]);

            // Attempt to execute the prepared statement
      if(mysqli_stmt_execute($stmt)){
        /* store result */
        mysqli_stmt_store_result($stmt);

        if(mysqli_stmt_num_rows($stmt) == 1){
          $email_err = "<p class='alert alert-danger pt-1 pb-1'>"."This email address is already taken."."</p>";

        } else{
         $firstname = trim($_POST["firstname"]);
         $lastname = trim($_POST["lastname"]);                   
         $email = trim($_POST["email"]);
       }
     } else{
      echo "Oops! Something went wrong. Please try again later.";
    }

            // Close statement
    mysqli_stmt_close($stmt);
  }
}

    // Validate password
if(empty(trim($_POST["password"]))){
  $password_err = "<p class='alert alert-danger pt-1 pb-1'>"."Please enter a password."."</p>";

} elseif(strlen(trim($_POST["password"])) < 9){
  $password_err = "<p class='alert alert-danger pt-1 pb-1'>"."Password must have atleast 9 characters."."</p>";

} else{
  $password = trim($_POST["password"]);
}

    // Validate confirm password
if(empty(trim($_POST["confirm_password"]))){
  $confirm_password_err = "<p class='alert alert-danger pt-1 pb-1'>"."Please enter a confirm password."."</p>";  

} else{
  $confirm_password = trim($_POST["confirm_password"]);
  if(empty($password_err) && ($password != $confirm_password)){
    $confirm_password_err = "<p class='alert alert-danger pt-1 pb-1'>"."Password did not match."."</p>";

  }
}

    // Check input errors before inserting in database
if(empty($fill_err) && empty($password_err) && empty($confirm_password_err) && empty($email_err)){

        // Prepare an insert statement
  $sql = "INSERT INTO admin_data (email,firstname,lastname,password) VALUES (?, ?, ?, ?)";

  if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
    mysqli_stmt_bind_param($stmt, "ssss",$param_email, $param_firstname, $param_lastname, $param_password);

            // Set parameters
    $param_email = $email;
    $param_firstname = $firstname;
    $param_lastname = $lastname;
    $param_password = $password; // Creates a password hash

            // Attempt to execute the prepared statement
    if(mysqli_stmt_execute($stmt)){
                        
                // Redirect to login page
      header("location: login.php");
    } else{
      echo "Something went wrong. Please try again later.";
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

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">
    <div class="row justify-content-center">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <form class="user" method="POST">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="firstname" name="firstname" placeholder="First Name" value="<?php echo $firstname; ?>">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="lastname" name="lastname" placeholder="Last Name" value="<?php echo $lastname; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-user" id="email" name="email" placeholder="Email Address" value="<?php echo $email; ?>">
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password" value="<?php echo $password; ?>">
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="confirm_password" name="confirm_password" placeholder="Confirm Password" value="<?php echo $confirm_password; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <?php echo "$fill_err $email_err $password_err $confirm_password_err"; ?>
                </div>
                <div class="form-group">
                  <input type="submit" class="btn btn-block btn-primary" value="Register">
                </div>
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="login.php">Already have an account? Login!</a>
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
