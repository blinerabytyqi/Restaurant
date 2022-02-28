<style>

.box{
    width:500px !important;
    margin: 20px !important;
    border: 15px solid #fff !important;
    box-shadow: 0 5px 35px rgba(0,0,0,0.08) !important;


}
.imgBx{
    width: 100% !important;
    height: 300px !important;
}

</style>
<?php 
use Admin\Libs\Reservation;
include "inc/header.php";
include "inc/adminnav.php" ?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">List of posts</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header"><i class="fas fa-table mr-1"></i>DataTable Example</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                 
                                    <th>First name</th>
                                    <th>Last name</th>
                                    <th>Adress</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Date</th>
                                    <th>Rezervation time:</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <!-- <tfoot>
                                <tr> 
                                       
                                <th>First name</th>
                                    <th>Last name</th>
                                    <th>Adress</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Date</th>
                                    <th>Rezervation time:</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </tfoot> -->
                            <tbody>
                                <?php
                                $reservation = new Reservation();
                                foreach ($reservation->find_all() as $r) {
                                    echo "<tr>";
                                    
                                    echo "<td>". $r->getFirstName() . "</td>";
                                    echo "<td>". $r->getLastName() . "</td>";
                                    echo "<td>". $r->getAdresa() . "</td>";
                                    echo "<td>". $r->getEmail() . "</td>";
                                    echo "<td>". $r->getPhone() . "</td>";
                                    echo "<td>". $r->getDate() . "</td>";
                                    echo "<td>". $r->getTime() . "</td>";
                                    echo "<td><a href='edit_reservation.php?reservationid=". $r->getId() ."'>Edit</td>";
                                    echo "<td><a href='delete_reservation.php?reservationid=". $r->getId() ."'>Delete</a></td>";
                                    echo "</tr>";

                                }
                    
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include "inc/footer.php" ?>