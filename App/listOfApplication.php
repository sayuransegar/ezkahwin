<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="mainApplicant.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    
    <title>Aduan/Khidmat Nasihat</title>
</head>
<body>

    <div class="overflow-auto">

    <div class="header">
        <img src="newbanner.png" class="img-fluid">
    </div>

    <div class="sidebar">
        <a href="#home">Profil Pengguna</a>
        <a href="#news">Permohonan Perkahwinan</a>
        <a href="#contact">Pendaftaran Perkahwinan</a>
        <a href="ICVerification.php">Aduan/Khidmat Nasihat</a>
        <a href="#insentif">Insentif</a>
        <a href="#logout">Log Keluar</a>
    </div>

    <div class="content">
        <div>
        <div class="p-2 mb-2 custom-bg-color text-white">
            <span class="h6">ADUAN/KHIDMAT NASIHAT</span>
        </div>

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
                                                <button class="image-button" type="submit" onclick="window.location.href = 'complaintForm.php';">
                                                    <img src="view.png">
                                                </button>
                                                &nbsp;&nbsp;
                                                <button class="image-button">
                                                    <img src="print.png">
                                                </button>
                                                &nbsp;&nbsp;
                                                <button class="image-button">
                                                    <img src="delete.png">
                                                </button>
                                                &nbsp;&nbsp;
                                                <button class="image-button" type="submit" onclick="window.location.href = 'complaintForm.php';">
                                                    <img src="edit.png">
                                                </button>
                                            </th>
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
                                                <button class="image-button" type="submit" onclick="window.location.href = 'complaintForm.php';">
                                                    <img src="view.png">
                                                </button>
                                                &nbsp;&nbsp;
                                                <button class="image-button">
                                                    <img src="print.png">
                                                </button>
                                                &nbsp;&nbsp;
                                                <button class="image-button">
                                                    <img src="delete.png">
                                                </button>
                                                &nbsp;&nbsp;
                                                <button class="image-button" type="submit" onclick="window.location.href = 'complaintForm.php';">
                                                    <img src="edit.png">
                                                </button>
                                            </th>
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
                                                <button class="image-button" type="submit" onclick="window.location.href = 'complaintForm.php';">
                                                    <img src="view.png">
                                                </button>
                                                &nbsp;&nbsp;
                                                <button class="image-button">
                                                    <img src="print.png">
                                                </button>
                                                &nbsp;&nbsp;
                                                <button class="image-button">
                                                    <img src="delete.png">
                                                </button>
                                                &nbsp;&nbsp;
                                                <button class="image-button" type="submit" onclick="window.location.href = 'complaintForm.php';">
                                                    <img src="edit.png">
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

</body>
</html>
