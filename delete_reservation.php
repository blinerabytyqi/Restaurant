<?php

use Admin\Libs\Reservation;

include "inc/header.php";
include "inc/adminnav.php" ?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Reservations</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Reservations</li>
            </ol>
            <div class="row justify-content-center">
                <?php
                $reservation = new Reservation();
                if (isset($_GET['reservationid'])) {
                    $reservation = $reservation->find_id(($_GET['reservationid']));
                }
                if (isset($_POST['delete_reservation'])) {
                    if( $reservation->delete()){
                        $session->message("Reservation deleted succesfully");
                        header("Location: reservations.php");
                    }
                    
                }

                ?>
                <div class="col-lg-9">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-2">Create Reservation</h3>
                        </div>

                        <div class="card-body">
                            <form method="post" action="" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="small mb-1" for="res_firstname">First Name :</label>
                                    <input class="form-control py-4" name="res_firstname" id="res_firstname" type="text" 
                                    placeholder="Enter first name" value="<?php if(!empty($reservation->getFirstname())){ echo $reservation->getFirstname();} ?>" />
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="res_lastname">Last Name :</label>
                                    <input class="form-control py-4" name="res_lastname" id="res_lastname" type="text" 
                                    placeholder="Enter last name" value="<?php if(!empty($reservation->getLastname())){ echo $reservation->getLastname();} ?>" />
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="adresa">Adress :</label>
                                    <input class="form-control py-4" name="adresa" id="adresa" type="text" 
                                    placeholder="Enter adress" value="<?php if(!empty($reservation->getAdresa())){ echo $reservation->getAdresa();} ?>" />
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="res_email">Email Address :</label>
                                    <input class="form-control py-4" name="res_email" id="res_email" type="text" 
                                    placeholder="Enter email address" value="<?php if(!empty($reservation->getEmail())){ echo $reservation->getEmail();} ?>"  />
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="phores_phonene">Phone Number :</label>
                                    <input class="form-control py-4" name="res_phone" id="res_phone" type="text" 
                                    placeholder="Enter phone number" value="<?php if(!empty($reservation->getPhone())){ echo $reservation->getPhone();} ?>" />
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="res_date">Date :</label>
                                    <input class="form-control py-4" name="res_date" id="res_date" type="date" 
                                    placeholder="Enter data" value="<?php if(!empty($reservation->getDate())){ echo $reservation->getDate();} ?>" />
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="res_time">Time :</label>
                                    <input class="form-control py-4" name="res_time" id="res_time" type="time" 
                                    placeholder="Enter time" value="<?php if(!empty($reservation->getTime())){ echo $reservation->getTime();} ?>" />
                                </div>
                               
                                
                                <input class="btn btn-primary" id="login" value="Delete Reservation" type="submit" name="delete_reservation" />
                            </form>
                        </div>
                       
                    </div>
                </div>
            </div>
    </main>

    <?php include "inc/footer.php" ?>