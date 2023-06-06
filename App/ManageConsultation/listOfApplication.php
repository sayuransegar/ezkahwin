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
    <?php include "App/Component/header.php"; ?>

    <div class="container-fluid">
        <div class="row">
            <?php include "App/Component/sidebar.php"; ?>

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
                                    <input type="text" style="width: 300px; height: 35px;" class="form-control form-control-sm" id="inputIC">
                                    &nbsp;&nbsp;&nbsp;
                                    <button type="submit" onclick="window.location.href = 'listOfApplication.php';" class="btn btn-primary mb-3">CARIAN</button>
                                </div>

                                <div class="d-flex justify-content-center">
                                    <h6>SILA KLIK 'PERMOHONAN BARU' JIKA ANDA INGIN MEMBUAT ADUAN/KHIDMAT NASIHAT</h6>
                                    &nbsp;&nbsp;&nbsp;
                                    <button type="button" onclick="window.location.href = 'complaintForm.php';" class="btn btn-danger">PERMOHONAN BARU</button>
                                </div>
                            </form>
                            <br><br>

                            <div class="d-flex align-items-start" style="background-color:white;">
                                <table class="table table-bordered border-dark">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;" scope="col">NO</th>
                                            <th style="text-align: center;" scope="col">NO IC/NAMA PEMOHON</th>
                                            <th style="text-align: center;" scope="col">NO IC/NAMA PASANGAN</th>
                                            <th style="text-align: center;" scope="col">TARIKH</th>
                                            <th style="text-align: center;" scope="col">STATUS</th>
                                            <th style="text-align: center;" scope="col">TINDAKAN</th>
                                        </tr>
                                    </thead>
                                    <thead>
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col"></th>
                                            <th scope="col"></th>
                                            <th scope="col"></th>
                                            <th scope="col"></th>
                                            <th style="text-align: center;" scope="col">
                                                <button class="btn btn-icon btn-transparent btn-eye" type="submit" onclick="window.location.href = 'complaintForm.php';">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                                &nbsp;&nbsp;
                                                <button class="btn btn-icon btn-transparent btn-print">
                                                    <i class="fas fa-print"></i>
                                                </button>
                                                &nbsp;&nbsp;
                                                <button class="btn btn-icon btn-transparent btn-delete">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                                &nbsp;&nbsp;
                                                <button class="btn btn-icon btn-transparent btn-edit" type="submit" onclick="window.location.href = 'complaintForm.php';">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                            </th>
                                        </tr>
                                    </thead>
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