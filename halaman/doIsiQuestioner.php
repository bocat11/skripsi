<?php
session_start();
include "../koneksi.php";

$id = $_SESSION["id_user"];
$nama_perusahaan = $_POST["nama_perusahaan"];
$status_pekerjaan = $_POST["status_pekerjaan"];
$bidang_pekerjaan = $_POST["bidang_pekerjaan"];
$sub_bidang = $_POST["sub_bidang"];
$materi = $_POST["materi"];
$bidang = $_POST["bidang"];
$organisasi = $_POST["organisasi"];
$ipk = $_POST["ipk"];
$attitude = $_POST["attitude"];
$sql = "INSERT INTO kuesioner(nim, a1, a2, a3, a4, a5, a6, a7, a8, a9)VALUES('$id', '$nama_perusahaan', '$status_pekerjaan', '$bidang_pekerjaan', '$sub_bidang', '$materi', '$bidang', '$organisasi', '$ipk', '$attitude')";
$query = mysqli_query($konek, $sql) or die(mysqli_error($konek));
if ($query) {
		header("location: ../index.php?hal=isi-questioner");
} else {
	echo "Input data gagal";
}
