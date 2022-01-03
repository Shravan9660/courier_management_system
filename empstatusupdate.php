<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Courier Management  </title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                   <!-- <i class="fas fa-laugh-wink"></i>-->
                   <i class='fas fa-truck'></i>
                </div>
                <div class="sidebar-brand-text mx-3">CMS </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="employeeindex.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            
            <!-- Nav Item - Pages Collapse Menu -->
           

            <!-- Divider -->
            

            <!-- Heading -->
            <div class="sidebar-heading">
                Employee Activities
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            

            <!-- Nav Item - Charts -->
            

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="empupdatetracking.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tracking Update</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="empdeliverylist.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Delivery List</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="aboutusemp.php">
                    <i class="fas fa-fw fa-comment"></i>
                    <span>About US</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                <h1 class="h3 mb-4 text-gray-800">Courier Management System</h1>

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            
                        </li>

                        <!-- Nav Item - Alerts -->
                        

                        <!-- Nav Item - Messages -->
                        

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"> <?php echo " ".$_SESSION['custname'];?></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                
                                
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                   
<?php

ob_start();
include "config.php"; // Using database connection file here

$id = $_GET['tracking_id']; // get id through query string
$sql="select * from tracking where tracking_id='$id'";
$sqlq="SELECT * from tracking,courier,customer where tracking.tracking_id='$id' and tracking.courier_id=courier.courierid and courier.custid=customer.custid ";
$query_ru=mysqli_query($conn,$sqlq);
       
       $n=mysqli_fetch_assoc($query_ru);
 //$prodid = $_POST['age'];

 $custemail = $n['custemail'];
 $custname = $n['custname'];
 
$qry = mysqli_query($conn,$sql); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    $cloc = $_POST['current_loc'];
    $stat = $_POST['status1'];
    
    
   
	$sqli="update tracking set current_loc='$cloc', status1='$stat' where tracking_id='$id'";
    $edit = mysqli_query($conn,$sqli);
    
	
    if($edit)
    {
       // mysqli_close($conn); // Close connection
       $cid=$_POST['cid'];
       $query="SELECT * from delivery,courier where delivery.courier_id='$cid'";		
              $query_run=mysqli_query($conn,$query);
              
              $n=mysqli_fetch_assoc($query_run);
        
        
       
        
        $delid=$n['del_id'];
      
        $to_email = $custemail;
        
       
       $subject = "CMS ";
       $body = "Hi $custname! your Parcel has been delivered successfully and delivery Id is:$delid" ;
       $headers = "From: CMS";
       if (mail($to_email, $subject, $body, $headers)) {
           echo "<script>alert('Email successfully sent to $to_email...')</script>";
       } else {
           echo "<script>alert('Email sending failed...')</script>";
       }
       
        //header("location:empupdatetracking.php"); // redirects to all records page
        //exit;
    }
    else
    {
        echo mysqli_error();
    }    	
    
}
?>

<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
  
}
.text{
    padding: 16px;
  background-color: white;
    text-align:center;
}

/* Full-width input fields */
input[type=text],input[type=date], input[type=password],select {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus,input[type=date]:focus,select:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
.ab{
    justify-content:center;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 3px 0;
  border: none;
  cursor: pointer;
  width: 40%;
  opacity: 0.9;
  justify-content:center;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
#branch {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#branch td, #branch th {
  border: 1px solid #ddd;
  padding: 8px;
  color:black;

}
.a{
    color:black;
    text-align:center;
    font-weight:bold;
}

#branch tr:nth-child(even){background-color: #f2f2f2;}

#branch tr:hover {background-color: #ddd;}

#branch th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}

</style>
<div class="container">

<h3 class="a">Update Branch</h3>

<form method="POST">
  

  <label for="baddr" ><b>Tracking ID</b></label>
    <input type="text" value="<?php echo $data['tracking_id'] ?>"   name="tracking_id" disabled >

    <label for="bname"><b>Courier ID</b></label>
    <input type="text" value="<?php echo $data['courier_id'] ?>"   name="courier_id" disabled >

    <label for="brph"><b>Current location</b></label>
    <input type="text" value="<?php echo $data['current_loc'] ?>"   name="current_loc" required >

    
   
    <label for="costatus" ><b>Update Status</b></label><br>
    <label for="costatus" >Current Status:</label>
    <?php
    echo  $data['status1']; 
  ?>
  <select id="cars" name="status1" value="<?php echo $data['status1'] ?>">
 
  <option value="">Select</option>
  <option value="Courier Placed">Courier Placed</option>
  <option value="Shipped">Shipped</option>
  <option value="Out For Delivery">Out For Delivery</option>
  <option value="Delivered">Delivered</option>
</select><br>

<label for="cdate"><b>Current Date</b></label>
    <input type="text"  name="cdate" value="<?php echo $data['cur_date'] ?>" disabled >

    <label for="shipd"><b>Delivery Date</b></label>
    <input type="text"  name="shipd" value="<?php echo $data['del_date'] ?>" disabled >
    <hr>
    <label for="cid"><b>Courier ID</b></label>
    <input type="text"  name="cid" placeholder="Enter the above courier ID" required >

    

    <button type="submit" name="update" Value="Update">Update</button>
</form>


</body>


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span></span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
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