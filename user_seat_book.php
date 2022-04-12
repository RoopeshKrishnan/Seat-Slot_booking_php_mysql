<?php
require_once "include/header.php";
require_once "include/connect.php";
if (isset($_GET['seat_id'])) {

    $seatid = $_GET['seat_id'];


    $select = "SELECT status FROM seat WHERE id='$seatid' ";
    $select_query = $connect->query($select);

    while ($row = $select_query->fetch_assoc()) {

        $status = $row['status'];
    }



    if ($status == "Book") {



        $update_seat = "UPDATE seat SET status='Pending' WHERE id= '$seatid' ";
        $update_seat_query = $connect->query($update_seat);


        $user_id = $_SESSION['user_id'];



        $insert = "INSERT  INTO user_seat_pending (usp_user_id,usp_seat_id,usp_status) VALUES ('$user_id', '$seatid', 'Pending')";
        $insert_Query = $connect->query($insert);



        header("location:user_booking.php");
    } elseif($status== "Pending") {

        header("location:user_booking.php");
    }
} else {
    echo '<div class="alert alert-danger text-center"><h1>Something went Wrong</h1></div> ';
}

?>



<?php require_once "include/footer.php" ?>