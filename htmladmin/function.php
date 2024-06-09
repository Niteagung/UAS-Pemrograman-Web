<?php
session_start();
// Membuat koneksi ke database
$conn = mysqli_connect("localhost","root","","ventari");

// ------------------------------------------  Fungsi Menambah Data ----------------------------
 // Menambah akun baru
if(isset($_POST['addnewuser'])){
   $username = $_POST['username'];
   $email = $_POST['email'];
   $passwordakun = $_POST['passwordakun'];

   $addtotable = mysqli_query($conn, "INSERT INTO akun (username, email, passwordakun) VALUES ('$username', '$email', '$passwordakun')");
   if($addtotable){
      header('location:akun.php');
   }else{
      echo 'Gagal';
      header('location:akun.php');
   }
} 

// Menambah jenis baru
if(isset($_POST['addnewjenis'])){
   $namajenis = $_POST['namajenis'];
   $keterangan = $_POST['keterangan'];

   $addtotable = mysqli_query($conn, "INSERT INTO jenis (namajenis, keterangan) VALUES ('$namajenis','$keterangan')");
   if($addtotable){
      header('location:jenis.php');
   }else{
      echo 'Gagal';
      header('location:jenis.php');
   }
} 

//Menambah merek baru
if(isset($_POST['addnewmerek'])){
   $namajenismerek = $_POST['namajenismerek'];
   $namamerek = $_POST['namamerek'];
   $keteranganmerek = $_POST['keteranganmerek'];

   $idjenismerek = mysqli_query($conn, "SELECT * FROM jenis WHERE idjenis = '$namajenismerek'" );
   $ambiljenismerek = mysqli_fetch_array($idjenismerek);
   
   $addtomasukmerek = mysqli_query($conn, "INSERT INTO merek (idjenis, namamerek, keteranganmerek) VALUES ('$namajenismerek', '$namamerek','$keteranganmerek')");
   if($addtomasukmerek){
      header('location:merek.php');
   }else{
      echo 'Gagal';
      header('location:merek.php');
   }
}

//Menambah barang baru
if(isset($_POST['addnewbarang'])){
   $namajenisbarang = $_POST['namajenisbarang'];
   $namamerekbarang = $_POST['namamerekbarang'];
   $namabarang = $_POST['namabarang'];
   $keteranganbarang = $_POST['keteranganbarang'];
   $stok = $_POST['stok'];

   $cekidjenis = mysqli_query($conn, "SELECT * FROM jenis WHERE idjenis = '$namajenisbarang'" );
   $ambilidjenis = mysqli_fetch_array($cekidjenis);

   $jenisbarang = $ambilidjenis['namajenis'];

   $cekidmerek = mysqli_query($conn, "SELECT * FROM merek WHERE idmerek = '$namamerekbarang'" );
   $ambilidmerek = mysqli_fetch_array($cekidmerek);

   $merekbarang = $ambilidmerek['namamerek'];

   $addtomasukbarang = mysqli_query($conn, "INSERT INTO barang (idjenis, idmerek, jenisbarang, merekbarang, namabarang, keteranganbarang, stok) VALUES ('$namajenisbarang', '$namamerekbarang', '$jenisbarang', '$merekbarang ', '$namabarang', '$keteranganbarang', '$stok')");
   if($addtomasukbarang){
      header('location:barang.php');
   }else{
      echo 'Gagal';
      header('location:barang.php');
   }
}

 //Menambah barang masuk
 if(isset($_POST['barangmasuk'])){
   $namajenismasuk = $_POST['namajenismasuk'];
   $namamerekmasuk = $_POST['namamerekmasuk'];
   $namabarangmasuk = $_POST['namabarangmasuk'];
   $keteranganmasuk = $_POST['keteranganmasuk'];
   $jumlahmasuk = $_POST['jumlahmasuk'];

   $cekstocksekarang = mysqli_query($conn, "SELECT * FROM barang WHERE idbarang = '$namabarangmasuk'" );
   $ambildatanya = mysqli_fetch_array($cekstocksekarang);

   $stocksekarang = $ambildatanya['stok'];
   $tambahkanstocksekarangdenganjumlahmasuk = $stocksekarang + $jumlahmasuk;



   $cekidjenis = mysqli_query($conn, "SELECT * FROM jenis WHERE idjenis = '$namajenismasuk'" );
   $ambilidjenis = mysqli_fetch_array($cekidjenis);
   $jenismasuk = $ambilidjenis['namajenis'];

   $cekidmerek = mysqli_query($conn, "SELECT * FROM merek WHERE idmerek = '$namamerekmasuk'" );
   $ambilidmerek = mysqli_fetch_array($cekidmerek);
   $merekmasuk = $ambilidmerek['namamerek'];

   $cekidbarang = mysqli_query($conn, "SELECT * FROM barang WHERE idbarang = '$namabarangmasuk'" );
   $ambilidbarang = mysqli_fetch_array($cekidbarang);
   $barangmasuk = $ambilidbarang['namabarang'];


   $addtomasuk = mysqli_query($conn, "INSERT INTO masuk (idjenis, idmerek, idbarang, jenismasuk, merekmasuk, barangmasuk, keteranganmasuk, jumlahmasuk) VALUES ('$namajenismasuk', '$namamerekmasuk', '$namabarangmasuk', '$jenismasuk', '$merekmasuk', '$barangmasuk', '$keteranganmasuk','$jumlahmasuk')");
   $updatestockmasuk = mysqli_query($conn, "UPDATE barang SET stok = '$tambahkanstocksekarangdenganjumlahmasuk' WHERE idbarang = '$namabarangmasuk'");
   if($addtomasuk&&$updatestockmasuk){
      header('location:masuk.php');
   }else{
      echo 'Gagal';
      header('location:masuk.php');
   }
}

