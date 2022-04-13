<?php

require_once "include/connect.php";
if(isset($_GET['cancel'])){

$seat_id=$_GET['cancel'];


$select = "SELECT * FROM user_seat_pending WHERE usp_seat_id = '$seat_id' ";
$select_query =$connect->query($select);

while($row=$select_query->fetch_assoc()){

 $userid=$row['usp_user_id'];
}

$select_usp= "DELETE FROM user_seat_pending WHERE usp_user_id= '$userid' AND usp_seat_id= '$seat_id' ";
$select_usp_query= $connect->query($select_usp);



$update = "UPDATE seat SET status='Book' WHERE id='$seat_id'";
$update_query= $connect->query($update);

header("location:admin-approval.php");


}else{

    header("location:admin_dashboard.php");
}