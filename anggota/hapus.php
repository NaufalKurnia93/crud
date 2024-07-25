<?php

include('../database/koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM anggota WHERE id_anggota = '$id'";

if($connection->query($query)) {
    header("location: index_2.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>