

<?php session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Courier Management</title>

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
                <i class='fas fa-truck'></i>
                </div>
                <div class="sidebar-brand-text mx-3">CMS</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="customerindex.php">
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
                        <h6 class="collapse-header">Services</h6>
                        <a class="collapse-item" href="courier.php">Courier</a>
                        <a class="collapse-item" href="customertracking.php">Tracking</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Utilities</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="customeraboutus.php">About us</a>
                        
                    </div>
                </div>
            </li>

            <!-- Divider -->
            

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
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo " ".$_SESSION['custname'];?></span>
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
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
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
</style>
</head>
<body>

<form action="" method="GET">
  <div class="container">
    <h1 class="text">Please fill in this form to Courier.</h1>
    
    <hr>

    <label for="cname"><b>Customer Name(Used while registering)</b></label>
    <input type="text" placeholder="Enter Custname" name="cname" value="<?php if(isset($_GET['cname'])) {echo $_GET['cname'];}?>" required>
    <button type="submit" class="ab">Search</button><br><br>
    </form>
   
  </div>
  <div class="container">
      <hr>
      <?php
      include 'config.php';
      //$conn= msqli_connect("localhost","root","","couriermanage");
      if(isset($_GET['cname']))
      {
          $custname=$_GET['cname'];
          $query="SELECT * from customer where custname='$custname'";
          $query_run=mysqli_query($conn,$query);

          if(mysqli_num_rows($query_run)>0)
          {
              foreach($query_run as $row)
              {?>
              <div>
                <!--echo $row['custid'];-->
                <label for="id"><b>Customer id</b></label>
                <input type="text" placeholder="Customer Id" name="custid" value="<?=$row['custid']; ?>" disabled></div><?php
              }

          }
          else{
              echo "No record Found";
          }
      }
      
      ?>
  
  <form action="" method="POST">
  <label for="cid"><b>Re-Enter the above Customer Id correctly</b></label>
    <input type="text" placeholder="CustId" name="cid" required >

    <label for="item weight"><b>Courier Item weight</b></label>
    <input type="text" placeholder="Courier weight" name="weight" required >

    <label for="Ctype"><b>Courier Type</b></label>
    <input type="text" placeholder="Ex:Books,gadgets" name="ctype" required >

    <label for="prodesc"><b>Product Description</b></label>
    <input type="text" placeholder="Ex:Laptop,shirts" name="prodesc" required >

    <label for="src"><b>Source Address</b></label>
    <input type="text" placeholder="Provide Source Correctly" name="src" required >

    <label for="dest"><b>Destination Address</b></label>
    <input type="text" placeholder="Provide Destination Correctly" name="dest" required >

    <label for="dest_ph"><b>Destination Phone Number</b></label>
    <input type="text" placeholder="Provide Destination Phone Number Correctly" name="dest_ph" required >
   
    <hr>
    

    <button type="submit" name="submit" Value="Submit">Submit</button>
    </form>
</div>
<?php
include 'config.php';
if(isset($_POST['submit']))
{		
    $custid = $_POST['cid'];
    //$prodid = $_POST['age'];
    $cweight = $_POST['weight'];
    $ctype = $_POST['ctype'];
    $proddesc = $_POST['prodesc'];
    $src=$_POST['src'];
    $dest=$_POST['dest'];
    $dest_ph=$_POST['dest_ph'];
//for courierid
    function generateRandomString($length = 25) {
		$characters = '0123456789';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString;}
        $myRandomString = generateRandomString(5);

//for productid
function generateRandom($length = 25) {
    $characters = '0123456789';
    $charactersLength = strlen($characters);
    $prdid = '';
    for ($i = 0; $i < $length; $i++) {
        $prdid .= $characters[rand(0, $charactersLength - 1)];
    }
    return $prdid;}
    $productid = generateRandom(5);

    $sql="INSERT INTO courier(courierid,custid,prod_id,courier_weight,courier_type,prod_desc,Source,Destination,dest_ph)
     VALUES ('$myRandomString','$custid','$productid','$cweight','$ctype','$proddesc','$src','$dest','$dest_ph')";
    $result = mysqli_query($conn,$sql);
    if ($result) {
    echo "<script>alert('Wow! Courier Registration Completed.')</script>";
    $custname="";
    $custid ="" ;
    //$prodid = $_POST['age'];
    $cweight ="" ;
    $ctype ="" ;
    $proddesc = "";
    $src="";
    $dest="";	
				//$role = "";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}}
?>


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