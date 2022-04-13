<?php
require_once "include/dash_header.php";
require_once "include/connect.php";


if (isset($_SESSION['admin'])) {

    $select = "SELECT * FROM seat WHERE status = 'Pending'";

    $select_query = $connect->query($select);





    $select_usp = "SELECT * FROM user_seat_pending ";
    $select_usp_query = $connect->query($select_usp);

    $count = $select_usp_query->num_rows;


    if ($count > 0) {

?>








        <div class="container">
            <div class="row">
                <div class="col">
                    <div style="margin-bottom: 10px;" class="card bg-dark text-white mt-5">
                        <h3 class="text-center  py-3">Pending Approvels</h3>
                    </div>
                    <div class="dash_bcak_wrap">
                        <a href="admin_dashboard.php"><i class='dash_back bx bx-arrow-back'></i></a>


                    </div>
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
                                    <td>Seat NO</td>
                                    <td>User Name</td>
                                    <td>User Number</td>
                                    <td>User Email</td>
                                    <td colspan="5">Operaion</td>


                                </tr>
                                <?php
                                $slno = 0;
                              
                                while ($store = $select_usp_query->fetch_assoc()) {

                                    $seat_booked_user_id = $store['usp_user_id'];
                                    $seat_booked_seat_id = $store['usp_seat_id'];

                                    
                                        $select_seat_no="SELECT number FROM seat WHERE id='$seat_booked_seat_id'";
                                        $select_seat_no_query=$connect->query($select_seat_no);

                                        while($seat_num_result=$select_seat_no_query->fetch_assoc()){
                                            $seat_number=$seat_num_result['number'];
                                        }




                                            $seat_booked_user_deatils = "SELECT * FROM user WHERE  id='$seat_booked_user_id'";
                                            $seat_booked_user_deatils_query = $connect->query($seat_booked_user_deatils);


                                            while ($store_user = $seat_booked_user_deatils_query->fetch_assoc()) {

                                                $slno = $slno + 1;
                                                $user_name = $store_user['name'];
                                                $user_mobile = $store_user['mob_number'];
                                                $user_email = $store_user['email'];



                                                ?>

                                                <tr>
                                                    <td><?php echo $slno ?></td>
                                                    <td><?php echo $seat_number ?></td>
                                                    <td><?php echo $user_name ?></td>
                                                    <td><?php echo $user_mobile ?></td>
                                                    <td><?php echo $user_email ?></td>

                                                    <td class="tdd"><a href="approve.php?approve=<?php echo $seat_booked_seat_id ?>" class="btn btn-danger btn-sm">Approve</a></td>
                                                    <td><a href="cancel.php?cancel=<?php echo $seat_booked_seat_id ?>" class="btn btn-primary btn-sm">Cancel</a></td>


                                                </tr>

                                        <?php
                                            }
                                        } ?>

                                </table>

                            </div>
                        </div>


                    </div>

                </div>
            </div>
    <?php
    } else {
    ?><div class="dash_bcak_wrap">
            <a href="admin_dashboard.php"><i class='dash_back bx bx-arrow-back'></i></a>


        </div>

<?php
        echo '
  <div class="record_empty">
      <h1>Record is empty</h1>
  </div>';
    }
} else {


    header("location:admin_dashboard.php");
}


?>
<?php
require_once "include/footer.php";
?>