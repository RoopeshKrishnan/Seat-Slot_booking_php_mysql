<?php
require_once "include/dash_header.php";
require_once "include/connect.php";

?>
<div class="dash_title">
<h1 >ADMIN DASHBOARD</h1>
</div>

<div class="dash_wrap">

<div class="card admin-card" style="width: 18rem; background-color: white; color: black;">
<div class="approvel_icon">
<i class='bx bx-pyramid'></i>
</div>
  <div class="card-body">
    <h5 class="card-title">Pending Approvels</h5>
    <div class="approval_button">
    <a href="admin-approval.php" class="btn btn-danger">View</a>
    </div>
  </div>
</div>


<div class="card admin-card" style="width: 18rem; background-color: white; color: black;">
<div class="approvel_icon">
<i class='bx bx-chair'></i>
</div>
  <div class="card-body">
    <h5 class="card-title">Book Seat</h5>
    <div class="approval_button">
    <a href="admin-seat-book.php" class="btn btn-danger">Book</a>
    </div>
  </div>
</div>




<div class="card admin-card" style="width: 18rem; background-color: white; color: black;">
<div class="approvel_icon">
<i class='bx bx-user'></i>
</div>
  <div class="card-body">
    <h5 class="card-title">Manage Users</h5>
    <div class="approval_button">
    <a href="admin_user_manage.php" class="btn btn-danger">ok</a>
    </div>
  </div>
</div>












</div>
<?php 

require_once "include/footer.php";

?>