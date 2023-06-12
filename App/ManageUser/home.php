<?php
  include('connect_db.php');
  session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Home | e-Munakahat</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="profilemanage.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
    />
  </head>
  <body>
    <div class="page-parent">
      <img src="https://i.imgur.com/XRrwtZk.png" class="page-bg" width="100%" />
      <header>
        <img
          src="https://i.imgur.com/D3gqdM6.jpg"
          alt="e-Munakahat Header Image"
          class="header-img"
        />
      </header>
      <div class="main-page">
      <section class="side-nav-body">
          <h6>ID:<?php echo $_SESSION["icnum"] ?></h6>
          <h6>Nama:<?php echo $_SESSION["name"] ?></h6>
          <nav class="side-nav mt-5">
            <div class="side-nav-link">
              <h5>Profile Pengguna</h5>
            </div>
            <div class="side-nav-link">
              <a href="editprofile.php">
                <p>Kemaskini Profil</p>
              </a>
            </div>
            <div class="side-nav-link">
              <a href="#">
                <p>Permohonan Kursus Perkahwinan</p>
              </a>
            </div>
            <div class="side-nav-link">
              <a href="#">
                <p>Pendaftaran Perkahwinan</p>
              </a>
            </div>
            <div class="side-nav-link">
              <a href="#">
                <p>Aduan/Khidmat Nasihat</p>
              </a>
            </div>
            <div class="side-nav-link">
              <a href="#">
                <p>Insentif</p>
              </a>
            </div>
            <div class="side-nav-link-bot">
              <a href="logout.php">
                <p>Log Keluar</p>
              </a>
            </div>
          </nav>
        </section>
        <div class="border-line"></div>
        <section class="edit-profile-body">
          <h1>Selamat Datang Ke EzKahwin</h1>
          <h3>EzKahwin adalah sebuah platform yang digunakan untuk mempermudahkan urusan perkahwinan anda semua</h3>
        </section>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
