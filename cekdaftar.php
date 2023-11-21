<?php
session_start();
include "config.php";

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($connection, "SELECT * FROM account WHERE username='$username'") or die(mysqli_error($connection));

$cek = mysqli_fetch_assoc($query);

if ($cek["username"] != $username) {
    // enkripsi password
    //$password = password_hash($password, PASSWORD_DEFAULT);
    $password = md5($password);

    // masukin data ke database
    $query1 = mysqli_query($connection, "INSERT INTO account VALUES ('','user','$username','$password')") or die(mysqli_error($connection));

    // $cek = mysqli_num_rows($query);

    if ($query1) {
        echo "
            <script>
                alert('Pendaftaran berhasil, silakan login');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "proses gagal";
    }
} else {
    echo "
            <script>
                alert('Pendaftaran gagal, username sudah terdaftar');
                document.location.href = 'regist.php';
            </script>
        ";
}