if(isset($_POST['barangkeluar'])){
   $namajeniskeluar = $_POST['namajeniskeluar'];
   $namamerekkeluar= $_POST['namamerekkeluar'];
   $namabarangkeluar= $_POST['namabarangkeluar'];
   $keterangankeluar= $_POST['keterangankeluar'];
   $jumlahkeluar= $_POST['jumlahkeluar'];

   $cekstocksekarang = mysqli_query($conn, "SELECT * FROM barang WHERE idbarang = '$namabarangkeluar'" );
   $ambildatanya = mysqli_fetch_array($cekstocksekarang);

   $stocksekarang = $ambildatanya['stok'];
   $tambahkanstocksekarangdenganjumlahkeluar = $stocksekarang - $jumlahkeluar;


   $cekidjenis = mysqli_query($conn, "SELECT * FROM jenis WHERE idjenis = '$namajeniskeluar'" );
   $ambilidjenis = mysqli_fetch_array($cekidjenis);
   $jeniskeluar = $ambilidjenis['namajenis'];

   $cekidmerek = mysqli_query($conn, "SELECT * FROM merek WHERE idmerek = '$namamerekkeluar'" );
   $ambilidmerek = mysqli_fetch_array($cekidmerek);
   $merekkeluar = $ambilidmerek['namamerek'];

   $cekidbarang = mysqli_query($conn, "SELECT * FROM barang WHERE idbarang = '$namabarangkeluar'" );
   $ambilidbarang = mysqli_fetch_array($cekidbarang);
   $barangkeluar = $ambilidbarang['namabarang'];


   $addtokeluar = mysqli_query($conn, "INSERT INTO keluar (idjenis, idmerek, idbarang, jeniskeluar, merekkeluar, barangkeluar, keterangankeluar, jumlahkeluar) VALUES ('$namajeniskeluar', '$namamerekkeluar', '$namabarangkeluar', '$jeniskeluar', '$merekkeluar', '$barangkeluar', '$keterangankeluar','$jumlahkeluar')");
   $updatestockkeluar = mysqli_query($conn, "UPDATE barang SET stok = '$tambahkanstocksekarangdenganjumlahkeluar' WHERE idbarang = '$namabarangkeluar'");
   if($addtokeluar&&$updatestockkeluar){
      header('location:keluar.php');
   }else{
      echo 'Gagal';
      header('location:keluar.php');
   }
}
// ------------------------------------------  Fungsi Menghapus Data ----------------------------
 //Menghapus akun pengguna
 if(isset($_POST['hapususer'])){
   $iduser = $_POST['iduser'];

   $hapus = mysqli_query($conn, "DELETE FROM akun WHERE iduser='$iduser'");
   if($hapus){
      header('location:akun.php');
   }else{
      echo 'Gagal';
      header('location:akun.php');
   }

}

