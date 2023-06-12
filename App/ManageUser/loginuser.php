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
        <div class="sub-header-user">
          <h3>Laman Utama</h3>
        </div>
      </header>
      <section class="login-body">
        <h3>Log Masuk</h3>
        <!--when user click on this/fill in the table/ click the log masuk, it will change from loginuser class to home class-->
        <form action="../../../ezkahwin/index.php" method="POST" class="login-form">
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
          <input type="submit" value="Log Masuk" class="button-user" />
        </form>
        <a href="../../../ezkahwin/App/ManageUser/home.php">
          <button class="button-user2">Log Masuk</button>
        </a>
        <p>|
          <a href="../../../ezkahwin/App/ManageUser/register.php">Daftar</a>
          <a href="../../../ezkahwin/App/ManageUser/forgotpassword.php">Tukar Kata Laluan</a>
        </p>
      </section>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
