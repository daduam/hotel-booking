<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/css/index.css">
  <title><?= $title ?></title>
</head>

<body>
  <nav>
    <div>
      <a href="/">Redstone Hotel</a>
    </div>

    <div>
      <ul>
        <li><a href="/bookings">Bookings</a></li>
        <li><a href="/about">About Us</a></li>
        <li><a href="/login">Login</a></li>
        <li><a href="/register">Register</a></li>
      </ul>
    </div>
  </nav>

  <main class="container">
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
</body>

</html>