//Menghapus bjenis dari jenis
if(isset($_POST['hapusjenis'])){
   $idjenis = $_POST['idjenis'];

   $hapus = mysqli_query($conn, "DELETE FROM jenis WHERE idjenis='$idjenis'");
   if($hapus){
      header('location:jenis.php');
   }else{
      echo 'Gagal';
      header('location:jenis.php');
   }

}

 //Menghapus merek
 if(isset($_POST['hapusmerek'])){
   $idmerek = $_POST['idmerek'];

   $hapus = mysqli_query($conn, "DELETE FROM merek WHERE idmerek='$idmerek'");
   if($hapus){
      header('location:merek.php');
   }else{
      echo 'Gagal';
      header('location:merek.php');
   }

}

 //Menghapus barang
 if(isset($_POST['hapusbarang'])){
   $idbarang = $_POST['idbarang'];

   $hapus = mysqli_query($conn, "DELETE FROM barang WHERE idbarang='$idbarang'");
   if($hapus){
      header('location:barang.php');
   }else{
      echo 'Gagal';
      header('location:barang.php');
   }

}

//Menghapus barang masuk
if(isset($_POST['hapusbarangmasuk'])){
   $idmasuk = $_POST['idmasuk'];
   $idbarangmasuk = $_POST['idbarang'];
   $jumlahmasuk = $_POST['jumlahmasuk'];

   $cekstocksekarang = mysqli_query($conn, "SELECT * FROM barang WHERE idbarang = '$idbarangmasuk'" );
   $ambildatastok = mysqli_fetch_array($cekstocksekarang);

   $stoksekarang = $ambildatastok['stok'];
   $updatestok = $stoksekarang - $jumlahmasuk;

   $hapusmasuk = mysqli_query($conn, "DELETE FROM masuk WHERE idmasuk='$idmasuk'");
   $updatebarangsetelahhapusmasuk = mysqli_query($conn, "UPDATE barang SET stok = $updatestok WHERE idbarang='$idbarangmasuk'");
   if($hapusmasuk&&$updatebarangsetelahhapusmasuk){
      header('location:masuk.php');
   }else{
      echo 'Gagal';
      header('location:masuk.php');
   }

}

//Menghapus barang keluar
if(isset($_POST['hapusbarangkeluar'])){
   $idkeluar = $_POST['idkeluar'];
   $idbarangkeluar = $_POST['idbarang'];
   $jumlahkeluar = $_POST['jumlahkeluar'];

   $cekstocksekarang = mysqli_query($conn, "SELECT * FROM barang WHERE idbarang = '$idbarangkeluar'" );
   $ambildatastok = mysqli_fetch_array($cekstocksekarang);

   $stoksekarang = $ambildatastok['stok'];
   $updatestok = $stoksekarang + $jumlahkeluar;

   $hapuskeluar = mysqli_query($conn, "DELETE FROM keluar WHERE idkeluar='$idkeluar'");
   $updatebarangsetelahhapuskeluar = mysqli_query($conn, "UPDATE barang SET stok = $updatestok WHERE idbarang='$idbarangkeluar'");
   if($hapuskeluar&&$updatebarangsetelahhapuskeluar){
      header('location:keluar.php');
   }else{
      echo 'Gagal';
      header('location:keluar.php');
   }

}

// ------------------------------------------  Fungsi Mengupdate Data ----------------------------
//Update info akun pengguna
if(isset($_POST['updateuser'])){
   // Mengambil Inputan
         $iduser = $_POST['iduser'];
         $username = $_POST['username'];
         $email= $_POST['email'];
         $passwordakun= $_POST['passwordakun'];
   
      $update = mysqli_query($conn, "UPDATE akun SET username='$username', email='$email', passwordakun='$passwordakun' WHERE iduser='$iduser'");
      if($update){
         header('location:akun.php');
      }else{
         echo 'Gagal';
         header('location:akun.php');
      }
   }
   
