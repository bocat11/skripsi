<?php

require "../koneksi.php";
session_start();

$saran = $_POST['saranVal'];
$id_user = $_SESSION['id_user'];

$query = "INSERT INTO saran (id_user,saran) VALUES  ('$id_user','$saran')";
if(mysqli_query($konek,$query)){
    echo "<script type='text/javascript'>alert('Data Berhasil Ditambahkan');</script>";
    echo "<script type='text/javascript'>document.location.href = '../index.php?hal=tambah-saran';</script>";
} else {
    echo $query;
}

