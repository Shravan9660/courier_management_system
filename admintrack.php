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
                <a class="nav-link" href="index1.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Services</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Branch</h6>
                        <a class="collapse-item" href="branch.php">Add Branch</a>
                        

            <!-- Heading -->
            
            <h6 class="collapse-header"><b>Tracking</b></h6>
            
                        <a class="collapse-item" href="admintrack.php">Add Tracking</a>
                        <a class="collapse-item" href="edittrack.php">Edit Tracking</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-plane-departure"></i>
                    <span>Shipment/Delivery</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header"><b>Shipment</b></h6>
                        <a class="collapse-item" href="adminshipment.php">Add Shipment</a>
                        <h6 class="collapse-header"><b>Delivery</b></h6>

                        <a class="collapse-item" href="delivery.php">Add Delivery</a>
                        <a class="collapse-item" href="editdelivery.php">Edit Delivery</a>
                        
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-user-plus"></i>
                    <span>Employees</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        
                        <a class="collapse-item" href="employee.php">Add Employee</a>
                        <a class="collapse-item" href="employeelist.php">Employee List</a>
                        
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="admincourierlist.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Courier List</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="aboutus.php">
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
</head>
<body>
<form action="" method="GET">
  <div class="container">
    <h3 class="text">Please enter the Tracking Details.</h3>
    
    <hr>

    <label for="custid"><b>Courier Id</b></label>
    <input type="text" placeholder="Enter Registered Courier Id Correctly" name="courierid" value="<?php ob_start(); if(isset($_GET['courierid'])) {echo $_GET['courierid'];}?>" required>
    <button type="submit" class="ab">Search</button><br><br>
    
    
   
  </div>
  <div class="container">
      <hr>
      <table id="branch">
          <tr>
            <th>Customer Name</th>
            <th>Customer Address</th>
            <th>Customer Id</th>
            <th>Product Id</th>
            <th>Product Description</th>
            <th>Source</th>
            <th>Destination</th>
            
          </tr>
      <?php
      include 'config.php';
      //$conn= msqli_connect("localhost","root","","couriermanage");
      if(isset($_GET['courierid']))
      {
          $cid=$_GET['courierid'];
          
        
        
         // Using database connection file here
        $sql="SELECT * from customer,courier where courier.courierid='$cid' and courier.custid=customer.custid";
        $records = mysqli_query($conn,$sql); // fetch data from database
        
        if($data = mysqli_fetch_array($records))
        {
        ?>
          <tr>
            <td><?php echo $data['custname']; ?></td>
            <td><?php echo $data['custaddr']; ?></td>
            <td><?php echo $data['custid']; ?></td>
            <td><?php echo $data['prod_id']; ?></td>
            <td><?php echo $data['prod_desc']; ?></td>
            <td><?php echo $data['Source']; ?></td>
            <td><?php echo $data['Destination']; ?></td>
            
          </tr>	
        <?php
        }
        else{
        echo "No Records Found";
               }         }

        ?>
        </table>
          
    
      </form>


  <div class="container">
      
      
  
  <form action="" method="POST">
  <label for="cid" style="text-align:center; color:black; font-weight:bold;" ><h2>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
 Add Tracking Details</h2></label><br>

    <label for="cid" ><b>Courier Id</b></label>
    <input type="text" Placeholder="Re-Enter the above Courier Id correctly"  name="cid" required >

    <label for="cloc" ><b>Current Location</b></label>
    <input type="text" Placeholder="Enter the location"  name="cloc" required >

    <label for="costatus" ><b>Update Status</b></label><br>
  <select id="cars" name="costatus">
  <option value="">Select</option>
  <option value="Courier Placed">Courier Placed</option>
  <option value="Shipped">Shipped</option>
  <option value="Out For Delivery">Out For Delivery</option>
  <option value="Delivered">Delivered</option>
</select><br>

    <label for="cdate"><b>Current Date</b></label>
    <input type="date"  name="cdate" required >

    <label for="shipd"><b>Delivery Date</b></label>
    <input type="date"  name="shipd" required >

    
   
    <hr>
    

    
    
    
</div>

<?php
ob_start();
include 'config.php';
if(isset($_POST['submit']))
{		
    
    //$prodid = $_POST['age'];
    
    $cid = $_POST['cid'];
    $cloc=$_POST['cloc'];
    $status=$_POST['costatus'];
    $currdate = date('Y-m-d',strtotime( $_POST['cdate']));
    $shipdate = date('Y-m-d',strtotime( $_POST['shipd']));
    
   
//for branchid
    function generateRandomString($length = 25) {
		$characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString;}
        $myRandomString = generateRandomString(4);
        if(isset($_GET['courierid']))
{
    $cid=$_GET['courierid'];
        $sql = "SELECT * from customer,courier where courier.courierid='$cid' and courier.custid=customer.custid";
    
        $res = mysqli_query($conn, $sql);
      
        $count = mysqli_num_rows($res);
        if($count == 1){
            $r = mysqli_fetch_assoc($res);
            //$custemail = $r['custemail']);
            //$pass=base64_decode($password);
            
            $to = $r['custemail'];
           
            //$subject = "Your Recovered Password";
    
    $to_email = "$to";
    $subject = "CMS Tracking ID";
    $body = "Please use this tracking id to track your product:  $myRandomString" ;
    $headers = "From: CMS";
    mail($to_email, $subject, $body, $headers);
//for productid



    $sql="INSERT INTO tracking(tracking_id,courier_id,current_loc,status1,cur_date,del_date)
     VALUES ('$myRandomString','$cid',' $cloc','$status','$currdate','$shipdate')";
    $result = mysqli_query($conn,$sql);
    if ($result) {
        
    echo "<script>alert('Wow! Tracking Details Updated Successfully and tracking details sent to customer emailid.')</script>";
    $cid ="" ;
    $cloc="";
    $status="";
    $currdate = "";
    $shipdate = "";
    
    //header("location:admintrack.php");
				//$role = "";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
            }}}




            if(isset($_GET['courierid']))
{
    $cid=$_GET['courierid'];
   
    $query="SELECT * from customer,courier where courier.courierid='$cid' and courier.custid=customer.custid";
    $query_run=mysqli_query($conn,$query);
    
    
    if(mysqli_num_rows($query_run)>0)
    {
        foreach($query_run as $row)
        {
          ?>
        <div>
          <!--echo $row['custid'];-->
          <label for="id"><b>Tracking Id will Be sent to the below registered Email Id</b></label>
          <input type="text" placeholder="Email Id" name="emailid" value="<?=$row['custemail']; ?>" disabled>
          
          </div>
          
          <?php
        }

    }
    else{
        echo "No record Found";
    }
}

           
      
      
            ?>
            
            
            
            <button type="submit" name="submit" Value="Submit">Submit</button>
    

    

    </form>
    <form>
    
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