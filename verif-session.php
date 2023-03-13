<?php
session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
  header("Location: index.php");
  exit;
}

   // Connect to the database
   $conn = mysqli_connect('main.leskientz.ovh', 'api', 'Ludovic03', 'projet_web');
   // Check connection
   if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
   }
   

mysqli_close($conn);
?>