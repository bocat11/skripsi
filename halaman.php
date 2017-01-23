<?php
require "koneksi.php";

if (isset($_GET['hal'])) {
    $halaman = $_GET['hal'];
} else {
    $halaman = 'ajh-hak11';
}

switch ($halaman) {
    case 'rincian-alumni':
        include "halaman/rincian_alumni.php";
        break;
    case 'lowongan':
        include "halaman/lowongan.php";
        break;
    case 'tambah-lowongan':
        include "halaman/tambah_lowongan.php";
        break;
    case 'tambah-alumni':
        include "halaman/tambah_alumni.php";
        break;
    case 'grafik-dasar':
        include "halaman/grafik.php";
        break;
    case 'validasi-pertanyaan':
        include "halaman/validasi_pertanyaan.php";
        break;
    case 'validasi-loker':
        include "halaman/validasi_loker.php";
        break;
    case 'isi-questioner':
        include "halaman/isi_questioner.php";
        break;
    case 'data-pekerjaan':
        include "halaman/data_pekerjaan.php";
        break;
    case 'history-lamar-pekerjaan':
        include "halaman/history-lamar-pekerjaan.php";
        break;
    case 'pengalaman':
        include "halaman/pengalaman.php";
        break;
    case 'saran':
        include "halaman/saran.php";
        break;
    case 'master-perusahaan':
        include "halaman/master_perusahaan.php";
        break;
    case 'detail-perusahaan':
        include "halaman/detail_perusahaan.php";
        break;
    case 'tambah-saran':
        include "halaman/tambah_saran.php";
        break;
    case 'detail-info-alumni':
        include "halaman/detail-info-alumni.php";
        break;
    default:
        include "halaman/dashboard.php";
        break;
}
?>