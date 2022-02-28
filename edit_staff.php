<?php

use Admin\Libs\Stafi;

include "inc/header.php";
include "inc/adminnav.php" ?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Staff</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">staff</li>
            </ol>
            <div class="row justify-content-center">
                <?php
                $staff = new Stafi();
                if (isset($_GET['staffid'])) {
                    $staff = $staff->find_id(($_GET['staffid']));
                }
                if (isset($_POST['update_staff'])) {
                    $staff->setFirstname($_POST['firstname']);
                    $staff->setLastname($_POST['lastname']);
                    $staff->setPhone($_POST['staf_phone']);
                    $staff->setEmail($_POST['staf_email']);
                    $staff->setAdresa($_POST['adresa']);
                    $staff->setPosition($_POST['position']);
                    $staff->setSalary($_POST['salary']);
                    $staff->setImage_url($_POST['photo']);
                    if( $staff->update()){
                        $session->message("Staff updated succesfully");
                        header("Location: staff.php");
                    }
                }

                ?>
                <div class="col-lg-9">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-2">Create User</h3>
                        </div>

                        <div class="card-body">
                            <form method="post" action="" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="small mb-1" for="firstname">First Name :</label>
                                    <input class="form-control py-4" name="firstname" id="firstname" type="text" 
                                    placeholder="Enter first name" value="<?php if(!empty($staff->getFirstname())){ echo $staff->getFirstname();} ?>" />
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="lastname">Last Name :</label>
                                    <input class="form-control py-4" name="lastname" id="lastname" type="text" 
                                    placeholder="Enter last name" value="<?php if(!empty($staff->getLastname())){ echo $staff->getLastname();} ?>" />
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="staf_phone">Phone Number :</label>
                                    <input class="form-control py-4" name="staf_phone" id="staf_phone" type="text" 
                                    placeholder="Enter phone number" value="<?php if(!empty($staff->getPhone())){ echo $staff->getPhone();} ?>" />
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="photo">Image url:</label>
                                    <input class="form-control py-4" name="photo" id="photo" type="image_url" 
                                    placeholder="Enter image_url" value="<?php if(!empty($staff->getImage_url())){ echo $staff->getImage_url();} ?>" />
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="staf_email">Email Address :</label>
                                    <input class="form-control py-4" name="staf_email" id="staf_email" type="text" 
                                    placeholder="Enter email address" value="<?php if(!empty($staff->getEmail())){ echo $staff->getEmail();} ?>"  />
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="adresa">Adress :</label>
                                    <input class="form-control py-4" name="adresa" id="adresa" type="text" 
                                    placeholder="Enter adress" value="<?php if(!empty($staff->getAdresa())){ echo $staff->getAdresa();} ?>" />
                                </div>
                               <div class="form-group">
                                    <label class="small mb-1" for="position">Position :</label>
                                    <input class="form-control py-4" name="position" id="position" type="text" 
                                    placeholder="Enter position" value="<?php if(!empty($staff->getPosition())){ echo $staff->getPosition();} ?>" />
                                </div>
                               <div class="form-group">
                                    <label class="small mb-1" for="salary">Salary :</label>
                                    <input class="form-control py-4" name="salary" id="salary" type="text" 
                                    placeholder="Enter salary" value="<?php if(!empty($staff->getSalary())){ echo $staff->getSalary();} ?>" />
                                </div>
                              
                                
                                <input class="btn btn-primary" id="login" value="Update User" type="submit" name="update_staff" />
                            </form>
                        </div>
                       
                    </div>
                </div>
            </div>
    </main>

    <?php include "inc/footer.php" ?>