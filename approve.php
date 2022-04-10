<?php

require_once "include/connect.php";
if(isset($_GET['approve'])){

$seat_id=$_GET['approve'];

$update = "UPDATE seat SET status='Booked' WHERE id='$seat_id'";
$update_query= $connect->query($update);

header("location:admin-approval.php");


}else{

    header("location:admin_dashboard.php");
}