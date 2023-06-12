<!DOCTYPE html>
<html>
  <head>
    <title>Login | EzKahwin</title>
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
        <div class="sub-header-staff">
          <h3>Laman Utama</h3>
        </div>
      </header>
      <section class="login-body">
        <h3>Log Masuk</h3>
        <!--when user click on this/fill in the table/ click the log masuk kaki tangan, it will change from loginstaff class to profilepengguna class-->
        <form action="../../../ezkahwin/index.php?user_type=staff" method="POST" class="login-form">
          <input
            type="text"
            id="icnum"
            name="icnum"
            placeholder="No. Kad Pengenalan"
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
          <input
            type="submit"
            value="Log Masuk Kakitangan"
            class="button-staff"
          />
        </form>
        <div class="mt-3">
        <a href="../../../ezkahwin/App/ManageUser/loginuser.php">Kembali Ke Halaman Utama</a>
        </div>
      </section>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
