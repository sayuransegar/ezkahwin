<?php
include('../../BusinessServices/Model/db.php');
require_once 'C:\xampp\htdocs\ezkahwin\BusinessServices\Model\MarriageRegistrationModel\MarriageRegistrationModel.php';

session_start();

if (isset($_COOKIE['user_data'])) {
    $userArray = json_decode($_COOKIE['user_data'], true);
    $id = $userArray['uid'];

    $marriageRegistrationModel = new MarriageRegistrationModel();
    $data = $marriageRegistrationModel->getApplicantData($id);
}

$partnerIC = isset($_SESSION['partner_ic']) ? $_SESSION['partner_ic'] : '';
$partnerData = $marriageRegistrationModel->getPartnerData($partnerIC);
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
                        <h3 class="h6">Nama</h3>
                        <p><?php echo $data['name']; ?></p>
                        <h3 class="h6">Nombor IC</h3>
                        <p><?php echo $data['icnum']; ?></p>
                        <h3 class="h6">Alamat</h3>
                        <p><?php echo $data['applicant_address']; ?></p>
                        <div class="modal-body">
                            <div class="modal-body">
                                <?php if (!empty($partnerData)) : ?>
                                    <div class="partner-info">
                                        <h3 class="h6">Partner Name</h3>
                                        <p><?php echo $partnerData['partner_name']; ?></p>
                                        <h3 class="h6">Partner IC</h3>
                                        <p><?php echo $partnerData['partner_ic']; ?></p>
                                        <h3 class="h6">Partner Address</h3>
                                        <p><?php echo $partnerData['partner_address']; ?></p>
                                    </div>
                                <?php else : ?>
                                    <div id="noPartnerFound" style="display: none;">
                                        <p>No partner found.</p>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="partner text-center my-4">
                            <label for="partneric" class="mb-2">No. Kad Pengenalan Pasangan</label><br>
                            <div class="partner text-center w-50 mx-auto">
                                <form action="../../index.php" method="POST">
                                    <div class="input-group">
                                        <input type="hidden" name="action" value="searchPartner">
                                        <input type="text" class="form-control" name="partner_ic">
                                        <button class="btn btn-secondary" type="submit" data-bs-toggle="modal" data-bs-target="#partnerInfoModal"><i class="fas fa-search"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="btnGroup text-center">
                        <a class="btn btn-primary" href="../../../ezkahwin/App/MarriageRegistration/NewMarriageRegistration.php">DAFTAR</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"></script>
</body>

</html>