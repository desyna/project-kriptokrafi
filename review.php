<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Review</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>
    <?php

    session_start();
    //echo $_SESSION['username'];

    if (empty($_SESSION['username'])) {
        echo "
                    <script>
                        alert('Anda belum login. Silakan login terlebih dahulu.');
                        document.location.href = 'login.php';
                    </script>
                ";
    }
    ?>
    <section class="h-100 w-100 bg-light" style="box-sizing: border-box">

        <nav class="navbar-1-1 navbar navbar-expand-lg navbar-light p-4 px-md-4 mb-3 bg-body" style="font-family: Poppins, sans-serif">
            <div class="container">
                <div>
                    Halo <?php echo $_SESSION['username']; ?>!
                </div>
                <!-- <div>
            <img class="position-absolute d-lg-block d-none hero-right" style="width: 50px;"
                src="assets/img/logo.png"
                alt="logo" />
            </div> -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link px-md-4" href="homepage.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-md-4" href="kontak.php">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-md-4" href="kritik.php">Message</a>
                        </li>
                        <!-- <li class="nav-item">
                <a class="nav-link px-md-4" href="#">Teams</a>
                </li> -->
                        <li class="nav-item">
                            <a class="nav-link px-md-4 active" aria-current="page" href="review.php">Review</a>
                        </li>
                    </ul>
                    <div class="d-flex">
                        <a class="btn btn-get-started btn-get-started-blue text-white" href="logout.php">Logout</a>
                    </div>
                </div>
            </div>
        </nav>

        <center>
            <h1>Review</h1>
            <p>Silahkan tulis testimoni dan review Anda terhadap produk dan pelayanan kami.</p>
        </center>

        <div align="center">
            <form action="enkripsi_review.php" method="POST" enctype="multipart/form-data">
                <textarea name="comment" id="Textarea1" rows="10" cols="50"></textarea> <br>
                <label for="fname">Silakan tambahkan foto (jpg) dan pastikan nama file tidak terdapat simbol</label><br>
                <div class="col-lg-4">
                    <input class="form-control" type="file" id="gambar" name="gambar"><br>
                </div>

                <br>
                <button type="submit" class="btn btn-primary">Kirim</button> <br>

            </form>

        </div>
</body>

</html>