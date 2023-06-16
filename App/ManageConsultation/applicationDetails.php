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
    <!-- Call the data -->
    <?php
    require_once 'C:\xampp\htdocs\ezkahwin\BusinessServices\controllers\ManageConsultationController\complaintController.php';
    require_once 'C:\xampp\htdocs\ezkahwin\BusinessServices\controllers\ManageConsultationController\consultationController.php';

    $complaintController = new complaintController();
    $complaintData = $complaintController->getDataComplaint();
    $consultationController = new consultationController();
    $consultationData = $consultationController->getDataConsultation();

    ?>
    <?php include "../Component/header.php"; ?>

    <div class="container-fluid">
        <div class="row">
            <?php
            $activePage = 'aduan';
            include "../Component/sidebar.php"; 
            ?>

            <div class="col-md-9 content">
                <div class="content-title bg-primary text-white p-3">
                    <h1 class="h3 m-0">Aduan/Khidmat Nasihat</h1>
                </div>
                <div class="contentBox mt-3">
                    <div class="desc">
                        <div style="margin-top: 100px;">
                            <form class="row g-3">
                                <h6 align="center">NO KAD PENGENALAN / PASSPORT</h6><br><br>
                                <div class="d-flex justify-content-center">
                                    <input type="text" style="width: 300px; height: 35px;" class="form-control form-control-sm" id="icnum" name="icnum" disabled>
                                    &nbsp;&nbsp;&nbsp;
                                    <button type="submit" onclick="window.location.href = 'applicationDetails.php';" class="btn btn-primary mb-3">CARIAN</button>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <!-- Create New Application -->
                                    <h6>SILA KLIK 'PERMOHONAN BARU' JIKA ANDA INGIN MEMBUAT ADUAN/KHIDMAT NASIHAT</h6>
                                    &nbsp;&nbsp;&nbsp;
                                    <button type="button" onclick="window.location.href = 'complaintForm.php';" class="btn btn-danger">PERMOHONAN BARU</button>
                                </div>
                            </form>
                            <br><br>

                            <!-- Display all the application -->
                            <?php
                            if (!empty($complaintData && $consultationData)) {
                                echo "<table style='border: 1px solid black; border-collapse: collapse; width: 100%; background-color: white;'>";
                                echo "<tr>";
                                echo "<th style='border: 1px solid black; padding: 5px; text-align: center;'>IC/Nama Pemohon</th>";
                                echo "<th style='border: 1px solid black; padding: 5px; text-align: center;'>Tarikh Permohonan</th>";
                                echo "<th style='border: 1px solid black; padding: 5px; text-align: center;'>Tarikh Temujanji</th>";
                                echo "<th style='border: 1px solid black; padding: 5px; text-align: center;'>Status</th>";
                                echo "<th style='border: 1px solid black; padding: 5px; text-align: center;'>Tindakan</th>";
                                echo "</tr>";

                                foreach ($complaintData as $complaint) {
                                    $complaint_ID = $complaint['complaint_ID'];
                                    $complaint_date = $complaint['complaint_date'];
                                    $consultation_date = ''; // Initialize the variable with an empty value

                                    foreach ($consultationData as $consultation) {
                                        if ($consultation['consultation_ID'] === $complaint_ID) {
                                            $consultation_date = $consultation['consultation_date'];
                                            break; // Exit the inner loop once a matching consultation is found
                                        }
                                    }
                                    echo "<tr>";
                                    echo "<td style='border: 1px solid black; padding: 5px; text-align: center;'></td>";
                                    echo "<td style='border: 1px solid black; padding: 5px; text-align: center;'>$complaint_date</td>";
                                    echo "<td style='border: 1px solid black; padding: 5px; text-align: center;'>$consultation_date</td>";
                                    echo "<td style='border: 1px solid black; padding: 5px; text-align: center;'>DALAM PROSESS</td>";
                                    echo "<td style='border: 1px solid black; padding: 5px; text-align: center;'>";
                                    echo "<a href='complaintForm.php?id=$complaint_ID' style='text-decoration: none;'><i class='fas fa-eye'></i></a>&nbsp;";
                                    echo "<a href='javascript:void(0);' onclick='printComplaint($complaint_ID)' style='text-decoration: none;'><i class='fas fa-print'></i></a>&nbsp;";
                                    echo "<a href='applicationDetails.php?id=$complaint_ID' style='text-decoration: none;' onclick='return confirm(\"Are you sure you want to delete this complaint?\");'><i class='fas fa-trash'></i></a>&nbsp;";
                                    echo "<a href='complaintForm.php?id=$complaint_ID' style='text-decoration: none;'><i class='fas fa-edit'></i></a>";
                                    echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</table>";
                                echo "<br><br>";
                            } else {
                                echo "No complaints found.";
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"></script>
        <script>
            function printComplaint() {
                // Call the print function
                window.print();
            }
        </script>
</body>

</html>