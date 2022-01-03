<?php

include "config.php"; // Using database connection file here

$id = $_GET['emp_id']; // get id through query string
$sql="delete from employee where emp_id = '$id'";
$del = mysqli_query($conn,$sql); // delete query
echo "<script>alert('Branch Deleted Successfully.')</script>";
if($del)
{
      
    mysqli_close($conn); // Close connection
    header("location:employeelist.php"); // redirects to all records page
    exit;	
}
else
{
    echo "<script>alert('Error in deleting the record')</script>"; // display error message if not delete
}
?>