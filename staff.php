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
use Admin\Libs\Stafi;
include "inc/header.php";
include "inc/adminnav.php" ?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">List of staff</h1>
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
                                 
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Phone Number</th>
                                    <th>Image</th>
                                    <th>Email</th>
                                    <th>Adress</th>
                                    <th>Position</th>
                                    <th>Salary</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr> 
                                       
                           
                            </tfoot>
                            <tbody>
                                <?php
                                $staff = new Stafi();
                                foreach ($staff->find_all() as $s) {
                                    echo "<tr>";
                                    
                                    echo "<td>". $s->getFirstName() . "</td>";
                                    echo "<td>". $s->getLastName() . "</td>";
                                    echo "<td>". $s->getPhone() . "</td>";
                                    echo "<td>". $s->getImage_url() . "</td>";
                                    echo "<td>". $s->getEmail() . "</td>";
                                    echo "<td>". $s->getAdresa() . "</td>";
                                    echo "<td>". $s->getPosition() . "</td>";
                                    echo "<td>". $s->getSalary() . "</td>";
                                    echo "<td><a href='edit_staff.php?staffid=". $s->getId() ."'>Edit</td>";
                                    echo "<td><a href='delete_staff.php?staffid=". $s->getId() ."'>Delete</a></td>";
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