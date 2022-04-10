<?php
require_once "include/header.php";
require_once "include/connect.php";
if(isset($_GET['seat_id'])){

    $seatid=$_GET['seat_id'];


    $update_seat = "UPDATE seat SET status='Pending' WHERE id= '$seatid' ";
    $update_seat_query= $connect->query($update_seat);


    header("location:user_booking.php");



}else{
    echo '<div class="alert alert-danger text-center"><h1>Something went Wrong</h1></div> ';

}

?>



<?php require_once "include/footer.php" ?>