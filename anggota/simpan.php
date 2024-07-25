<?php

//include koneksi database
include('../database/koneksi.php');

//get data dari form
$nama           = $_POST['nama'];
$alamat         = $_POST['alamat'];
$no_telpon      = $_POST['no_telpon'];

//query insert data ke dalam database
$query = "INSERT INTO anggota ( nama, alamat, no_telpon) VALUES ('$nama', '$alamat', '$no_telpon')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index_2.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>