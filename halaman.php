<?php
include "koneksi.php";

if (isset($_GET['hal'])) {
    $halaman = $_GET['hal'];
} else {
    $halaman = 'ajh-hak11';
}

switch ($halaman) {
    case 'dashboard':
        include "halaman/dashboard.php";
        break;
    case 'reset_password':
        include "halaman/reset_password.php";
        break;
    case 'ldp_create':
        include "halaman/ldp_create.php";
        break;
    case 'ldp_draft':
        include "halaman/ldp_draft.php";
        break;
    case 'ldp_status':
        include "halaman/ldp_status.php";
        break;
    case 'service_info':
        include "halaman/service_info.php";
        break;

    default:
        include "halaman/dashboard.php";
        break;
}
?>