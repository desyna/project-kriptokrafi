<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>

    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/style.css" />

    <style>
        .content {
            background-image: url('assets/img/back2.jfif');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;

        }
    </style>
</head>

<body class="content">
    <div class="formulir container">
        <div class="col align-self-center">
            <h1 class="judul text-center fw-bold">DAFTAR</h1>
            <form method="POST" action="cekdaftar.php">
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" class="form-control" placeholder="Masukkan Username" name="username">
                </div>

                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Masukkan password" name="password">
                </div>
                <center>
                    <button type="submit" class="btn btn-primary">Daftar</button> <br>
                </center>
            </form>
            <br>
            <center>
                <p class="putih">Sudah punya akun? <a href="index.php" class="putih fw-bold">login</a></p>
            </center>
        </div>
    </div>

    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>