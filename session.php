<?php
   include('connect.php');
   session_start();
   
   if(!isset($_SESSION['email'])){
      header("location:login2.php");
   }

?>