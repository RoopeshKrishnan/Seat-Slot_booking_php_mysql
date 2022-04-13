 <?php
    session_start();
    require_once "include/connect.php";

    if (isset($_SESSION['user_id'])) {

        $userid = $_SESSION['user_id'];

        $select = "SELECT * FROM  user_seat_booked WHERE usb_uid= '$userid'";
        $select_query = $connect->query($select);


        $count = $select_query->num_rows;
        while ($row = $select_query->fetch_assoc()) {

            $seatno = $row['usb_sid'];
        }
    }

    ?>
 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link rel="stylesheet" href="look.css">

     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 </head>

 <body>
     <div class="wraper">
         <nav>
             <div class="nav_title">
                 <a class="navbar-brand title_style" href="index.php">Seat Booking</a>
             </div>

             <?php
                if (isset($_SESSION['user_id'])) {

                    $user_idd = $_SESSION['user_id'];

                    $select = "SELECT name FROM user WHERE id= '" . $user_idd . "' ";
                    $select_query = $connect->query($select);

                    while ($row = $select_query->fetch_assoc()) {

                        $name = $row['name'];
                    }

                    ?>
                    <div class="nav_items">

                        <?php echo ' <form style="display:flex;" action="logout.php" method="post">
                                            <button class="btn text-light" name="logout">logout</button>

                                            </form>'; ?>
                    </div>
                    <?php } 
             else {
                    ?>

                    <div class="nav_items">
                        <a class="nav-link " aria-current="page" href="login.php">Login</a>
                    </div>


                    <?php
                  }  ?>

         </nav>

     </div>

     <section style="width: 100%; height: 90vh;">
         <?php
           if(isset($count)){
                if ($count > 0) {
                    echo '<div style="background-color: red; color: white; " class="card" style="width: 18rem;">
                        <ul class="list-group list-group-flush">
                      
                        <h2>  <li class="list-group-item text-center">' . $seatno . '</li></h2>
                    
                        </ul>
                        </div>
                        ';
                } else {
                        echo '<div class="no_booking">
                        <h1>NO BOOKING</h1>
                        </div>' ;


                    
                }
           }
           
            ?>


     </section>


     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 </body>

 </html>