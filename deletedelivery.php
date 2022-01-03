<?php

include "config.php"; // Using database connection file here

$id = $_GET['del_id']; // get id through query string
$sql="delete from delivery where del_id = '$id'";
$del = mysqli_query($conn,$sql); // delete query
echo "<script>alert('Delivery Deleted Successfully.')</script>";
if($del)
{
      
    mysqli_close($conn); // Close connection
    header("location:editdelivery.php"); // redirects to all records page
    exit;	
}
else
{
    echo "<script>alert('Error in deleting the record')</script>"; // display error message if not delete
}
?>