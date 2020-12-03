<?php

//include koneksi database
include('config.php');

//get data dari form
$id		 = $_POST['id'];
$name    = $_POST['name'];
$email	 = $_POST['email'];
$bday	 = $_POST['birthday'];
$address = $_POST['address'];

//query insert data ke dalam database
$query = "INSERT INTO t_profile (id, name, email, birthday, address) VALUES ('$id', '$name','$email','$bday','$address')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($conn->query($query)) {

    //redirect ke halaman index.php 
    header("location: data.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan! Terdapat anggota dengan email dan tanggal lahir yang sama.";

}

?>