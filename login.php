<?php include "inc/header.php";
$session = new Admin\Libs\Session();
if ($session->isSignedIn()) {
  header("Location: index.php");
}

?>

<section class="vh-100" style="background-color: #B2CECD;">
  <div class="container text-center">
    <div class="row d-flex justify-content-center align-items-center h-100">



    
    <?php
                  if (isset($_POST['login'])) {
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                    $user = new \Admin\Libs\User();
                    $user = $user->verifyUser($email, $password);
                    if ($user) {
                      $session->login($user);
                      header("Location: index.php");
                    } else {
                      $session->message("Your email or password is incorrent");
                    }
                  } else {
                    $email = "";
                    $password = "";
                    $session->message();
                  }

                  ?>


      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">

            <div class="col-md-6 col-lg-12 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form method="post" action=""> 


                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>
            
                  <h5 class="bg-danger text-white pl-3">

                  <?php
						if(!empty($session->message)){
							echo $session->message;
						}
					?>
                   
                  </h5>
                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example17">Email address</label>
                    <input type="email" id="form2Example17" class="form-control form-control-lg" type="text" name="email"| value="<?php if (!empty($email)) echo $email; ?>" />


                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example27">Password</label>
                    <input type="password" id="form2Example27" class="form-control form-control-lg"  name="password" value="<?php if (!empty($password)) echo $password; ?>" />

                  </div>


                   <input type="submit"  class="btn" id="login" value="Login"  name="login" >


                  <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="register.php" style="color: #393f81;">Register here</a></p>

                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include "inc/footer.php"; ?>