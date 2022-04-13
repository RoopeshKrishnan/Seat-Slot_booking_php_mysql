<?php
require_once "include/header.php";
require_once "include/connect.php";
if(isset($_GET['seat_id'])){

    

                $seatid=$_GET['seat_id'];
                $status=$_GET['status'];



       if($status=='Pending'){

                $select = "SELECT * FROM user_seat_pending WHERE usp_seat_id = '$seatid' ";
                $select_query =$connect->query($select);

                while($row=$select_query->fetch_assoc()){

                    $userid=$row['usp_user_id'];
                }
                if($userid==$_SESSION['user_id']){

                    $select_usp= "DELETE FROM user_seat_pending WHERE usp_user_id= '$userid' AND usp_seat_id= '$seatid' ";
                    $select_usp_query= $connect->query($select_usp);




                    $update_seat = "UPDATE seat SET status='Book' WHERE id= '$seatid' ";
                    $update_seat_query= $connect->query($update_seat);
                    header("location:user_booking.php");


                }else{
                    header("location:user_booking.php");
                }
    } elseif($status=='Booked'){

                $select_usb = "SELECT * FROM user_seat_booked WHERE usb_sid = '$seatid' ";
                $select_usb_query =$connect->query($select_usb);
            
                while($row=$select_usb_query->fetch_assoc()){
            
                $usb_userid=$row['usb_uid'];
                }
                if($usb_userid==$_SESSION['user_id']){

                $select_usb= "DELETE FROM user_seat_booked WHERE usb_uid= '$usb_userid' AND usb_sid= '$seatid' ";
                $select_usb_query= $connect->query($select_usb);


                $update_seat = "UPDATE seat SET status='Book' WHERE id= '$seatid' ";
                $update_seat_query= $connect->query($update_seat);
                header("location:user_booking.php");


                }else{
                    header("location:user_booking.php");
                }





    }      

           
   
  /* */
   


}else{
    echo '<div class="alert alert-danger text-center"><h1>Something went Wrong</h1></div> ';

}

?>



<?php require_once "include/footer.php" ?>