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
    <?php include "Component/header.php"; ?>

    <div class="container-fluid">
        <div class="row">
            <?php include "Component/sidebar.php"; ?>

            <div class="col-md-9 content">
                <div class="content-title bg-primary text-white p-3">
                    <h1 class="h3 m-0">Pendaftaran Perkahwinan</h1>
                </div>
                <div class="contentBox mt-3">
                    <div class="desc">
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
                                    <button type="button" class="btn btn-primary">SIMPAN</button>
                                    &nbsp;&nbsp;&nbsp;
                                    <button type="button" class="btn btn-primary">HANTAR</button>
                                </div>
                            </form>
                            <br><br>
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