<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="assets/css/style_admin.css" />
    <!-- Boxicons CDN Link -->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <?php

    session_start();
    //echo $_SESSION['username'];

    if (empty($_SESSION['username'])) {
        echo
        "<script>
        alert('Anda belum login. Silakan login terlebih dahulu.');
        document.location.href = 'index.php';
        </script>";
    }
    include "config.php";

    $username = $_SESSION['username'];

    $query = mysqli_query($connection, "SELECT * FROM account WHERE username='$username'") or die(mysqli_error($connection));
    $data = mysqli_fetch_array($query);

    ?>
    <div class="sidebar">
        <div class="logo-details">
            <i class="bx bxl-c-plus-plus icon"></i>
            <div class="logo_name">CodingLab</div>
            <i class="bx bx-menu" id="btn"></i>
        </div>
        <ul class="nav-list">
            <li>
                <i class="bx bx-search"></i>
                <input type="text" placeholder="Search..." />
                <span class="tooltip">Search</span>
            </li>
            <li>
                <a href="admin.php">
                    <i class="bx bx-grid-alt"></i>
                    <span class="links_name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>
            <li>
                <a href="user.php">
                    <i class="bx bx-user"></i>
                    <span class="links_name">User</span>
                </a>
                <span class="tooltip">User</span>
            </li>
            <li>
                <a href="messages.php">
                    <i class="bx bx-chat"></i>
                    <span class="links_name">Messages</span>
                </a>
                <span class="tooltip">Messages</span>
            </li>
            <li class="profile">
                <div class="profile-details">
                    <img src="assets/img/profile.png" alt="profileImg" />
                    <div class="name_job">
                        <div class="name"><?php echo $data['username']; ?></div>
                        <div class="job"><?php echo $data['role']; ?></div>
                    </div>
                </div>
                <a href="logout.php"><i class="bx bx-log-out" id="log_out"></i></a>
            </li>
        </ul>
    </div>

    <section class="home-section">
        <div class="text">Messages</div>
        <div class="container bg-white pb-2" align="center">
            <center>
                <table class="table table-light table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Message</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        function dekripsi_rot13($decrypt1)
                        {
                            for ($i = 0; $i < strlen($decrypt1); $i++) {
                                $c = ord($decrypt1[$i]);

                                if ($c >= ord('n') & $c <= ord('z') | $c >= ord('N') & $c <= ord('Z')) {
                                    $c -= 13;
                                } elseif ($c >= ord('a') & $c <= ord('m') | $c >= ord('A') & $c <= ord('M')) {
                                    $c += 13;
                                }
                                $decrypt1[$i] = chr($c);
                            }

                            return $decrypt1;
                        }
                        include 'config.php';
                        $query = mysqli_query($connection, "SELECT * from kritik");
                        $s = 1;
                        while ($data = mysqli_fetch_array($query)) { ?>

                            <tr>
                                <!-- <th scope="row">1</th> -->
                                <td> <?php echo $s++ ?></td>
                                <td>
                                    <?php
                                    $message = $data['kritik'];

                                    $cipher = "AES-256-CBC";
                                    $secret = "12345678901234567890123456789012";
                                    $option = 0;
                                    $iv = str_repeat("0", openssl_cipher_iv_length($cipher));

                                    $decrypt1 = openssl_decrypt($message, $cipher, $secret, $option, $iv);
                                    //echo $decrypt1;

                                    $final = dekripsi_rot13($decrypt1);
                                    echo $final;
                                    ?>
                                </td>

                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </center>

        </div>
    </section>

    <script src="assets/js/script.js"></script>
</body>

</html>