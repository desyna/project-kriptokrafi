<?php
include "config.php";
//include('function.php');
session_start();
// semisal belum login, langsung masuk ke index.php
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

$comment = $_POST['comment'];
$gambar = upload();

// $shiftAmount = 3;
// $cipher = encryptCaesar($comment, $shiftAmount);

$rot13 = Rot13($comment);

$cipher = "AES-256-CBC";
$secret = "12345678901234567890123456789012";
$option = 0;
$iv = str_repeat("0", openssl_cipher_iv_length($cipher));

$ciphertext = openssl_encrypt($rot13, $cipher, $secret, $option, $iv);


if ($gambar) {
    // masukin data ke database
    $query = mysqli_query($connection, "INSERT INTO review VALUES ('', '$ciphertext', '$gambar')") or die(mysqli_error($connection));

    if ($query) {
        echo "
            <script>
                alert('Review telah terkirim. Terima kasih atas kepedulian Anda.');
                document.location.href = 'review.php';                
            </script> 
        ";
    } else {
        echo "proses gagal";
    }
}

function upload()
{
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // cek apakah ada gambar yang diupload
    if ($error === 4) {
        echo "
                <script>
                    alert('Gambar Belum Diinputkan!');
                    document.location.href = 'review.php';
                </script>
            ";
        return false;
    }

    // cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    // adakah sebuah string dalam sebuah array
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "
                <script>
                    alert('Upload gagal, gunakan format jpg untuk mengupload!');
                    document.location.href = 'review.php';
                </script>
            ";
        return false;
    }
    // jika ukuran terlalu besar
    if ($ukuranFile > 10000000) {
        echo "
				<script>
					alert('Ukuran Gambar Terlalu Besar!');
					document.location.href = 'review.php';
				</script>
			";
        return false;
    }
    $namaFileBaru = encrypt($tmpName);

    move_uploaded_file($tmpName, 'assets/img/' . $namaFileBaru . '.' . $ekstensiGambar);
    return $namaFileBaru;
}
function encrypt($data)
{
    $key = "coba";
    $ivlen = openssl_cipher_iv_length($cipher = "AES-256-CBC");
    $iv = openssl_random_pseudo_bytes($ivlen);
    $encrypted = openssl_encrypt($data, 'AES-256-CBC', $key, 0, $iv);
    return base64_encode($encrypted . '::' . $iv);
}

function Rot13($comment)
{
    for ($i = 0; $i < strlen($comment); $i++) {
        $c = ord($comment[$i]);

        if ($c >= ord('n') & $c <= ord('z') | $c >= ord('N') & $c <= ord('Z')) {
            $c -= 13;
        } elseif ($c >= ord('a') & $c <= ord('m') | $c >= ord('A') & $c <= ord('M')) {
            $c += 13;
        }
        $comment[$i] = chr($c);
    }

    return $comment;
}
