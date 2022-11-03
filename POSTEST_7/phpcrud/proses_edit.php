<?php
include 'koneksi.php';

  $id = $_POST['id'];
  $nama   = $_POST['nama'];
  $email  = $_POST['email'];
  $notelp = $_POST['notelp'];
  $alamat = $_POST['alamat'];
  $pesan  = $_POST['pesan'];
  

  $bukti_pembayaran = $_FILES['bukti_pembayaran']['name'];
  if($bukti_pembayaran != "") {
    $ekstensi_diperbolehkan = array('png','jpg', 'jpeg'); 
    $x = explode('.', $bukti_pembayaran);
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['bukti_pembayaran']['tmp_name'];   
    $angka_acak     = rand(1,999);
    $nama_gambar_baru = $angka_acak.'-'.$bukti_pembayaran;
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
                  move_uploaded_file($file_tmp, 'img/'.$nama_gambar_baru); 
                    $query  = "UPDATE pesan SET nama = '$nama', email = '$email', notelp = '$notelp', alamat = '$alamat', pesan = '$pesan', bukti_pembayaran = '$nama_gambar_baru'";
                    $query .= "WHERE id = '$id'";
                    $result = mysqli_query($koneksi, $query);
                    if(!$result){
                        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
                    } else {
                      echo "<script>alert('Data berhasil diubah.');window.location='index.php';</script>";
                    }
              } else {     
                  echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='tambah.php';</script>";
              }
    } else {
      $query  = "UPDATE pesan SET nama = '$nama', email = '$email', notelp = '$notelp', alamat = '$alamat', pesan = '$pesan'";
      $query .= "WHERE id = '$id'";
      $result = mysqli_query($koneksi, $query);
      if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
      } else {
          echo "<script>alert('Data berhasil diubah.');window.location='index.php';</script>";
      }
    }