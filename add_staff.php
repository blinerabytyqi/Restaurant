<?php

use Admin\Libs\Stafi;

include "inc/header.php";
include "inc/adminnav.php" ?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Staff</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Staff</li>
            </ol>
            <div class="row justify-content-center">
                <?php
                if (isset($_POST['add_staff']) && isset($_FILES['image'])) {
                    $staff = new Stafi();
                    $staff->setFirstname($_POST['firstname']);
                    $staff->setLastname($_POST['lastname']);
                    $staff->setPhone($_POST['staf_phone']);
                    $staff->setEmail($_POST['staf_email']);
                    $staff->setAdresa($_POST['adresa']);
                    $staff->setPosition($_POST['position']);
                    $staff->setSalary($_POST['salary']);
                    $staff->setPhotoImage($_FILES['image']);
                    if($staff->create()){
                        $session->message("Staff added succesfully");
                        header("Location: staff.php");
                    }
                }

                ?>
                <div class="col-lg-9">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-2">Create Satff</h3>
                        </div>

                        <div class="card-body">
                            <form method="post" id="add_user" action="" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="small mb-1" for="firstname">First Name :</label>
                                    <input class="form-control py-4" name="firstname" id="firstname" type="text" placeholder="Enter first name" />
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="lastname">Last Name :</label>
                                    <input class="form-control py-4" name="lastname" id="lastname" type="text" placeholder="Enter last name" />
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="staf_phone">Phone Number :</label>
                                    <input class="form-control py-4" name="staf_phone" id="staf_phone" type="text" placeholder="Enter phone number" />
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="staf_email">Email Address :</label>
                                    <input class="form-control py-4" name="staf_email" id="staf_email" type="text" placeholder="Enter email address" />
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="adresa">Adress :</label>
                                    <input class="form-control py-4" name="adresa" id="adresa" type="text" placeholder="Enter adress" />
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="position">Position :</label>
                                    <input class="form-control py-4" name="position" id="position" type="text" placeholder="Enter position" />
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="salary">Salary :</label>
                                    <input class="form-control py-4" name="salary" id="salary" type="text" placeholder="Enter salary" />
                                </div>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="image">Profile Photo:</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="image" name="image" aria-describedby="inputGroupFileAddon01">
                                        <label class="custom-file-label" for="image">Choose Profile Photo</label>
                                    </div>
                                </div>

                                <input class="btn btn-primary" id="login" value="Create Staff" type="submit" name="add_staff" />
                            </form>
                        </div>
                      
                    </div>
                </div>
            </div>
    </main>

    <?php include "inc/footer.php" ?>
    <script>
        $().ready(function() {
            $("#add_user").validate({
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
                    staf_phone: {
                        required: true,
                        minlength: 9
                    },
                    staf_email: {
                        required: true,
                        minlength: 3
                    },
                    adresa: {
                        required: true,
                        minlength: 3
                    },
                    position: {
                        required: true,
                        minlength: 3
                    },
                    salary: {
                        required: true,
                        minlength: 3
                    },
                    image:{
                        required: true
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
                    staf_phone: {
                        required: "Ju lutem shenoni nje numer telefoni",
                        minlength: "Telefoni i juaj duhet te kete se paku tetë karaktere"
                    },
                    staf_email: {
                        required: "Ju lutem shenoni nje email",
                        minlength: "Emaili i juaj duhet te kete se paku tre karaktere"
                    },
                    adresa: {
                        required: "Ju lutem shenoni nje password",
                        minlength: "Adresa e juaj duhet te kete se paku tre karaktere"
                    },
                    position: {
                        required: "Ju lutem shenoni nje pozite",
                        minlength: "Pozita e juaj duhet te kete se paku tre karaktere"
                    },
                    salary: {
                        required: "Ju lutem shenoni rrogen",
                        minlength: "Rroga e juaj duhet te kete se paku tre karaktere"
                    },
                    image: {
                        required: "Ju lutem bejeni uplaod nje foto"
                    },
                }

            });
            jQuery.validator.addMethod("lettersonly", function(value, element) {
                return this.optional(element) || /^[a-z]+$/i.test(value);
            }, "Letters only please");
        });

        </script>