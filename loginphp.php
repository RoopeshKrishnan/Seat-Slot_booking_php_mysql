<?php

session_start();

require_once "include/connect.php";

if (isset($_POST['login'])) {

    $username = $_POST['email'];
    $password = $_POST['password'];

    $select = "SELECT * FROM user WHERE email ='" . $username . "'OR mob_number= '" . $username . "' ";
    $select_query = $connect->query($select);



    if ($row = $select_query->fetch_assoc()) {

        $Hash = password_verify($password, $row['password']);

        if ($Hash == false) {

            header("location:login.php?wrong_password=$Hash");
            exit();
        } elseif ($Hash == true) {

            $_SESSION['user_id']=$row['id'];
            $userid=$row['id'];
            header("location:user_booking.php?success=$userid");
        }
    } else {


        header("location:login.php?wrong_username");
        exit();
    }
} else {


    header("location:login.php");
}
