 
 <?php 
 
 session_start();
 
 ?>
 
 
 
 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Register-form</title>
  </head>
  <body>
 




   

<form action="registerPost.php" method="POST" enctype="multipart/form-data">
  <section class="vh-60" style="background-color: #eee;">
  <div class="container h-50">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                <form class="mx-1 mx-md-4">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example3c">Your Name</label>
                      <input type="text" id="form3Example1c" class="form-control" name="name"
                      value="<?=  $_SESSION['nam_val'] ?>">
                      <?php 
                      
                      if(isset($_SESSION['nam_err'])){ ?>
                        <strong class="text-danger"> <?= $_SESSION['nam_err']?></strong>   
                     <?php } ?>
                      
                    </div>

                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example3c">Your Email</label>
                      <input type="email" id="form3Example3c" class="form-control" name="email" value="<?= $_SESSION['eml_val']?>">

                      <?php 
                      if(isset( $_SESSION['eml_err'])){ ?>
                        <strong class="text-danger"><?= $_SESSION['eml_err']?></strong>
                      <?php } ?>
                      
                
                      
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example4c">Password</label>

                      <input type="password" id="form3Example4c" class="form-control" name="password">

                      <?php if(isset($_SESSION['pass_err'])){ ?>
                            <strong class="text-danger"><?= $_SESSION['pass_err']?></strong>

                        <?php }?>
                    </div>
                  </div>

                   <div class="d-flex justify-content-center mx-4 mb-lg-2">
                    <input type="submit" value="register" name="submit">
                </div> 





                </form>



              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</form>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>

<?php 

unset($_SESSION['nam_err']);
unset($_SESSION['eml_err']);
unset($_SESSION['pass_err']);






?>