//Update info jenis
if(isset($_POST['updatejenis'])){
   // Mengambil Inputan
         $idjenis = $_POST['idjenis'];
         $namajenis = $_POST['namajenis'];
         $keterangan = $_POST['keterangan'];
   
      $update = mysqli_query($conn, "UPDATE jenis SET namajenis='$namajenis', keterangan='$keterangan' WHERE idjenis='$idjenis'");
      if($update){
         header('location:jenis.php');
      }else{
         echo 'Gagal';
         header('location:jenis.php');
      }
   } 

   //Update merek
if(isset($_POST['updatemerek'])){
   // Mengambil Inputan
         $idmerek = $_POST['idmerek'];
         $namamerek = $_POST['namamerek'];
         $keteranganmerek = $_POST['keteranganmerek'];
   
      $update = mysqli_query($conn, "UPDATE merek SET namamerek='$namamerek', keteranganmerek='$keteranganmerek' WHERE idmerek='$idmerek'");
      if($update){
         header('location:merek.php');
      }else{
         echo 'Gagal';
         header('location:merek.php');
      }
   }

    //Update barang
if(isset($_POST['updatebarang'])){
   // Mengambil Inputan
         $idbarang = $_POST['idbarang'];
         $namabarang = $_POST['namabarang'];
         $keteranganbarang = $_POST['keteranganbarang'];
         $stok = $_POST['stok'];
   
      $update = mysqli_query($conn, "UPDATE barang SET namabarang='$namabarang', keteranganbarang='$keteranganbarang', stok ='$stok' WHERE idbarang='$idbarang'");
      if($update){
         header('location:barang.php');
      }else{
         echo 'Gagal';
         header('location:barang.php');
      }
   }

   //Mengubah data barang masuk
if(isset($_POST['updatebarangmasuk'])){
   $idbarang = $_POST['idbarang'];
   $idmasuk= $_POST['idmasuk'];
   $keteranganmasuk= $_POST['keteranganmasuk'];
   $jumlahmasuk = $_POST['jumlahmasuk'];


   $lihatstock = mysqli_query($conn, "SELECT * FROM barang WHERE idbarang='$idbarang'"); 
   $stocknya = mysqli_fetch_array($lihatstock);
   $stocktetap = $stocknya['stok'];
   $stocksekarang = $stocknya['stok'];

   $jumlahsekarang = mysqli_query($conn, "SELECT * FROM masuk WHERE idmasuk='$idmasuk'");
   $jumlahnya = mysqli_fetch_array($jumlahsekarang);
   $jumlahsekarang = $jumlahnya['jumlah'];


   if($jumlahmasuk>$jumlahsekarang){
     $selisih = $jumlahmasuk +  $jumlahsekarang;
     $kurangin = $stocksekarang + $selisih;
     $kurangistoknya = mysqli_query($conn, "UPDATE barang  SET stok='$kurangin' WHERE idbarang = '$idbarang'");
     $updatenya = mysqli_query($conn, "UPDATE masuk SET jumlahmasuk='$jumlahmasuk', keteranganmasuk='$keteranganmasuk' WHERE idmasuk = '$idmasuk'");
     if($kurangistoknya&&$updatenya){
      header('location:masuk.php');
         }else{
            echo 'Gagal';
            header('location:masuk.php');
         }
   }else{
     $selisih = $jumlahsekarang - $jumlahmasuk;
     $kurangin = $stocksekarang - $selisih;
     $kurangistoknya = mysqli_query($conn, "UPDATE barang SET stok='$kurangin' WHERE idbarang = '$idbarang'");
     $updatenya = mysqli_query($conn, "UPDATE masuk SET jumlahmasuk='$jumlahmasuk', keterangan='$keteranganmasuk' WHERE idmasuk = '$idmasuk'");
     if($kurangistoknya&&$updatenya){
      header('location:masuk.php');
         }else{
            echo 'Gagal';
            header('location:masuk.php');
         }
   }
}
 ?>
