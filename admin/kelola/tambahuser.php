<?php 
	session_start();
     
    require "function.php";


   if (isset($_POST["submit"])){
       
        if(nambah($_POST) > 0){
            echo " <script>
            alert ('data berhasil ditambahkan!');
            document.location.href = 'user.php';
            </script>";
   }   else{
    echo " <script>
    alert ('data Gagal ditambahkan!');
    document.location.href = 'user.php';
    </script>";
   }
}
	?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link rel="icon" type="image/x-icon" href="https://cdn0.iconfinder.com/data/icons/learning-icons-rounded/110/Books-512.png" />
        <link href="..\css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
	<title>Tambah User </title>
</head>
<body  style="background-color: #ecb807;">
	
	
	<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <img src="https://cdn0.iconfinder.com/data/icons/learning-icons-rounded/110/Books-512.png" alt="" width="40" height="40" class="img-responsive " />
            <a class="navbar-brand ps-3" href="index.php">
             E-Perpustakaan</a>
            
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            Navbar Search
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
               
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                      
                         <li><a class="dropdown-item" href="..\..\logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Home</div>
                            <a class="nav-link" href="..\index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                 Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Kelola</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-address-card"></i></div>
                                Pengguna
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="admin.php"">
                                    <div class="sb-nav-link-icon"><i class="fa-solid fa-user-gear"></i></div>   
                                    Admin</a>
                                    <a class="nav-link" href="user.php">
                                    <div class="sb-nav-link-icon"><i class="fa-solid fa-user"></i></div>    
                                    User</a>
                                </nav>
                            </div>
                           
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="true" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-screwdriver-wrench"></i></div>
                                Kelola
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="ebook.php">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-book-bookmark"></i></div>
                                    E-Books</a>
                                    <a class="nav-link" href="video.php">   
                                    <div class="sb-nav-link-icon"><i class="fa-solid fa-video"></i></div>    
                                    Videos</a>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="charts.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Charts
                            </a>
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Administrator
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <div class="container">
            <p class="h2 text-light text-center mb-5 mt-5">FORM TAMBAH USER</p>
                
<!-- <div class="d-flex justify-content-xl-center"> -->
<div class="container">
<form action="" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama" required>
    <!-- <div id="emailHelp" class="form-text">Isi Nama Lengkap Anda</div> -->
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Username</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1"  name="password" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Role</label>
    <select class="form-control" name="role" id="role">
        <option value="admin" >Admin</option>
        <option value="user" selected>User</option>
        
    </select>
    <!-- <input type="text" value="admin" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" disabled  name="role"> -->
  </div>
  <center>
  <button type="submit" class="btn btn-primary btn-lg" name="submit">Submit</button>
  <a href="admin.php" class="btn btn-secondary  btn-lg">Kembali</a>
  </center>
</form>
</div>

                
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>  </div></div></div>     
 </body>
</html>