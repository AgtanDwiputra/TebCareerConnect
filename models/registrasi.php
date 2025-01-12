
<?php
session_start();
include '../koneksi.php';
$username = $_POST["username"];
$password = $_POST["password"];
$nama = $_POST["nama"];
$npm = $_POST["npm"];
$email = $_POST["email"];

$query_sql = "INSERT INTO member VALUES ('','$username', '$password', '$nama', '$npm', '$email')";

if (mysqli_query($koneksi, $query_sql)) {
    echo 
        '<script type="text/javascript">
        window.alert("Registrasi Berhasil");window.location.href = "../index.php";
        </script>';
} else {
    echo 
    '<script type="text/javascript">
    window.alert("Registrasi Gagal");window.location.href = "../index.php";
    </script>'.mysqli_error($koneksi);
}
return mysqli_affected_rows($koneksi);
?>
