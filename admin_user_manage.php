<?php
require_once "include/dash_header.php";
require_once "include/connect.php";



if(isset($_SESSION['admin'])){

$select = "SELECT * FROM user ";

$select_query = $connect->query($select);

$count = $select_query->num_rows;

if ($count > 0) {

?>


    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card bg-dark text-white mt-5">
                    <h3 class="text-center  py-3">Manage accounts</h3>
                   
                </div>
                <div class="dash_bcak_wrap">
                        <a href="admin_dashboard.php"><i class='dash_back bx bx-arrow-back'></i></a>


                    </div>
            </div>
            <div class="row">
                <div class="col">

                    <div class="carde">
                        <div class="card-title">

                        </div>
                        <div class="card-body">
                            <table class="table table-striped">




                                <tr class="bg-success text-white">
                                    <td>Sl NO</td>
                                    <td>User Id</td>
                                    <td>Name</td>
                                    <td>Age</td>
                                    <td>Number</td>
                                    <td>Email</td>
                                    <!-- <td colspan="3">Operaion</td> -->

                                </tr>
                                <?php
                                $slno = 0;
                                while ($row = $select_query->fetch_assoc()) {


                                    $slno = $slno + 1;
                                    $id = $row['id'];
                                    $name = $row['name'];
                                    $age = $row['age'];
                                    $number = $row['mob_number'];
                                    $email = $row['email'];
                                ?>

                                    <tr>
                                        <td><?php echo $slno ?></td>
                                        <td><?php echo $id ?></td>
                                        <td><?php echo $name ?></td>
                                        <td><?php echo $age ?></td>
                                        <td><?php echo $number ?></td>
                                        <td><?php echo $email ?></td>



                                        <!-- <td class="tdd"><a href="admin_user_delete.php?delete=<?php echo $id  ?>" class="btn btn-danger btn-sm">Remove</a></td> -->

                                    </tr>

                                <?php   } ?>

                            </table>

                        </div>
                    </div>


                </div>

            </div>
        </div>
    <?php
} else {

    echo '
  <div class="record_empty">
      <h1>Record is empty</h1>
  </div>';
} ?>
<?php }else{

header("location:admin_dashboard.php");


}  ?>

    <?php
    require_once "include/footer.php";
    ?>