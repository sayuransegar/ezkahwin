<?php
  include('connect_db.php');
  session_start();
  
  $id = $_SESSION['id'];
  
  $query = "SELECT * FROM `user` WHERE id='$id'";
  $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
  $row = mysqli_fetch_array($result);
  $count = mysqli_num_rows($result);


?>

<!DOCTYPE html>
<html>
  <head>
    <title>Edit Profile | EzKahwin</title>
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
          <h6>ID:<?php echo $_SESSION["id"] ?></h6>
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
          <div class="title-card">
            <h3>Profil Pengguna</h3>
          </div>
          <form name="edit-profile-form"
            action="editprofilecontroller.php"
            method="POST"
            onsubmit="return validateRegisterForm()"
            class="edit-profile-form-user">
            <p>Nama:</p>
            <input
                type="text"
                id="icnum"
                name="icnum"
                required
                class="input-field2 mt-1"
                disabled
                value="<?php echo $row['icnum'] ?>"
            />
            <br>
            <p>Email:</p>
            <input
              type="email"
              id="email"
              name="email"
              required
              class="input-field2 mt-1"
              value="<?php echo $row['email'] ?>"
            />
            <br>
            <p>Nama:</p>
            <input
                type="text"
                id="name"
                name="name"
                required
                class="input-field2 mt-1"
                value="<?php echo $row['name'] ?>"
            />
            <br>
            <p>Jantina:</p>
            <select name="gender" id="gender" class="input-field2 mt-1">
                <option value="" disabled selected>
                  -- Sila Pilih Jantina --
                </option>
                <option value="lelaki">Lelaki</option>
                <option value="perempuan">Perempuan</option>
            </select>
            <br>
            <p>No. Telefon:</p>
            <input
                type="text"
                id="phonenum"
                name="phonenum"
                placeholder="No. Telefon"
                required
                class="input-field2 mt-1"
                value="<?php echo $row['phonenum'] ?>"
            />
            <br>
            <p>Alamat:</p>
            <input
                type="text"
                id="address"
                name="address"
                required
                class="input-field2 mt-1"
                value="<?php echo $row['address'] ?>"
            />
            <input type="hidden" name="id" value="<?php echo $row['id'] ?>" />
            <input
              type="submit"
              value="Kemaskini"
              class="button-user-profile mt-3"
            />
          </form>
        </section>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
