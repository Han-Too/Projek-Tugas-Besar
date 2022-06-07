<?php 
	session_start();
 
    require "function.php";
    

    $buku = query("SELECT * FROM buku ");
    
    if(isset($_POST['cari'])){
         $buku = caribuku($_POST['key']);
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
	<title>Kelola E-Books </title>
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
            <p class="h2 text-light text-center mb-5 mt-5">HALAMAN KELOLA E-BOOKS</p>
            <center>
            <div class="row">
            <div class="col-11">
            <div class="input-group ">
                <form action="" method="post">
  <input type="search" name="key" class="form-control rounded" size="220" placeholder="Masukan Katakunci" aria-label="Search" aria-describedby="search-addon" autocomplete="off" />
  
  
</div>
            </div>
            <div class="col-1">
            <button type="submit" class="btn btn-primary text-light " name="cari">search</button>
            </form>
            </div>
            </div>
            <br><a class="btn btn-success text-light btn-lg" href="tambahbuku.php">Tambah Data</a></center>

<br/><br/>

            <table class="table table-bordered table-light">
                    <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Buku</th>
                        <th scope="col">Pengarang</th>
                        <th scope="col">Penerbit</th>
                        <th scope="col">File</th>
                        <th scope="col">Aksi</th>
                    </tr>
                    </thead>
                    <?php 
            $i=1;
            foreach ($buku as $b) :?>
    <tbody>
             <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td><?= $b["nama_buku"]; ?></td>
                        <td><?= $b["pengarang"]; ?></td>
                        <td><?= $b["penerbit"]; ?></td>
                        <td><?= $b["file"]; ?></td>
                        <td>
                            <a href="ubahbuku.php?id=<?=$b["id"]; ?>" class="btn btn-primary text-light">Ubah</a> - 
                            <a href="hapusbuku.php?id=<?=$b["id"]; ?>" onclick="return confirm('Hapus?');" class="btn btn-danger text-light">Hapus</a> - 
                            <a href="hapusbuku.php?id=<?=$b["id"]; ?>" onclick="return confirm('Hapus?');" class="btn btn-success text-light">Download</a> 
                        </td>
             </tr>   

<?php
        $i++;
         endforeach;
    ?>
    </tbody>
            </table>
      
           
                </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
 </body>
</html>