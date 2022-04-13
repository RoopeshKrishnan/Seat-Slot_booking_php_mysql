<?php
session_start();
require_once "include/connect.php";

if(isset($_SESSION['user_id'])){

    $userid=$_SESSION['user_id'];

    $select = "SELECT * FROM  user_seat_booked WHERE usb_uid= '$userid'";
    $select_query = $connect->query($select);


    $count=$select_query->num_rows;
    while($row= $select_query->fetch_assoc()){

        $seatno=$row['usb_sid'];

        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="look.css">
</head>
<body>
<?php   
if($count>0){
    echo '<div style="background-color: red; color: white; " class="card" style="width: 18rem;">
    <ul class="list-group list-group-flush">
      <li class="list-group-item">'.$seatno.'</li>
  
    </ul>
  </div>
    ';
}else{

    echo '<h1>NO BOOKING</h1>
    ';
}



?>









<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>
</body>
</html>

        <?php
    }



}else{


}
?>

