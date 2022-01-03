<?php
session_start();
unset($_SESSION["custname"]);
//unset($_SESSION["name"]);
header("Location:index.php");
?>