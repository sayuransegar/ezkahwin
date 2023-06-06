<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="mainStaffstyle.css">
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
            <a href="optionInterface.php">Aduan/Khidmat Nasihat</a>
            <a href="#insentif">Insentif</a>
            <a href="#logout">Log Keluar</a>
        </div>

        <div class="content">
            <div>
                <div class="p-2 mb-2 custom-bg-color text-white">
                    <span class="h6">ADUAN/KHIDMAT NASIHAT</span>
                </div>

                <div style="margin-top: 50px;">
                    <div style="margin-top: 30px; margin-left: 10px;">
                        <form class="row g-3">
                            <div class="mb-3 row" style="margin-top: 10px;">
                                <label for="inputNama" class="col-sm-2 col-form-label">Nama Pemohon</label>
                                <div class="col-sm-10">
                                    <select class="form-select" id="inputNama" aria-label="Default select example">
                                        <option selected>Pilih nama pemohon</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>

                                <label for="inputSesi" class="col-sm-2 col-form-label">No Sesi</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputSesi">
                                </div>
                                <label for="inputTambahan" class="col-sm-2 col-form-label">Sesi Tambahan</label>
                                <div class="col-sm-10">
                                    <select class="form-select" id="inputTambahan" aria-label="Default select example">
                                        <option selected>Perlu sesi tambahan?</option>
                                        <option value="1">Ya</option>
                                        <option value="2">Tidak</option>
                                    </select>
                                </div>
                                <label for="inputTarikh" class="col-sm-2 col-form-label">Tarikh Janji Temu</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" id="inputTarikh">
                                </div>
                                <label for="inputMasa" class="col-sm-2 col-form-label">Masa</label>
                                <div class="col-sm-10">
                                    <input type="time" class="form-control" id="inputMasa">
                                </div>
                            </div>
                        </form>
                        <div class="d-flex justify-content-center">
                            <button type="button" class="btn btn-danger">HANTAR</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>