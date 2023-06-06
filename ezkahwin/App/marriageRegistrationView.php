<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Header and Sidebar Example</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="public/css/styles.css">
</head>

<body>
    <?php include "Component/header.php"; ?>

    <div class="container-fluid">
        <div class="row">
            <?php include "Component/sidebar.php"; ?>
            
            <div class="col-md-9 content">
                <div class="content-title bg-primary text-white p-3">
                    <h1 class="h3 m-0">Pendaftaran Perkahwinan</h1>
                </div>
                <div class="contentBox mt-3">
                    <div class="desc">
                        <h3 class="h6">Nama</h3>
                        <p><?php echo $data['applicant_username']; ?></p>
                        <h3 class="h6">Nombor IC</h3>
                        <p><?php echo $data['applicant_ic']; ?></p>
                        <h3 class="h6">Alamat</h3>
                        <p><?php echo $data['applicant_address']; ?></p>
                        <h3 class="h6">Bangsa</h3>
                        <p><?php echo $data['applicant_race']; ?></p>
                        <div class="partner text-center my-4">
                            <label for="partneric" class="mb-2">No. Kad Pengenalan Pasangan</label><br>
                            <div class="partner text-center w-50 mx-auto">
                                <div class="input-group">
                                    <input type="text" class="form-control">
                                    <button class="btn btn-secondary" type="button"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btnGroup text-center">
                        <a class="btn btn-primary" href="newRegistration.php">DAFTAR</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"></script>
</body>

</html>