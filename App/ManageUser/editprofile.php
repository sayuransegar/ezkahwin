<?php
// include('../../BusinessServices/models/db.php');
// session_start();

// $id = $_SESSION['id'];

// $query = "SELECT * FROM `user` WHERE id='$id'";
// $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
// $row = mysqli_fetch_array($result);
// $count = mysqli_num_rows($result);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Header and Sidebar Example</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../../../ezkahwin/public/css/styles.css">
    <link rel="stylesheet" href="../../../ezkahwin/public/css/profilemanage.css">
</head>

<body>
    <?php
    $activePage = 'profil';
    include "../Component/header.php"; 
    ?>

    <div class="container-fluid">
        <div class="row">
            <?php include "../Component/sidebar.php"; ?>

            <div class="col-md-9 content">
                <div class="content-title bg-primary text-white p-3">
                    <h1 class="h3 m-0">Profil Pengguna</h1>
                </div>
                <div class="contentBox mt-3">
                    <div class="desc">
                        <form name="edit-profile-form" action="editprofileController.php" method="POST" onsubmit="return validateRegisterForm()" class="edit-profile-form-user">
                            <p>Nama:</p>
                            <input type="text" id="icnum" name="icnum" required class="input-field2 mt-1" disabled value="<?php echo $row['icnum'] ?>" />
                            <br>
                            <p>Email:</p>
                            <input type="email" id="email" name="email" required class="input-field2 mt-1" value="<?php echo $row['email'] ?>" />
                            <br>
                            <p>Nama:</p>
                            <input type="text" id="name" name="name" required class="input-field2 mt-1" value="<?php echo $row['name'] ?>" />
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
                            <input type="text" id="phonenum" name="phonenum" placeholder="No. Telefon" required class="input-field2 mt-1" value="<?php echo $row['phonenum'] ?>" />
                            <br>
                            <p>Alamat:</p>
                            <input type="text" id="address" name="address" required class="input-field2 mt-1" value="<?php echo $row['address'] ?>" />
                            <input type="hidden" name="id" value="<?php echo $row['id'] ?>" />
                            <input type="submit" value="Kemaskini" class="button-user-profile mt-3" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"></script>
</body>

</html>