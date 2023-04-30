<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Navbar</title>
    <link rel="stylesheet" href="css/index.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />
  </head>
  <body>
    <header>
      <nav class="main-nav">
        <input type="checkbox" id="check" />
        <label for="check" class="menu-btn">
          <i class="fas fa-bars"></i>
        </label>
        <span class="logo">Rent Car</span>
        <ul class="navlinks">
          <li><a href="list-mobil.php">Mobil</a></li>
          <li><a href="list-pelanggan.php">Pelanggan</a></li>
          <li><a href="list-karyawan.php">Karyawan</a></li>
          <li><a href="list-sewa.php">Penyewaan</a></li>
          <li><a href="login.php" class="logout">Log Out</a></li>
        </ul>
      </nav>
    </header>
  </body>
</html>