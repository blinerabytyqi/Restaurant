
<?php 

include "inc/header.php";
use Admin\Libs\Reservation;
include "inc/adminnav.php" ?>
<div id="layoutSidenav_content">
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Reservation</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Reservation</li>
        </ol>
        <div class="row justify-content-center">
            <?php
                if(isset($_POST['add_reservation'])){
                    $reservation=new Reservation();
                    $reservation->setFirstName($_POST['res_firstname']);
                    $reservation->setLastName($_POST['res_lastname']);
                    $reservation->setAdresa($_POST['adresa']);
                    $reservation->setEmail($_POST['res_email']);
                    $reservation->setPhone($_POST['res_phone']);
                    $reservation->setDate($_POST['res_date']);
                    $reservation->setTime($_POST['res_time']);
                    if( $reservation->create()){
                        $session->message("Reservations added succesfully");
                        header("Location: reservations.php");
                    }
                }

            ?>
            <div class="col-lg-9">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header">
                    <h3 class="text-center font-weight-light my-2">Create Post</h3>
                </div>
                
                <div class="card-body">
                    <form method="post" action="" id="add_reservation" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="small mb-1" for="res_firstname">First name :</label>
                            <input class="form-control py-4" name="res_firstname" id="res_firstname" type="text" placeholder="Enter firstname" />
                        </div>
                        <div class="form-group">
                            <label class="small mb-1" for="res_lastname">Last name:</label>
                            <input class="form-control py-4" name="res_lastname" id="res_lastname" type="text" placeholder="Enter lastname" />
                        </div>
                        <div class="form-group">
                            <label class="small mb-1" for="adresa">Adress:</label>
                            <input class="form-control py-4" name="adresa" id="adresa" type="text" placeholder="Enter adress" />
                        </div>
                        <div class="form-group">
                            <label class="small mb-1" for="res_email">Email:</label>
                            <input class="form-control py-4" name="res_email" id="res_email" type="text" placeholder="Enter email" />
                        </div>
                        <div class="form-group">
                            <label class="small mb-1" for="res_phone">Phone:</label>
                            <input class="form-control py-4" name="res_phone" id="res_phone" type="text" placeholder="Enter phone" />
                        </div>
                        <div class="form-group">
                            <label class="small mb-1" for="res_date">Publication date:</label>
                            <input class="form-control py-4" name="res_date" id="res_date" type="date" placeholder="Select date" />
                        </div>
                        <div class="form-group">
                            <label class="small mb-1" for="res_time">Publication time:</label>
                            <input class="form-control py-4" name="res_time" id="res_time" type="time" placeholder="Select time" />
                        </div>
                        
                        <input class="btn btn-primary"  id="login" value="Create Reservation"  
                         type="submit" name="add_reservation"/>
                    </form>
                </div>
              
            </div>
        </div>
    </div>
</main>

    <?php include "inc/footer.php" ?>
    <script>
        $().ready(function() {
            $("#add_reservation").validate({
                rules: {
                    res_firstname: {
                        required: true,
                        minlength: 3,
                        lettersonly: true
                    },
                    res_lastname: {
                        required: true,
                        minlength: 3,
                        lettersonly: true
                    },
                    adresa: {
                        required: true,
                        minlength: 3
                    },
                    res_phone: {
                        required: true,
                        minlength: 9
                    },
                    res_email: {
                        required: true,
                        minlength: 3
                    },
                    res_date: {
                        required: true
                    },
                    res_time: {
                        required: true
                    },


                },
                messages: {
                    res_firstname: {
                        required: "Ju lutem shenoni nje emer",
                        minlength: "Emri i juaj duhet te kete se paku tre karaktere",
                        lettersonly: "Emri nuk duhet te kete numra "
                    },
                    res_lastname: {
                        required: "Ju lutem shenoni nje mbiemer",
                        minlength: "Mbiemri i juaj duhet te kete se paku tre karaktere",
                        lettersonly: "Mbiemri nuk duhet te kete numra "
                    },
                    adresa: {
                        required: "Ju lutem shenoni nje adres",
                        minlength: "Adresa e juaj duhet te kete se paku tre karaktere"
                    },
                    res_phone: {
                        required: "Ju lutem shenoni nje numer telefoni",
                        minlength: "Telefoni i juaj duhet te kete se paku tetë karaktere"
                    },
                    res_email: {
                        required: "Ju lutem shenoni nje email",
                        minlength: "Emaili i juaj duhet te kete se paku tre karaktere"
                    },
                    res_date: {
                        required: "Ju lutem shenoni nje datë"
                        
                    },
                    res_time: {
                        required: "Ju lutem shenoni nje orarë"
                        
                    },
                }

            });
            jQuery.validator.addMethod("lettersonly", function(value, element) {
                return this.optional(element) || /^[a-z]+$/i.test(value);
            }, "Letters only please");
        });
        </script>