<?php
session_start();
require_once "include/connect.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seat Booking</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="look.css">

</head>

<body>
    <div class="wraper">
        <nav>
            <div class="nav_title">
                <a class="navbar-brand title_style" href="index.php">Seat Booking</a>
            </div>

            <?php if (isset($_SESSION['admin'])) {


            ?>
                <div class="nav_items">

                    <?php echo ' <form action="logout.php" method="post">
                                <button class="btn text-light" name="admin_logout">logout</button>
    
                                </form>'; ?>
                </div>
            <?php } else {
            ?>

                <div class="nav_items">
                    <a class="nav-link " aria-current="page" href="admin-login.php">Login</a>
                </div>


            <?php }  ?>

        </nav>
    </div>


    <!----------------------------------bootstarp-------------------------->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>