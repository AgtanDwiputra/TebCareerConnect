<?php
session_start();
include '../koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($koneksi,"SELECT * FROM member WHERE username='$username' and password='$password'");
$cek = mysqli_num_rows($login);

if($cek > 0){
    $data = mysqli_fetch_assoc($login);

    if($data){
        $_SESSION['username'] = $username;
        echo 
        '<script type="text/javascript">
        window.alert("Login Berhasil");window.location.href = "../homeuser.php";
        </script>';
    }else{
        echo 
        '<script type="text/javascript">
        window.alert("Login Gagal, Terdapat Username Atau Password Yang Salah");window.location.href = "../login.php";
        </script>';
    } 
}else{
    echo 
    '<script type="text/javascript">
    window.alert("Login Gagal, Terdapat Username Atau Password Yang Salah");window.location.href = "../login.php";
    </script>';
}

?>