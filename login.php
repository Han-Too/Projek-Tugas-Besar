<?php 
    include "head.php";

?>

<section class="vh-100" style="background-color: #ecb807;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        
      <marquee behavior="alternate" direction="right" class="bg-warning text-light h4"> Hubungi Admin Untuk Membuat Akun</marquee>
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
        
          <div class="card-body p-5 text-center">

            <h3 class="mb-5">Login</h3>

            <form action="ceklogin.php" method="post">
            <div class="form-outline mb-4">
                
            <label class="form-label" for="typeEmailX-2">Username</label>
              <input type="text" id="typeEmailX-2" class="form-control form-control-lg" name="username"/>
              
            </div>

            <div class="form-outline mb-4">
              <label class="form-label" for="typePasswordX-2">Password</label>
              <input type="password" id="typePasswordX-2" class="form-control form-control-lg" name="password"/>
              
            </div>


            <button class="btn btn-primary btn-lg btn-block btn-outline-info px-4" type="submit">Login</button>

            <hr class="my-4">

            <button class="btn btn-primary btn-lg btn-block btn-outline-warning" ><a href="index.php"></a> Kembali </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>