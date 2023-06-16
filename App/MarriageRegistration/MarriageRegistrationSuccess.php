<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Successful Registration</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../../../ezkahwin/public/css/styles.css">
</head>

<body>
    <?php include "../Component/header.php"; ?>

    <div class="container-fluid">
        <div class="row">
            <?php 
            $activePage = 'pendaftaran';
            include "../Component/sidebar.php"; 
            ?>

            <div class="col-md-9 content">
                <div class="content-title bg-primary text-white p-3">
                    <h1 class="h3 m-0">Pendaftaran Perkahwinan</h1>
                </div>
                <div class="contentBox mt-3">
                    <div class="desc">
                        <div class="card-body">
                            <div class="alert alert-success text-center">
                                <h5 class="alert-heading">Pendaftaran Berjaya!</h5>
                                <p>Pendaftaran perkahwinan anda telah berjaya dihantar.</p>
                                <p>Terima kasih kerana menggunakan perkhidmatan kami.</p>
                                <div class="d-flex justify-content-center mb-3">
                                    <img src="../../public/image/success.png" alt="Success Image" class="img-fluid" style="max-width: 300px;">
                                </div>
                                <a href="../../App/ManageUser/home.php" class="btn btn-primary">Kembali ke Laman Utama</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"></script>
</body>

</html>
