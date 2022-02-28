<?php

use Admin\Libs\Feedback;

include "inc/header.php";
include "inc/adminnav.php" ?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Feedbacks</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Feedbacks</li>
            </ol>
            <div class="row justify-content-center">
                <?php
                $feedback = new Feedback();
                if (isset($_GET['feedbackid'])) {
                    $feedback = $feedback->find_id(($_GET['feedbackid']));
                }
                if (isset($_POST['update_feedback'])) {
                    $feedback->setFirstName($_POST['firstname']);
                    $feedback->setLastName($_POST['lastname']);
                    $feedback->setDescription($_POST['description']);
                    if( $feedback->update()){
                        $session->message("Feedback updated succesfully");
                        header("Location: feedbacks.php");
                    }
                }

                ?>
                <div class="col-lg-9">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-2">Edit Feedback</h3>
                        </div>

                        <div class="card-body">
                            <form method="post" action="">
                                <div class="form-group">
                                    <label class="small mb-1" for="firstname">Last name :</label>
                                    <input class="form-control py-4" name="firstname" id="firstname" type="text" 
                                    placeholder="Enter name" value="<?php if(!empty($feedback->getFirstName())){ echo $feedback->getFirstName();} ?>" />
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="lastname">Last name :</label>
                                    <input class="form-control py-4" name="lastname" id="lastname" type="text" 
                                    placeholder="Enter last name" value="<?php if(!empty($feedback->getLastName())){ echo $feedback->getLastName();} ?>" />
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="description">Description :</label>
                                    <input class="form-control py-4" name="description" id="description" type="text" 
                                    placeholder="Enter last name" value="<?php if(!empty($feedback->getDescription())){ echo $feedback->getDescription();} ?>" />
                                </div>

                                <input class="btn btn-primary" id="login" value="Update Feedback" type="submit" name="update_feedback" />
                            </form>

                        </div>
                       
                    </div>
                </div>
            </div>
    </main>

    <?php include "inc/footer.php" ?>