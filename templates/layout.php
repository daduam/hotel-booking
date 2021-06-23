<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/css/index.css">
  <title><?= $title ?></title>
</head>

<body>
  <!-- <div class="container"> -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <div>
        <a href="/" class="navbar-brand">
          <img src="/assets/images/logo.png" alt="Redstone Hotel Logo" width="120">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a href="/bookings" class="nav-link">Bookings</a>
          </li>

          <li class="nav-item">
            <a href="/about" class="nav-link">About Us</a>
          </li>

          <li class="nav-item">
            <a href="/login" class="nav-link">Login</a>
          </li>

          <li class="nav-item">
            <a href="/register" class="nav-link">Register</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- </div> -->

  <main class="container p-4">
    <?= $output ?>
  </main>

  <footer>
    <div>
      <ul>
        <li><a href="https://www.youtube.com" target="_blank">YouTube</a></li>
        <li><a href="https://www.facebook.com" target="_blank">Facebook</a></li>
        <li><a href="https://www.instagram.com" target="_blank">Instagram</a></li>
      </ul>
    </div>

    <div>
      <ul>
        <li><a href="/admin">Admin</a></li>
        <li><a href="/">Home</a></li>
        <li><a href="/rooms">Rooms</a></li>
        <li><a href="/bookings">Bookings</a></li>
        <li><a href="/about">Enquiries</a></li>
      </ul>
    </div>

    <div>
      <small>Copyright &copy; RedStone. All rights reserved</small>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>