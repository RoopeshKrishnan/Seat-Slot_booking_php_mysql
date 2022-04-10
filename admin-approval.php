<?php
require_once "include/header.php";
require_once "include/connect.php";


$select = "SELECT * FROM seat WHERE status = 'Pending'";

$select_query = $connect->query($select);

$count=$select_query->num_rows;

if($count>0){

?>


<div class="container">
    <div class="row">
        <div class="col">
            <div class="card bg-dark text-white mt-5">
                <h3 class="text-center  py-3">Pending Approvels</h3>


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
                            <td>Status</td>
                            <td colspan="3">Operaion</td>


                        </tr>
                        <?php
                        $slno=0;
                        while ($row = $select_query->fetch_assoc()) {


                            $slno = $slno + 1;
                            $id=$row['id'];
                            $seat_number = $row['number'];
                            $status = $row['status'];
                        ?>

                            <tr>
                                <td><?php echo $slno ?></td>
                                <td><?php echo $seat_number ?></td>
                                <td><?php echo $status ?></td>
                                <td class="tdd"><a href="approve.php?approve=<?php echo $id ?>" class="btn btn-danger btn-sm">Approve</a></td>
                                <td><a href="cancel.php?cancel=<?php echo $id ?>" class="btn btn-primary btn-sm">Cancel</a></td>
                            

                            </tr>

                        <?php   } ?>

                    </table>

                </div>
            </div>


        </div>

    </div>
</div>
<?php
} else{

  echo '
  <div class="record_empty">
      <h1>Record is empty</h1>
  </div>';



}?>


<?php
require_once "include/footer.php";
?>