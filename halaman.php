<?php
require "koneksi.php";

if (isset($_GET['hal'])) {
    $halaman = $_GET['hal'];
} else {
    $halaman = 'ajh-hak11';
}

switch ($halaman) {
    case 'rincian':
        include "halaman/rincian.php";
        break;
    case 'lowongan':
        include "halaman/lowongan.php";
        break;
    case 'tambah-lowongan':
        include "halaman/tambah_lowongan.php";
        break;
    default:
        include "halaman/dashboard.php";
        break;
}
?>