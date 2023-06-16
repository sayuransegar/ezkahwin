<?php
include('../../BusinessServices/Model/db.php');
require_once 'C:\xampp\htdocs\ezkahwin\BusinessServices\controllers\MarriageRegistrationController\ApplicantListController.php';
session_start();

if (isset($_COOKIE['staff_data'])) {
    $userArray = json_decode($_COOKIE['staff_data'], true);
    $id = $userArray['sid'];
}

$marriageData = new applicantList();
$marriages = $marriageData->getAllMarriage();
$count = 1;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Senarai Pendaftaran Perkahwinan</title>
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
            include "../Component/sidebarStaff.php"; 
            ?>

            <div class="col-md-9 content">
                <div class="content-title bg-success text-white p-3">
                    <h1 class="h3 m-0">Admin - Senarai Pendaftaran Perkahwinan</h1>
                </div>
                <div class="contentBox mt-3">
                    <div class="desc">
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Kategori</th>
                                        <th scope="col">No. Pengesahan Perkahwinan</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Tindakan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if (!empty($marriages)){
                                        foreach ($marriages as $marriage){
                                            echo '<tr>
                                                <th scope="row">' . $count . '</th>
                                                <td>' . $marriage["marriage_category"] . '</td>
                                                <td>' . $marriage["marriage_license_number"] . '</td>
                                                <td><span class="badge bg-success">' . $marriage["status"] . '</span></td>
                                                <td>
                                                    <form action="../../../ezkahwin/index.php" method="POST">
                                                        <input type="hidden" name="marriage_id" value="' . $marriage["marriageregister_id"] . '">
                                                        <button type="submit" name="action" value="approve" class="btn btn-success"><i class="fas fa-check"></i></button>
                                                        <button type="submit" name="action" value="reject" class="btn btn-danger"><i class="fas fa-times"></i></button>
                                                    </form>
                                                </td>
                                            </tr>';
                                            $count++;
                                        }
                                    } else {
                                        echo "<tr><td colspan='5'>No Data</td></tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
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
