<?php
include('../../BusinessServices/Model/db.php');
require_once 'C:\xampp\htdocs\ezkahwin\BusinessServices\controllers\MarriageCardController\ApplicantCardListController.php';
session_start();

if (isset($_COOKIE['staff_data'])) {
    $userArray = json_decode($_COOKIE['staff_data'], true);
    $id = $userArray['sid'];
}

$cardData = new cardList();
$cards = $cardData->getCard();
$count = 1;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Senarai Card Perkahwinan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../../../ezkahwin/public/css/styles.css">
</head>

<body>
    <?php include "../Component/header.php"; ?>

    <div class="container-fluid">
        <div class="row">
            <?php 
            $activePage = 'kad';
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
                                        <th scope="col">Proof of Payment</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Tindakan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if (!empty($cards)){
                                        foreach ($cards as $card){
                                            echo '<tr>
                                                <th scope="row">' . $count . '</th>
                                                <td>' . $card["proofofpayment"] . '</td>
                                                <td><span class="badge bg-success">' . $card["status"] . '</span></td>
                                                <td>
                                                    <form action="../../../ezkahwin/index.php" method="POST">
                                                        <input type="hidden" name="marriage_id" value="' . $card["marriageregister_id"] . '">
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
