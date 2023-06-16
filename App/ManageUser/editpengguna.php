<?php
include '../../BusinessServices/Model/db.php';
require_once 'C:\xampp\htdocs\ezkahwin\BusinessServices\controllers\ManageUserController\editpenggunaController.php';
session_start();

if (isset($_GET['eid'])) {
    $id = $_GET['eid'];

    $manageUser = new editPengguna();
    $user = $manageUser->editUser($id);

    if ($user) {
        // Proceed with displaying the form
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
    <?php include "../Component/header.php"; ?>

    <div class="container-fluid">
        <div class="row">
            <?php 
            $activePage = 'profil';
            include "../Component/sidebarStaff.php"; 
            ?>

            <div class="col-md-9 content">
                <div class="content-title bg-primary text-white p-3">
                    <h1 class="h3 m-0">Pendaftaran Baharu</h1>
                </div>
                <div class="contentBox mt-3">
                    <div class="desc">
                        <section class="edit-profile-body">
                            <h3>Profil Pengguna</h3>
                            <!--When user click here, user can view and edit the data, then after finished edit user will click the button then it will redirected to home class
                        | also redirect to index.php, which is route to connect to controller and model  -->
                            <form name="edit-profile-form" action="../../index.php" method="POST" onsubmit="return validateRegisterForm()" class="edit-profile-form mt-1">
                                <div>
                                    <label for="icnum">No. Kad Pengenalan:</label>
                                    <br />
                                    <input type="text" id="icnum" name="icnum" required class="input-field mt-1" disabled value="<?php echo $user['icnum']; ?>" />
                                </div>
                                <div>
                                    <label for="email">Email:</label>
                                    <br />
                                    <input type="email" id="email" name="email" required class="input-field mt-1" value="<?php echo $user['email']; ?>" />
                                </div>
                                <div>
                                    <label for="name">Nama:</label>
                                    <br />
                                    <input type="text" id="name" name="name" required class="input-field mt-1" value="<?php echo $user['name']; ?>" />
                                </div>
                                <div>
                                    <label for="gender">Jantina:</label>
                                    <br />
                                    <select name="gender" id="gender" class="input-field mt-1">
                                        <option value="" disabled selected>
                                            -- Sila Pilih Jantina --
                                        </option>
                                        <option value="lelaki" <?php echo ($user['gender'] == "lelaki") ? 'selected' : ''; ?>>Lelaki</option>
                                        <option value="perempuan" <?php echo ($user['gender'] == "perempuan") ? 'selected' : ''; ?>>Perempuan</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="phonenum">No. Telefon:</label>
                                    <br />
                                    <input type="text" id="phonenum" name="phonenum" placeholder="No. Telefon" required class="input-field mt-1" value="<?php echo $user['phonenum']; ?>" />
                                </div>

                                <div>
                                    <label for="password">Kata Laluan Baharu (Tidak Diwajibkan)</label>
                                    <br />
                                    <input type="password" id="password" name="password" class="input-field mt-1" />
                                </div>
                                 <div>
                                    <label for="alamat">Alamat Surat-Menyurat:</label>
                                    <br />
                                    <input
                                        type="text"
                                        id="address"
                                        name="address"
                                        required
                                        class="input-field mt-1"
                                        value="<?php echo $user['address']; ?>"
                                    />
                                    </div>
                                <div>
                                    <input type="hidden" name="uid" value="<?php echo $user['id']; ?>" />
                                </div>
                                <input type="submit" name="editProfileUser" value="Kemaskini Maklumat" class="button-user mt-3" />
                            </form>
                        </section>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"></script>
</body>

</html>

<?php
    } else {
        echo "User not found.";
    }
}
?>
