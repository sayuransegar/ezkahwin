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
        <a href="applicationForm.php">Aduan/Khidmat Nasihat</a>
        <a href="#insentif">Insentif</a>
        <a href="#logout">Log Keluar</a>
    </div>

    <div class="content">
        <div>
        <div class="p-2 mb-2 custom-bg-color text-white">
            <span class="h6">ADUAN/KHIDMAT NASIHAT</span>
        </div>

        <div style="margin-top: 30px; margin-left: 10px;">
            <form class="row g-3">
                <h6 align="left"><b>MAKLUMAT PEMOHON</b></h6><br><br>
                    <div class="mb-3 row" style="margin-top: 10px;">
                        <label for="inputIC" class="col-sm-2 col-form-label">No Kad Pengenalan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputIC">
                            </div>
                        <label for="inputNama" class="col-sm-2 col-form-label">Nama Pemohon</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputNama">
                            </div>
                        <label for="inputDOB" class="col-sm-2 col-form-label">Tarikh Lahir</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="inputDOB">
                            </div>
                        <label for="inputPOB" class="col-sm-2 col-form-label">Tempat Lahir</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputPOB">
                            </div>
                        <label for="inputAlamat" class="col-sm-2 col-form-label">Alamat Semasa</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="inputAlamat" rows="3"></textarea>
                            </div>
                        <label for="inputTelefon" class="col-sm-2 col-form-label">No Telefon</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputTelefon">
                            </div>
                    </div>

                <h6 align="left"><b>MAKLUMAT PASANGAN</b></h6><br><br>
                    <div class="mb-3 row" style="margin-top: 10px;">
                        <label for="inputIC" class="col-sm-2 col-form-label">No Kad Pengenalan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputIC">
                            </div>
                        <label for="inputNama" class="col-sm-2 col-form-label">Nama Pasangan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputNama">
                            </div>
                        <label for="inputDOB" class="col-sm-2 col-form-label">Tarikh Lahir</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="inputDOB">
                            </div>
                        <label for="inputPOB" class="col-sm-2 col-form-label">Tempat Lahir</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputPOB">
                            </div>
                        <label for="inputAlamat" class="col-sm-2 col-form-label">Alamat Semasa</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="inputAlamat" rows="3"></textarea>
                            </div>
                        <label for="inputTelefon" class="col-sm-2 col-form-label">No Telefon</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputTelefon">
                            </div>
                    </div>
                <h6 align="left"><b>MAKLUMAT ADUAN</b></h6><br><br>
                    <div class="mb-3 row" style="margin-top: 10px;">
                        <label for="tarikhAduan" class="col-sm-2 col-form-label">Tarikh Aduan</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="tarikhAduan">
                            </div>
                        <label for="inputPenerangan" class="col-sm-2 col-form-label">Penerangan Aduan</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="inputPenerangan" rows="3"></textarea>
                            </div>
                    </div>

                    <div class="d-flex justify-content-center">
                        <button type="button" class="btn btn-success">LULUS</button>
                        &nbsp;&nbsp;&nbsp;
                        <button type="button" class="btn btn-danger">TOLAK</button>
                    </div>
            </form> 
            <br><br> 
        </div>
        </div>
        
    </div>
    </div>
</body>
</html>
