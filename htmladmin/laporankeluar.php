<?php
 require 'function.php';
 require 'cek.php';

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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.bootstrap5.css">
        <!-- css export -->
        <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/3.0.2/css/buttons.dataTables.css">
        <!-- end: css -->
        <!-- start: JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.js" type="text/javascript"></script>
        <script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.1/js/dataTables.bootstrap4.min.js" type="text/javascript"></script>
       
        <link href="https://cdn.datatables.net/1.11.1/css/dataTables.bootstrap4.min.css" rel="stylesheet">
       <!-- Script JS Ekspor Tabel -->
       <script> $(document).ready(function(){ 
            $("#datatable").dataTable({
                layout: {
                topStart: {buttons: ['copyHtml5', 'excelHtml5', 'csvHtml5', 'pdfHtml5']}
            }
            });
        });
        </script>
        <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
        <script src="https://cdn.datatables.net/buttons/3.0.2/js/dataTables.buttons.js"></script>
        <script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.dataTables.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/3.0.2/js/dataTables.buttons.js"></script>
        <script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.dataTables.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.html5.min.js"></script>

        <!-- start: JS -->
        <!-- start: JS -->
        
        <script src="../assets/js/bootstrap.min.js"></script>
        <script src="../assets/js/script.js"></script>
        <!-- end: JS --> 
        <title>Table Demo</title>
    </head>

    <body>
         <!-- start: sidebar -->
        <div class="sidebar position-fixed top-0 start-0 bottom-0 bg-white border-end"> <!-- bg-light border-end lihat perbedaan -->
        <div class="d-flex align items-center p-3"> <!-- p-3 lihat perbedaan -->
            <a href="#" class="sidebar-logo text-uppercase fw-bold text-decoration-none text-indigo fs-4">Stockpro</a> <!-- fs-4 mengubah ukuran font dari fs-1 hingga fs-5 -->
        </div>
        <ul class="sidebar-menu p-3 m-0 mb-0"> <!--  p-3 m-0 mb-0 mengatur letak menu di dalam sidebar  -->
            <li class="sidebar-menu-item active">
                <a class="nav-link" href="index.php">
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
                        <a class="nav-link" href="jenis.php">
                            Jenis
                        </a>
                    </li>
                    <li class="sidebar-dropdown-menu-item">
                        <a class="nav-link" href="merek.php">
                            Merek
                        
                        </a>
                        
                    </li>
                    <li class="sidebar-dropdown-menu-item">
                        <a class="nav-link" href="barang.php">
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
                        <a class="nav-link" href="masuk.php">
                            Barang Masuk
                        </a>
                    </li>
                    <li class="sidebar-dropdown-menu-item">
                        <a class="nav-link" href="keluar.php">
                            Barang Keluar
                        </a>
                    </li>
                </ul>

                <a href="#">
                    <i class="ri-pages-line sidebar-menu-item-icon"></i>
                    Laporan
                    <i class="ri-arrow-down-s-line sidebar-menu-item-accordion ms-auto"></i> <!-- ms-auto mengatur jarak icon secara otomatis dengan text menu -->
                </a>
                <ul class="sidebar-dropdown-menu">
                    <li class="sidebar-dropdown-menu-item">
                        <a class="nav-link" href="laporanbarang.php">
                            Laporan Stok Barang
                        </a>
                    </li>
                    <li class="sidebar-dropdown-menu-item">
                        <a class="nav-link" href="laporanmasuk.php">
                            Laporan Barang Masuk
                        </a>
                    </li>
                    <li class="sidebar-dropdown-menu-item">
                        <a class="nav-link" href="laporankeluar.php">
                            Laporan Barang Keluar
                        </a>
                    </li>
                </ul>

                <li class="sidebar-menu-item">
                    <a class="nav-link" href="akun.php">
                        <i class="ri-pages-line sidebar-menu-item-icon"></i>
                        User
                        <i class=" sidebar-menu-item-accordion ms-auto"></i> <!-- ms-auto mengatur jarak icon secara otomatis dengan text menu -->
                    </a>
                </li>
                
                

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
                    <h class="fw-bold mb-0">Laporan - Laporan Barang Keluar</h>
                </nav>  
            </div>
                <!-- end: Navbar -->
            <div class="container">
            <div class="card">
                <!-- Button to Open the Modal -->
                <div class="card-header">
                </div>
                    <div class="card-body">
                    <table id="datatable" class="table table-striped table-bordered">
                    <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Jenis Barang</th>
                                <th>Merek Barang</th>
                                <th>Nama Barang</th>
                                <th>Keterangan</th>
                                <th>Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>                    
                            <?php
                                $ambilsemuadatabarang = mysqli_query($conn, "SELECT * FROM keluar k, barang b WHERE b.idbarang = k.idbarang");
                                while($data = mysqli_fetch_array($ambilsemuadatabarang)){
                                    $idkeluar = $data['idkeluar'];
                                    $idjenis = $data['idjenis'];
                                    $idmerek = $data['idmerek'];
                                    $idbarang = $data['idbarang']; 
                                    $tanggal= $data['tanggalkeluar']; 
                                    $jeniskeluar = $data['jeniskeluar'];
                                    $merekkeluar = $data['merekkeluar'];
                                    $barangkeluar = $data['barangkeluar'];
                                    $jumlahkeluar = $data['jumlahkeluar'];
                                    $keterangankeluar= $data['keterangankeluar'];
                                        
                            ?>
                                <tr>
                                    <td><?=$tanggal;?></td>
                                    <td><?=$jeniskeluar;?></td>
                                    <td><?=$merekkeluar;?></td>
                                    <td><?=$barangkeluar;?></td>
                                    <td><?=$keterangankeluar;?></td>
                                    <td><?=$jumlahkeluar;?></td>
                                </tr>
                            <?php
                                };
                            ?>
                        </tbody>
                    </table>    
                </div>   
            </div> 
            </div>
             <!-- end: Content --> 
        </main>
        <!-- end: Main -->        
    </body>

    <!-- The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
    
                <!-- Modal Header -->
                <div class="modal-header">
                <h4 class="modal-title">Tambah Barang Keluar</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
        
                <!-- Modal body -->
                <form method="post">
                <div class="modal-body">
                    <!-- Field Memilih Jenis -->
                    <select  name="namajeniskeluar" class="form-control">
                        <?php
                            $ambilsemuadatanya = mysqli_query($conn,"SELECT * FROM jenis");
                            while($fetcharray = mysqli_fetch_array($ambilsemuadatanya)){
                                $namajenis = $fetcharray['namajenis'];
                                $keteranganjenis = $fetcharray['keteranganjenis'];
                                $idjenis = $fetcharray['idjenis']     
                        ?>
                        <option value = "<?=$idjenis;?>"><?=$namajenis;?></option>
                        <?php
                            }
                        ?>
                    </select>  
                    <br>
                    <!-- Field Memilih Merek -->
                    <select  name="namamerekkeluar" class="form-control">
                    <option value = "<?=$idjenis;?>"><?=$namajenis;?></option>
                        <?php
                            $ambilsemuadatanya = mysqli_query($conn,"SELECT * FROM merek");
                            while($fetcharray = mysqli_fetch_array($ambilsemuadatanya)){
                                $namamerek = $fetcharray['namamerek'];
                                $keteranganmerek = $fetcharray['keteranganmerek'];
                                $idmerek = $fetcharray['idmerek']     
                        ?>
                        <option value = "<?=$idmerek;?>"><?=$namamerek;?></option>
                        <?php
                            }
                        ?>
                    </select>    
                    <br>
                    <!-- Field Memilih Barang -->
                    <select  name="namabarangkeluar" class="form-control">
                    <option value = "<?=$idjenis;?>"><?=$namajenis;?></option>
                        <?php
                            $ambilsemuadatanya = mysqli_query($conn,"SELECT * FROM barang");
                            while($fetcharray = mysqli_fetch_array($ambilsemuadatanya)){
                                $namabarang = $fetcharray['namabarang'];
                                $keteranganbarang = $fetcharray['keteranganbarang'];
                                $idbarang = $fetcharray['idbarang']     
                        ?>
                        <option value = "<?=$idbarang;?>"><?=$namabarang;?></option>
                        <?php
                            }
                        ?>
                    </select>   
                    
                    <br>    
                    <input type="text" name="keterangankeluar" placeholder="Keterangan Barang" class="form-control" required>
                    <br>
                    <input type="text" name="jumlahkeluar" placeholder="Jumlah" class="form-control" required>
                    <br> 
                    <button type="submit" name="barangkeluar" class="btn btn-primary">Submit</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</html>