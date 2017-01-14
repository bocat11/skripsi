<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

include('../koneksi.php');
$query = "SELECT * from login where username='$username' AND password='$password' ";
$login = mysqli_query($konek,$query);
$ketemu = mysqli_num_rows($login);
$data = mysqli_fetch_array($login);

if ($ketemu > 0 ) {
    $_SESSION['errorlogin'] = false;
    $_SESSION['id_user'] = $data['id'];
    $_SESSION['name'] = $data['name'];
    $_SESSION['avatar'] = $data['avatar'];
    $_SESSION['username'] = $data['username'];
    $_SESSION['level'] = $data['level'];
    header('Location: ../index.php?hal=dashboard');
} else {
    $_SESSION['errorlogin'] = true;
    header('Location: ../login.php');
}
?>