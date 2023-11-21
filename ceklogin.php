<?php
session_start();
include "config.php";

$username = $_POST['username'];
$password = $_POST['password'];


$query = mysqli_query($connection, "SELECT * FROM account WHERE username='$username'") or die(mysqli_error($connection));

$cek = mysqli_num_rows($query);

if ($cek > 0) {
  $_SESSION['username'] = $username;
  // $_SESSION['password'] = $password;
  $row = mysqli_fetch_assoc($query);
  if ($row['role'] == "admin") {
    //if (password_verify($password, $row['password'])) {
    if (md5($password, $row['password'])) {
      header("location:admin.php");
    } else {
      echo
      "<script>
            alert('Login gagal! Username atau password Anda salah.');
            document.location.href = 'index.php';
        </script>";
    }
  } else {
    if (md5($password, $row['password'])) {
      header("location:homepage.php");
    } else {
      echo
      "<script>
          alert('Login gagal! Username atau password Anda salah.');
          document.location.href = 'index.php';
        </script>";
    }
  }
} else {
  echo
  "<script>
      alert('Login gagal! Username atau password Anda salah.');
      document.location.href = 'index.php';
    </script>";
}
