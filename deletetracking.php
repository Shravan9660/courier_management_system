<?php

include "config.php"; // Using database connection file here

$id = $_GET['tracking_id']; // get id through query string
$sql="delete from tracking where tracking_id = '$id'";
$del = mysqli_query($conn,$sql); // delete query
echo "<script>alert('Tracking details deleted Successfully.')</script>";
if($del)
{
      
    mysqli_close($conn); // Close connection
    header("location:edittrack.php"); // redirects to all records page
    exit;	
}
else
{
    echo "<script>alert('Error in deleting ')</script>"; // display error message if not delete
}
?>