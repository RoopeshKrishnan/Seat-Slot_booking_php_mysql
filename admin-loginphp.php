<?php 
require_once "include/connect.php";
if(isset($_POST['admin_login'])){



$admin_email= $_POST['admin_email'];
$admin_password = $_POST['admin_password'];

$select = "SELECT * FROM admin WHERE admin_email='$admin_email' AND admin_password=MD5('$admin_password')";
$select_query = $connect->query($select);

if($row = $select_query->fetch_assoc()){

    $_SESSION['admin']= $row['admin_name'];

    header("location:admin_dashboard.php");

}else{

    header("location:admin-login.php?wrong_admin");


}


}else{


    header("location:admin-login.php");
}
?>