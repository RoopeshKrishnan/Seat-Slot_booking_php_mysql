<?php
require_once "include/dash_header.php";
require_once "include/connect.php";


$select = "SELECT * FROM seat";
$select_query = $connect->query($select); ?>


<div class="seat_title">

 <h1>Administration Booking</h1>
 <div class="dash_bcak_wrap">
 <a href="admin_dashboard.php"><i class='dash_back bx bx-arrow-back'></i></a>
 </div>

</div>


<div class="pop">

    <?php
    while ($row = $select_query->fetch_assoc()) {


      $id = $row['id'];
      $number = $row['number'];
      $status = $row['status'];
    ?>




    <?php

    

    if($status=='Book'){
      echo '
      <div class="container">

      <div class="row">
    <div class="seat_wrap col-sm-4">
    <div class="card card-style" style="width: 80rem ; height: 10rem;background-color: white;color:Black">
      <div class="card-body">
      <h2 class="card-title">' . $status . '</h5>
        <h5 class="card-title">Seat No :' . $number . '</h5>
        <div class="button-wrap">
        <a class="card-button1" href="admin_seat_book_button.php?seat_id='.$id.'" class="card-link">Book</a>
        <a class="card-button1" href="admin_seat_book_cancel.php?seat_id='.$id.'" class="card-link">Cancel</a>
        <a class="card-button1" href="admin_seat_book_reserve.php?seat_id='.$id.'" class="card-link">Reserve</a>

        </div>

      </div>
    </div>
    </div>
    </div>
    </div>
    </div>  
    ';
    } elseif($status=='Pending'){

      echo '
      <div class="container">

      <div class="row">
    <div class="seat_wrap col-sm-4">
    <div class="card card-style" style="width: 80rem ; height: 10rem;background-color:  rgb(206, 206, 9);color:white ">
      <div class="card-body">
      <h2 class="card-title">' . $status . '</h5>
        <h5 class="card-title">Seat No :' . $number . '</h5>
        <div class="button-wrap">
        <a class="card-button1" href="admin_seat_book_button.php?seat_id='.$id.'" class="card-link">Book</a>
        <a class="card-button1" href="admin_seat_book_cancel.php?seat_id='.$id.'" class="card-link">Cancel</a>
        <a class="card-button1" href="admin_seat_book_reserve.php?seat_id='.$id.'" class="card-link">Reserve</a>

        </div>

      </div>
    </div>
    </div>
    </div>
    </div>
    </div>  
    ';
    }elseif($status=='Booked'){

      echo '
      <div class="container">

      <div class="row">
    <div class="seat_wrap col-sm-4">
    <div class="card card-style" style="width: 80rem ; height: 10rem;background-color:Red;color:white ">
      <div class="card-body">
      <h2 class="card-title">' . $status . '</h5>
        <h5 class="card-title">Seat No :' . $number . '</h5>
        <div class="button-wrap">
        <a class="card-button1" href="admin_seat_book_button.php?seat_id='.$id.'" class="card-link">Book</a>
        <a class="card-button1" href="admin_seat_book_cancel.php?seat_id='.$id.'" class="card-link">Cancel</a>
        <a style="  pointer-events: none;" class="card-button1" href="admin_seat_book_reserve.php?seat_id='.$id.'" class="card-link">Reserve</a>

        </div>

      </div>
    </div>
    </div>
    </div>
    </div>
    </div>  
    ';
    }else{
        
      echo '
      <div class="container">

      <div class="row">
    <div class="seat_wrap col-sm-4">
    <div class="card card-style" style="width: 80rem ; height: 10rem;background-color:Orange;color:white ">
      <div class="card-body">
      <h2 class="card-title">' . $status . '</h5>
        <h5 class="card-title">Seat No :' . $number . '</h5>
        <div class="button-wrap">
        <a class="card-button1" href="admin_seat_book_button.php?seat_id='.$id.'" class="card-link">Book</a>
        <a class="card-button1" href="admin_seat_book_cancel.php?seat_id='.$id.'" class="card-link">Cancel</a>
        <a class="card-button1" href="admin_seat_book_reserve.php?seat_id='.$id.'" class="card-link">Reserve</a>

        </div>

      </div>
    </div>
    </div>
    </div>
    </div>
    </div>  
    ';
    }



    /************************end of while*/
    }

    ?>


<?php require_once "include/footer.php" ?>