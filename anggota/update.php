<?php

//include koneksi database
include('../database/koneksi.php');

//get data dari form
$id_anggota    = $_POST['id_anggota'];
$nama        = $_POST['nama'];
$alamat       = $_POST['alamat'];
$no_telpon         = $_POST['no_telpon'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE anggota SET nama = '$nama', alamat = '$alamat', no_telpon = '$no_telpon' WHERE id_anggota = '$id_anggota'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: index_2.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>