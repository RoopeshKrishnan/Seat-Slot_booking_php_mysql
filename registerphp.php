<?php

require_once "include/connect.php";

if(isset($_POST['submit'])){


    $name= $_POST['name'];
    $age= $_POST['age'];
    $email= $_POST['email'];
    $number= $_POST['mob_number'];
    $password= $_POST['password'];

/*****************password protection and date **************/
    $HashPass= password_hash($password,PASSWORD_DEFAULT);
    date_default_timezone_set('Asia/Kolkata');
    $date= date("d/m/Y");

    


    $insert = "INSERT INTO user (name,age,mob_number,email,password,date)  VALUES ('$name', '$age', '$number', '$email', '$HashPass', '$date')";
    $insert_query = $connect->query($insert);

    if($insert_query){

        header("location:login.php?suc");
    }else{


        header("location:register.php?something_wrong");
        exit();

    }


}else{

    header("location:register.php");
}




?>