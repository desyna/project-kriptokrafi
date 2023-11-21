<?php
include "config.php";
$comment = $_POST['comment'];

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
$rot13 = Rot13($comment);
//echo $rot13;


$cipher = "AES-256-CBC";
$secret = "12345678901234567890123456789012";
$option = 0;
$iv = str_repeat("0", openssl_cipher_iv_length($cipher));

$ciphertext = openssl_encrypt($rot13, $cipher, $secret, $option, $iv);


//echo $ciphertext;

// masukin data ke database
$query = mysqli_query($connection, "INSERT INTO kritik VALUES ('', '$ciphertext')") or die(mysqli_error($connection));

if ($query) {
    echo "
            <script>
                alert('Kritik dan saran telah terkirim. Terima kasih atas kepedulian Anda.');
                document.location.href = 'homepage.php';
            </script>
        ";
} else {
    echo "proses gagal";
}





// $cek2 = openssl_decrypt($cek, $cipher, $secret, $option, $iv);
// echo $cek2;

// function Rot132($cek2){
//     for($i=0; $i < strlen($cek2); $i++){
//         $c = ord($cek2[$i]);

//         if($c >= ord('n') & $c <= ord('z') | $c >= ord('N') & $c <= ord('Z')){
//         $c -= 13;
//         }elseif($c >= ord('a') & $c <= ord('m') | $c >= ord('A') & $c <= ord('M')){
//         $c += 13;
//         }
//         $cek2[$i] = chr($c);
//     }

//     return $cek2;
// }
// $final = Rot132($cek2);
// echo $final;
