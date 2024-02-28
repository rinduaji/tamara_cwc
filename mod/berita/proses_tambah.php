<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include("../assets/conn.php");
$tgl = date("Y-m-d H:i:s");
	// membuat variabel untuk menampung data dari form
  $news   = $_POST['news'];
  $deskripsi     = $_POST['deskripsi'];
  $upd    = $_POST['upd'];
  $tanggal    = $_POST['tgl'];
  $file = $_FILES['file']['name'];


//cek dulu jika ada gambar news jalankan coding ini
if($file != "") {
  $ekstensi_diperbolehkan = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
  $x = explode('.', $file); //memisahkan nama file dengan ekstensi yang diupload
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['file']['tmp_name'];   
  $angka_acak     = rand(1,999);
  $nama_gambar_baru = $angka_acak.'-'.$file; //menggabungkan angka acak dengan nama file sebenarnya
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
                move_uploaded_file($file_tmp, 'gambar/'.$nama_gambar_baru); //memindah file gambar ke folder gambar
                  // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
                  $query = "INSERT INTO news (news, deskripsi, upd, tgl, file) VALUES ('$news', '$deskripsi', '$upd', '$tanggal', '$nama_gambar_baru')";
                  $result = mysqli_query($koneksi, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    //tampil alert dan akan redirect ke halaman news.php
                    //silahkan ganti news.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');window.location='news.php';</script>";
                  }

            } else {     
             //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='tambah_news.php';</script>";
            }
} else {
   $query = "INSERT INTO produk (news, deskripsi, upd, tgl, file) VALUES ('$news', '$deskripsi', '$upd', '$tanggal', null)";
                  $result = mysqli_query($koneksi, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    //tampil alert dan akan redirect ke halaman news.php
                    //silahkan ganti news.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');window.location='news.php';</script>";
                  }
}
