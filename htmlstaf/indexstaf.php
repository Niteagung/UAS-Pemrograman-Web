<?php
 require 'function.php';
 require 'cek.php';


//get data
 //mengambil jumlah data jenis
 $get1 = mysqli_query($conn, "SELECT * FROM jenis");
 $hitungjenis = mysqli_num_rows($get1); //menghitung seluruh kolom

 //mengambil jumlah data merek
 $get2 = mysqli_query($conn, "SELECT * FROM merek");
 $hitungmerek = mysqli_num_rows($get2); //menghitung seluruh kolom

 //mengambil jumlah data barang
 $get3 = mysqli_query($conn, "SELECT * FROM barang");
 $hitungbarang = mysqli_num_rows($get3); //menghitung seluruh kolom

 //mengambil jumlah data barang masuk
 $get4 = mysqli_query($conn, "SELECT * FROM masuk");
 $hitungbarangmasuk = mysqli_num_rows($get4); //menghitung seluruh kolom

 //mengambil jumlah data barang keluar
 $get5 = mysqli_query($conn, "SELECT * FROM keluar");
 $hitungbarangkeluar = mysqli_num_rows($get5); //menghitung seluruh kolom

 //mengambil jumlah data akun
 $get6 = mysqli_query($conn, "SELECT * FROM akun");
 $hitungbarangakun = mysqli_num_rows($get6); //menghitung seluruh kolom

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- start: Icons -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
    <!-- end: Icons -->
    <!-- start: css -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- end: css -->
    <title>Ventari - Blank Page</title>
</head>


<body>
    <!-- start: sidebar -->
    <div class="sidebar position-fixed top-0 start-0 bottom-0 bg-white border-end"> <!-- bg-light border-end lihat perbedaan -->
        <div class="d-flex align items-center p-3"> <!-- p-3 lihat perbedaan -->
            <a href="#" class="sidebar-logo text-uppercase fw-bold text-decoration-none text-indigo fs-4">Stockpro</a> <!-- fs-4 mengubah ukuran font dari fs-1 hingga fs-5 -->
        </div>
        <ul class="sidebar-menu p-3 m-0 mb-0"> <!--  p-3 m-0 mb-0 mengatur letak menu di dalam sidebar  -->
        <li class="sidebar-menu-item active">
                <a class="nav-link" href="indexuser.php">
                    <i class="ri-dashboard-line sidebar-menu-item-icon"></i>
                    Dashboard
                </a>
            </li>
            <li class="sidebar-menu-divider mt-3 mb-1 text-uppercase">Main</li> <!-- mt-3 mb-1 mengatur jarak dengan menu diatas dan bawah; text-uppercase membuat text menjadi kapital -->
            <li class="sidebar-menu-item has-dropdown">
                <a href="#">
                    <i class="ri-pages-line sidebar-menu-item-icon"></i>
                    Master Barang
                    <i class="ri-arrow-down-s-line sidebar-menu-item-accordion ms-auto"></i> <!-- ms-auto mengatur jarak icon secara otomatis dengan text menu -->
                </a>
                <ul class="sidebar-dropdown-menu">
                    <li class="sidebar-dropdown-menu-item">
                        <a class="nav-link" href="jenisuser.php">
                            Jenis
                        </a>
                    </li>
                    <li class="sidebar-dropdown-menu-item">
                        <a class="nav-link" href="merekuser.php">
                            Merek
                        
                        </a>
                        
                    </li>
                    <li class="sidebar-dropdown-menu-item">
                        <a class="nav-link" href="baranguser.php">
                            Barang
                        </a>
                    </li>
                </ul>

                <a href="#">
                    <i class="ri-pages-line sidebar-menu-item-icon"></i>
                    Transaksi
                    <i class="ri-arrow-down-s-line sidebar-menu-item-accordion ms-auto"></i> <!-- ms-auto mengatur jarak icon secara otomatis dengan text menu -->
                </a>
                <ul class="sidebar-dropdown-menu">
                    <li class="sidebar-dropdown-menu-item">
                        <a class="nav-link" href="masukuser.php">
                            Barang Masuk
                        </a>
                    </li>
                    <li class="sidebar-dropdown-menu-item">
                        <a class="nav-link" href="keluaruser.php">
                            Barang Keluar
                        </a>
                    </li>
                </ul>  

                <li class="sidebar-menu-divider mt-3 mb-1 text-uppercase">OTHER</li> <!-- mt-3 mb-1 mengatur jarak dengan menu diatas dan bawah; text-uppercase membuat text menjadi kapital -->
               <li class="sidebar-menu-item">
                    <a class="nav-link" href="logout.php">
                        <i class="ri-pages-line sidebar-menu-item-icon"></i>
                        Logout
                        <i class=" sidebar-menu-item-accordion ms-auto"></i> <!-- ms-auto mengatur jarak icon secara otomatis dengan text menu -->
                    </a>
                </li>
            </li>
        </ul>
        
        
    </div>
    <!-- end: sidebar -->

    <!-- start: Main -->
    <main class="bg-light">
        <div class="p-2">
            <!-- start: Navbar -->
            <nav class="px-3 py-2 bg-white rounded shadow">
                <h class="fw-bold mb-0 ">Dashboard</h>
            </nav> 
             <!-- end: Navbar -->  

             <!-- start: Content --> 
                <div class="py-4">
                    <!-- start: Summary -->
                    <div class="row g-2">
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="bg-white p-3 rounded shadow-sm d-flex justify-content-between">
                                <div>
                                    <div>Jenis Barang</div>
                                </div>
                                <h3><?=$hitungjenis;?></h3>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="bg-white p-3 rounded shadow-sm d-flex justify-content-between">
                                <div>
                                    <div>Merek Barang</div>
                                </div>
                                <h3><?=$hitungmerek;?></h3>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="bg-white p-3 rounded shadow-sm d-flex justify-content-between">
                                <div>
                                    <div>Jumlah Barang</div>
                                </div>
                                <h3><?=$hitungbarang;?></h3>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="bg-white p-3 rounded shadow-sm d-flex justify-content-between">
                                <div>
                                    <div>Barang Masuk</div>
                                </div>
                                <h3><?=$hitungbarangmasuk;?></h3>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="bg-white p-3 rounded shadow-sm d-flex justify-content-between">
                                <div>
                                    <div>Barang Keluar</div>
                                </div>
                                <h3><?=$hitungbarangkeluar;?></h3>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="bg-white p-3 rounded shadow-sm d-flex justify-content-between">
                                <div>
                                    <div>User</div>
                                </div>
                                <h3><?=$hitungbarangakun;?></h3>
                            </div>
                        </div>
            
                        
                        
                    </div>
                    <!-- end: Summary -->
                </div>
             <!-- end: Content --> 
        </div>
    </main>
    <!-- end: Main -->
    

    <!-- start: JS -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/script.js"></script>
    <!-- end: JS -->  
</body>
</html>
