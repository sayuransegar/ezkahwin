<!DOCTYPE html>
<html>
  <head>
    <title>Register | e-Munakahat</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="profilemanage.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
    />
    <script src="script.js"></script>
  </head>
  <body class="page-bg">
    <div>
      <header>
        <img
          src="https://i.imgur.com/D3gqdM6.jpg"
          alt="e-Munakahat Header Image"
          class="header-img"
        />
        <div class="sub-header-user">
          <h3>Daftar Pengguna</h3>
        </div>
      </header>
      <section class="register-body">
        <form
          name="register-form"
          action="registerController.php"
          method="POST"
          onsubmit="return validateRegisterForm()"
          class="register-form"
        >
          <input
            type="text"
            id="icnum"
            name="icnum"
            placeholder="No. Kad Pengenalan"
            required
            class="input-field"
          />
          <input
            type="email"
            id="email"
            name="email"
            placeholder="Email"
            required
            class="input-field"
          />
          <input
            type="text"
            id="name"
            name="name"
            placeholder="Nama"
            required
            class="input-field"
          />
          <select name="gender" id="gender" class="input-field">
            <option value="" disabled selected>-- Sila Pilih Jantina --</option>
            <option value="lelaki">Lelaki</option>
            <option value="perempuan">Perempuan</option>
          </select>
          <input
            type="text"
            id="phonenum"
            name="phonenum"
            placeholder="No. Telefon"
            required
            class="input-field"
          />
          <input
            type="text"
            id="address"
            name="address"
            placeholder="Alamat Surat-Menyurat"
            required
            class="input-field"
          />
          <input
            type="password"
            id="password"
            name="password"
            placeholder="Kata Laluan"
            class="input-field"
            required
          />
          <input type="submit" value="Daftar Pengguna" class="button-user" />
        </form>
        <div class="mt-5">
          <a href="loginuser.php">[ Kembali ke Laman Utama ]</a>
        </div>
      </section>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
