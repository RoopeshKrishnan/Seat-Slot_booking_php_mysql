<?php
require_once "include/header.php";
require_once "include/connect.php";
if (isset($_GET['delete'])) {

    $delete_id = $_GET['delete'];

  
$delete = "DELETE FROM user WHERE id= '".$delete_id."' ";
$delete_query= $connect->query($delete);

header("location:admin_user_manage.php");

} else {
    echo '<div class="alert alert-danger text-center"><h1>Something went Wrong</h1></div> ';
}

?>



<?php require_once "include/footer.php" ?>

