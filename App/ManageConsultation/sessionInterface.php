<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EZKahwin</title>
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
        </div>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"></script>
</body>

</html>