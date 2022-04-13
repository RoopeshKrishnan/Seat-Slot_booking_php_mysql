<?php
require_once "include/header.php";
require_once "include/connect.php";
if(isset($_GET['seat_id'])){

    $seatid=$_GET['seat_id'];
    $status=$_GET['status'];


    $update_seat = "UPDATE seat SET status='Book' WHERE id= '$seatid' ";
    $update_seat_query= $connect->query($update_seat);


    // while($result=$update_seat_query->fetch_assoc()){

    //     $status=$result['status'];
    // }


        if($status=='Pending'){

                $select_usp= "DELETE FROM user_seat_pending WHERE  usp_seat_id= '$seatid' ";
                $select_usp_query= $connect->query($select_usp);

                header("location:admin-seat-book.php");


        }else{


                $select_usb= "DELETE FROM user_seat_booked WHERE usb_sid= '$seatid' ";
                $select_usb_query= $connect->query($select_usb);

                header("location:admin-seat-book.php");

        }





}else{
    echo '<div class="alert alert-danger text-center"><h1>Something went Wrong</h1></div> ';

}

?>



<?php require_once "include/footer.php" ?>