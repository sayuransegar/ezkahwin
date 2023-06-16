<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kad Perkahwinan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../../../ezkahwin-backup/public/css/styles.css">
</head>

<body>
    <?php include "../Component/header.php"; ?>

    <div class="container-fluid">
        <div class="row">
            <?php 
            $activePage = 'kad';
            include "../Component/sidebar.php"; 
            ?>

            <div class="col-md-9 content">
                <div class="content-title bg-primary text-white p-3">
                    <h1 class="h3 m-0">Kad Perkahwinan</h1>
                </div>
                <div class="contentBox mt-3">
                    <div class="desc">
                        <div class="card-body">
                            <h5 class="card-title">Muat Naik Resit Pembayaran</h5>
                            <form action="../../index.php" method="POST">
                                <div class="mb-3">
                                    <label for="proofOfPayment" class="form-label">Resit Pembayaran</label>
                                    <input type="file" class="form-control" id="proofOfPayment" name="proof_of_payment" required>
                                    <small class="form-text text-muted">Sila muat naik fail berformat JPG, PNG, atau PDF dengan saiz tidak melebihi 10MB.</small>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <button type="submit" name="submitPayment" class="btn btn-primary btn-lg"><i class="fas fa-upload"></i> Muat Naik</button>
                                </div>
                            </form>
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
