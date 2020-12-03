<?php

//include koneksi database
include('config.php');

//get data dari form
$id     = $_POST['id'];
$nama   = $_POST['name'];
$alamat = $_POST['address'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE t_profile SET name = '$nama', address = '$alamat' WHERE id='$id'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($conn->query($query)) {
    //redirect ke halaman index.php 
    header("location: data.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>