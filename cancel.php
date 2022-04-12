<?php

require_once "include/connect.php";
if(isset($_GET['cancel'])){

$seat_id=$_GET['cancel'];

$update = "UPDATE seat SET status='Book' WHERE id='$seat_id'";
$update_query= $connect->query($update);

header("location:admin-approval.php");


}else{

    header("location:admin_dashboard.php");
}