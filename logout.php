<?php 
 
 if(isset($_POST['logout']))
 {

    session_start();
    session_unset();
    session_destroy();
    header("location:index.php");
 }elseif(isset($_POST['admin_logout'])){

   session_start();
   session_unset();
   session_destroy();
   header("location:admin-index.php");
 }


?>