<?php
session_start();
include "check_login_sesstion.php";
include "config.php";

if(isset($_POST['submit_link'])){

	  date_default_timezone_set('Asia/Kolkata');
	  $Current_Date = date('d-m-Y g:i:s A');

	$Product_Link = $_POST['Product_Link'];

	$insertqurey =" INSERT INTO shortaner_data_movie (link,date_time) VALUES ('$Product_Link', '$Current_Date')";
	
	if ($_POST['Product_Link'] == "") {
           	$_SESSION['empty_error'] = "Please Enter Link";
			$sql = "SELECT * FROM shortaner_data_movie WHERE link ='".$_POST['Product_Link'].$_POST['array_product(array)']."'";
    		header("Location:shortner_link.php");
    		exit();
	}else{
    	if (mysqli_query($link, $insertqurey)) {

			$sql = "SELECT * FROM shortaner_data_movie WHERE link ='".$_POST['Product_Link']."'";
			$query = mysqli_query($link,$sql);
			if (!$query){
		  	die('Invalid query: '.mysqli_error($link));
			}
			$row=mysqli_fetch_assoc($query);	

			$_SESSION['link']= $row['id'];
			$_SESSION['copy_button']  = "<button type='button' class='btn btn-primary' onclick='copyfunction(); myFunction2();' style='position: absolute; bottom: 0;'>Copy</button>";
           	$_SESSION['success_message'] = "Link Generated Successfully";
    		header("Location:shortner_link.php");
    		exit(); 
        } else {		   
            $_SESSION['error_message'] = mysqli_error($link);
    		header("Location:shortner_link.php");
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

	<title>MoviesArea.online | Shortner Link</title>
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
	.modal input{
	    height: 43px;
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
	#snackbar2 {
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

	#snackbar2.show {
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
</style>
</head>

<body id="page-top" onload="myFunction();">
    <?php
if (isset($_SESSION['empty_error'])) {
	echo "<div id='snackbar' style='background-color:red!important'>".$_SESSION['empty_error']."</div>";
	unset($_SESSION['empty_error']);
} 

if (isset($_SESSION['success_message'])) {
	echo "<div id='snackbar' style='background-color:green!important';>".$_SESSION['success_message']."</div>";
	unset($_SESSION['success_message']);
} 

if (isset($_SESSION['error_message'])) {
	echo "<div id='snackbar' style='background-color:red!important';>".$_SESSION['error_message']."</div>";
	unset($_SESSION['error_message']);
}
if (isset($_SESSION['link_delete_message'])) {
	echo "<div id='snackbar' style='background-color:green!important';>".$_SESSION['link_delete_message']."</div>";
	unset($_SESSION['link_delete_message']);
} 
if (isset($_SESSION['link_delete_message_error'])) {
	echo "<div id='snackbar' style='background-color:red!important';>".$_SESSION['link_delete_message_error']."</div>";
	unset($_SESSION['link_delete_message_error']);
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
				<div class="container">
					
						<form method="POST" style="width:100%";>
						    <div class="row" >
                        	<div class="form-group col-lg-4 col-md-4 col-sm-12">
                        		<label>Download Link:</label>
                        		<input type="text" class="form-control" name="Product_Link">
                        	</div>
                        	<div class="col-lg-2 col-md-2 col-sm-12" style=" position: relative;";>
                        		<button type="submit" id="submit_link" name="submit_link" class="btn btn-primary" style="position: absolute;bottom: 0;margin-bottom: 16px;";>Generat</button>
                        	</div>
                        	<div class="form-group col-lg-4 col-md-4 col-sm-12">
                        		<label>Generated Link:</label>
                        		<input type="text" class="form-control" value="<?php if(isset($_SESSION['link'])){ echo $_SESSION['link'];} ?>" id="myInput"> <?php if (isset($_SESSION['link'])) {
                        	unset($_SESSION['link']);
                        } ?>
                        <div id='snackbar2' style='background-color:green!important'></div>
                        	</div>
                        	<div class="form-group col-lg-2 col-md-2 col-sm-12" style="position: relative;";>
                        		 <?php if (isset($_SESSION['copy_button'])) {
                                    echo $_SESSION['copy_button'];
                                	unset($_SESSION['copy_button']);
                                } ?>

                        	</div>
                        	
					</div>
                        </form>

					<!-- DataTales Example -->
					<div>
						<div class="card shadow mb-4">
							<div class="card-header py-3">
								<h6 class="m-0 font-weight-bold text-primary">Shortner Links Data</h6>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" >
										<thead>
											<tr>
												<th>Id</th>
												<th>Shortner Link</th>
												<th>Date & Time</th>
												<th>Action</th>
											</tr>
										</thead>

										<tbody>


											<?php

											$sql = "SELECT * FROM shortaner_data_movie";
											$query = mysqli_query($link,$sql);
											while($row=mysqli_fetch_assoc($query)){
												$id = $row['id']; 
												$st_link = $row['link'];  
												$Date_Time = $row['date_time']; 

												echo "<tr>
												<td>$id</td>
												<td style='max-width: 730px;'>$st_link</td>
												<td>$Date_Time</td>
    											<td>
												<img src='img/delete.png' width='30px'class=' delete_data_id' data-id='{$id}' style='cursor:pointer'></td>
												</tr>";
											}

											?>


										</tbody>
																				<tfoot>
											<tr>
												<th>Id</th>
												<th>Shortner Link</th>
												<th>Date & Time</th>
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

	<!-- modal -->

	<div id="luanch_modal" class="modal fade" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Add Prouduct</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					<form method="POST" enctype="multipart/form-data" id="reset" name="reset" action="affiliate_apparel_accessories.php">

						<div class="form-group">
							<label>Product Image</label><br>
							<div style="display: inline-flex;    height: 40px;">
								<input type="file" class="form-control" id="Product_Image" name="Product_Image" onchange="readURL(this);">
								<img class="blah" style="margin-left: 10px;top:-30px; position: relative;">
							</div>
						</div>

						<div class="form-group"> 

							<label>Product Name</label>
							<input type="text" class="form-control" id="Product_Name" name="Product_Name" maxlength="50">
						</div>
						<div class="form-group">

							<label>Product Price</label>
							<div style="display: inline-flex;">
								<input type="number" class="form-control" name="Product_Price">
								<select name="Money_Type" style="margin-left: 5px;">
									<option value="₹">₹</option>
									<option value="$">$</option>	
								</select>
							</div>
						</div>
						<div class="form-group">

							<label>Product Link</label>
							<input type="text" class="form-control" name="Product_Link">
						</div>

						<div class="modal-footer">
							<div id="show_error" style="color: red; float: left; "><?php echo $show_error; ?></div>
							<div>
								<button type="submit" id="Add_data" name="Add_data" class="btn btn-default" disabled="disabled">Add</button>
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>

						</div>
					</form>
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
						<h4 class="modal-title">Delete Shortner Link</h4>
						<button type="button" class="btn btn-primary close" data-dismiss="modal">&times;</button>
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


				$('.delete_data_id').click(function(){
					var dataId = $(this).attr("data-id");

					$.ajax({
						method:"POST",
						url: "delete_shortaner_link.php",
						data:{dataid:dataId},
						success:function(data){
							$('#delete_data').html(data);
							$('#delete_menu_modal').modal("show");

						}			
					});
				});

</script>
<script>

function myFunction() {
  var x = document.getElementById("snackbar");
  x.className = "show";
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}

function myFunction2() {
  var x = document.getElementById("snackbar2");
  x.className = "show";
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}

</script>

<script>
function copyfunction() {
  var copyText = document.getElementById("myInput");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  document.getElementById("snackbar2").innerHTML ="Copied : "+copyText.value;
}
</script>
  <script type="text/javascript">

var table = $('#dataTable').DataTable();

// Sort by column 1 and then re-draw
table
    .order( [ 0, 'desc' ] )
    .draw();
 
  </script>
</body>

</html>