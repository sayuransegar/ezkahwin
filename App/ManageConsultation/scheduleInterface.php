<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EZKahwin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../../../ezkahwin/public/css/styles.css">
</head>

<body>

    <?php
    require_once 'C:\xamppnew\htdocs\ezkahwin\BusinessServices\controllers\ManageConsultationController\consultationController.php';

    $consultationController = new consultationController();
    $consultationData = $consultationController->getDataConsultation();
    ?>

    <?php include "../Component/header.php"; ?>

    <div class="container-fluid">
        <div class="row">
            <?php include "../Component/sidebar.php"; ?>

            <div class="col-md-9 content">
                <div class="content-title bg-success text-white p-3">
                    <h1 class="h3 m-0">Aduan/Khidmat Nasihat</h1>
                </div>
                <div class="contentBox mt-3">
                    <div class="desc">
                        <!-- Display all the application -->
                        <?php
                        if (!empty($consultationData)) {
                            echo "<table style='border: 1px solid black; border-collapse: collapse; width: 100%; background-color: white;'>";
                            echo "<tr>";
                            echo "<th style='border: 1px solid black; padding: 5px; text-align: center;'>IC/Nama Pemohon</th>";
                            echo "<th style='border: 1px solid black; padding: 5px; text-align: center;'>Tarikh Temu Janji</th>";
                            echo "<th style='border: 1px solid black; padding: 5px; text-align: center;'>Masa Temu Janji</th>";
                            echo "</tr>";

                            foreach ($consultationData as $consultation) {
                                $consultation_ID = $consultation['consultation_ID'];
                                $consultation_date = $consultation['consultation_date'];
                                $consultation_time = $consultation['consultation_time'];

                                echo "<tr>";
                                echo "<td style='border: 1px solid black; padding: 5px; text-align: center;'></td>";
                                echo "<td style='border: 1px solid black; padding: 5px; text-align: center;'>$consultation_date</td>";
                                echo "<td style='border: 1px solid black; padding: 5px; text-align: center;'>$consultation_time</td>";
                                echo "</tr>";
                            }
                            echo "</table>";
                            echo "<br><br>";
                        } else {
                            echo "No consultation found.";
                        }
                        ?>
                        <div class="d-flex flex-row bd-highlight mb-3">
                            <button type="submit" class="btn btn-info" onclick="window.location.href='listOfApplication.php'">KEMBALI</button>
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