<!DOCTYPE html>
<html>

<head>
  <title>Login | e-Munakahat</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="public/css/profilemanage.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" />
</head>

<body class="page-bg">
  <div>
    <header>
      <img src="https://i.imgur.com/D3gqdM6.jpg" alt="e-Munakahat Header Image" class="header-img" />
      <div class="sub-header-user">
        <h3>Laman Utama</h3>
      </div>
    </header>
    <section class="login-body">
      <h3>Log Masuk</h3>
      <form action="../../../ezkahwin/index.php" method="POST" class="login-form">
        <input type="hidden" name="user_type" value="user">
        <input type="text" id="icnum" name="icnum" placeholder="No. Kad Pengenalan" required class="input-field" />
        <input type="password" id="pass" name="pass" placeholder="Kata Laluan" class="input-field" required />
        <input type="submit" name="Loginuser" value="Daftar Masuk" class="button-user" />
      </form>
      <a href="../../../ezkahwin/App/ManageUser/loginstaff.php">
        <button class="button-user2">Log Masuk Kakitangan</button>
      </a>
      <p>
        <a href="../../../ezkahwin/App/ManageUser/register.php">Daftar</a> |
        <a href="forgotpassword.html">Tukar Kata Laluan</a>
      </p>
    </section>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>