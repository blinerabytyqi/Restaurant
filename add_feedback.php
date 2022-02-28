
<?php 
use Admin\Libs\Feedback;
include "inc/header.php";
include "inc/adminnav.php" ?>
<div id="layoutSidenav_content">
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Users</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Feedbacks</li>
        </ol>
        <div class="row justify-content-center">
            <?php
                if(isset($_POST['add_feedback'])){
                    $feedback=new Feedback();
                    $feedback->setFirstName($_POST['firstname']);
                    $feedback->setLastName($_POST['lastname']);
                    $feedback->setDescription($_POST['description']);
                    if( $feedback->create()){
                        $session->message("Feedback added succesfully");
                        header("Location: feedbacks.php");
                    }
                }

                

            ?>
            <div class="col-lg-9">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header">
                    <h3 class="text-center font-weight-light my-2">Create Feedabck</h3>
                </div>
                
                <div class="card-body">
                    <form method="post" id="add_feedback" action="">
                        <div class="form-group">
                            <label class="small mb-1" for="firstname">First Name :</label>
                            <input class="form-control py-4" name="firstname" id="firstname" type="text" placeholder="Enter firstname" />
                        </div>
                        <div class="form-group">
                            <label class="small mb-1" for="lastname">Last Name :</label>
                            <input class="form-control py-4" name="lastname" id="lastname" type="text" placeholder="Enter lastname" />
                        </div>
                        <div class="form-group">
                            <label class="small mb-1" for="description">Description :</label>
                            <input class="form-control py-4" name="description" id="description" type="text" placeholder="Enter description" />
                        </div>
                        
                        <input class="btn btn-primary"  id="login" value="Create Feedback"  
                         type="submit" name="add_feedback"/>
                    </form>
                </div>
               
            </div>
        </div>
    </div>
</main>

    <?php include "inc/footer.php" ?>
    <script>
        $().ready(function() {
            $("#add_feedback").validate({
                rules: {
                    firstname: {
                        required: true,
                        minlength: 3,
                        lettersonly: true
                    },
                    lastname: {
                        required: true,
                        minlength: 3,
                        lettersonly: true
                    },
                    description: {
                        required: true,
                        minlength: 3
                    },

                },
                messages: {
                    firstname: {
                        required: "Ju lutem shenoni nje emer",
                        minlength: "Emri i juaj duhet te kete se paku tre karaktere",
                        lettersonly: "Emri nuk duhet te kete numra "
                    },
                    lastname: {
                        required: "Ju lutem shenoni nje mbiemer",
                        minlength: "Mbiemri i juaj duhet te kete se paku tre karaktere",
                        lettersonly: "Mbiemri nuk duhet te kete numra "
                    },
                    description: {
                        required: "Ju lutem shenoni nje description",
                        minlength: "Emaili i juaj duhet te kete se paku tre karaktere"
                    },
                }

            });
            jQuery.validator.addMethod("lettersonly", function(value, element) {
                return this.optional(element) || /^[a-z]+$/i.test(value);
            }, "Letters only please");
        });
        </script>