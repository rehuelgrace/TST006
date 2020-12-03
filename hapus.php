<?php

include('config.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM t_profile WHERE id = '$id'";

if($conn->query($query)) {
    header("location: data.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>