<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Homepage</title>
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
                    document.location.href = 'index.php';
                </script>
            ";
  }
  ?>
  <section class="h-100 w-100 bg-white" style="box-sizing: border-box">

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
              <a class="nav-link px-md-4 active" aria-current="page" href="homepage.php">Home</a>
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
              <a class="nav-link px-md-4" href="review.php">Review</a>
            </li>
          </ul>
          <div class="d-flex">
            <a class="btn btn-get-started btn-get-started-blue text-white" href="logout.php">Logout</a>
          </div>
        </div>
      </div>
    </nav>
  </section>
  <section class="h-100 w-100" style="
				box-sizing: border-box;
				position: relative;
				background-color: #FAFCFF;
			">
    
    <div class="header-3-3 container-xxl mx-auto p-0 position-relative" style="font-family: 'Poppins', sans-serif">

      <div class="hr">
        <hr style="
							border-color: #F4F4F4;
							background-color: #F4F4F4;
							opacity: 1;
							margin: 0 !important;
						" />
      </div>

      <div>
        <div class="mx-auto d-flex flex-lg-row flex-column hero">
          <!-- Left Column -->
          <div class="left-column flex-lg-grow-1 d-flex flex-column align-items-lg-start text-lg-start align-items-center text-center">
            <h1 class="title-text-big">
              DeLima<br class="d-lg-block d-none" />
              <span style="color: #4E91F9">CustomerService</span><br class="d-lg-block d-none" />

            </h1>
            <p class="text-caption">
              Di DeLima, kami mengundang Anda untuk merasakan pengalaman kuliner yang tak terlupakan. Dengan suasana yang hangat dan ramah, restoran kami menjadi tempat ideal untuk berkumpul bersama keluarga, teman, atau pasangan.
              <br class="d-sm-block d-none" />
              Kami berkomitmen untuk selalu memberikan hidangan terbaik untuk seluruh pelanggan Delima.
            </p>

          </div>

          <!-- Right Column -->
          <div class="right-column d-flex justify-content-center justify-content-lg-start text-center pe-0">
            <img class="position-absolute d-lg-block d-none hero-right" style="width: 450px" src="assets/img/logo.png" alt="logo" />

          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>