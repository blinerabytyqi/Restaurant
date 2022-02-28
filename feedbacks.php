
<?php 
use Admin\Libs\Feedback;
include "inc/header.php";
include "inc/adminnav.php" ?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">List of users</h1>
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
                                    <th>Description</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                             
                            </tfoot>
                            <tbody>
                                <?php
                                $feedback = new Feedback();
                                foreach ($feedback->find_all() as $fed) {
                                    echo "<tr>";
                                    echo "<td>". $fed->getFirstName() . "</td>";
                                    echo "<td>". $fed->getLastName() . "</td>";
                                    echo "<td>". $fed->getDescription() . "</td>";
                                    echo "<td><a href='edit_feedback.php?feedbackid=". $fed->getId() ."'>Edit</td>";
                                    echo "<td><a href='delete_feedback.php?feedbackid=". $fed->getId() ."'>Delete</a></td>";
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