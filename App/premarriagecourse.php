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
                    <h1 class="h3 m-0">Pra Perkahwinan Kursus</h1>
                </div>

                <div class="contentBox mt-3">
                    <div class="desc">
                        <div style="margin-top: 30px; margin-left: 10px;">
                            <form class="row g-3">
                                <h6 align="left"><b>Daftar Kursus</b></h6><br><br>
                                <div class="mb-3 row" style="margin-top: 10px;">

                                    <div class="mb-3 row" style="margin-top: 10px;">
                                        <label for="inputAnjuran" class="col-sm-2 col-form-label">Anjuran</label>
                                        <div class="col-sm-10">
                                            <select class="form-select" id="inputAnjuran" aria-label="Default select example">
                                                <option selected>Pilih Anjuran</option>
                                                <option value="1">PEJABAT AGAMA ISLAM DAERAH KUANTAN
                                                    KUANTAN
                                                    PAHANG
                                                </option>
                                                <option value="2">PEJABAT AGAMA ISLAM DAERAH BENTONG
                                                    BENTONG
                                                    PAHANG</option>
                                                <option value="3">PEJABAT AGAMA ISLAM DAERAH CAMERON HIGHLAND
                                                    CAMERON HIGHLANDS
                                                    PAHANG</option>
                                            </select>
                                        </div>

                                        <div class="mb-3 row" style="margin-top: 10px;">
                                            <label for="inputTempat" class="col-sm-2 col-form-label">Tempat Kursus</label>
                                            <div class="col-sm-10">
                                                <select class="form-select" id="inputtempat" aria-label="Default select example">
                                                    <option selected>Pilih Tempat</option>
                                                    <option value="1">Masjid Negeri Pahang (Sultan Ahmad 1) Kuantan</option>
                                                    <option value="2">Masjid Bukit Setongkol (Kuantan)</option>
                                                    <option value="3">Masjid al-Munir Kampung Selamat (Kuantan)</option>
                                                </select>
                                            </div>

                                            <label for="inputDOB" class="col-sm-2 col-form-label">Tarikh Mula</label>
                                            <div class="col-sm-10">
                                                <input type="date" class="form-control" id="inputDOBstart">
                                            </div>
                                            <label for="inputDOB" class="col-sm-2 col-form-label">Tarikh Akhir</label>
                                            <div class="col-sm-10">
                                                <input type="date" class="form-control" id="inputDOBfinish">
                                            </div>
                                            <label for="inputIC" class="col-sm-2 col-form-label">No Kad Pengenalan</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputIC">
                                            </div>
                                            <label for="inputNama" class="col-sm-2 col-form-label">Nama Pemohon</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputNama">
                                            </div>
                                            <label for="inputAlamat" class="col-sm-2 col-form-label">Alamat Semasa</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" id="inputAlamat" rows="3"></textarea>
                                            </div>

                                            <div class="mb-3 row" style="margin-top: 10px;">
                                                <label for="inputsektor" class="col-sm-2 col-form-label">Sektor Pekerjaan</label>
                                                <div class="col-sm-10">
                                                    <select class="form-select" id="inputsektor" aria-label="Default select example">
                                                        <option selected>Pilih Sektor</option>
                                                        <option value="1">Kerajaan</option>
                                                        <option value="2">Swasta</option>
                                                        <option value="3">Tiada</option>
                                                    </select>
                                                </div>

                                                <div class="mb-3 row" style="margin-top: 10px;">
                                                    <label for="inputjantina" class="col-sm-2 col-form-label">Jantina</label>
                                                    <div class="col-sm-10">
                                                        <select class="form-select" id="inputtempat" aria-label="Default select example">
                                                            <option selected>Pilih Jantina</option>
                                                            <option value="1">Lelaki</option>
                                                            <option value="2">Perempuan</option>
                                                        </select>
                                                    </div>

                                                    <div class="mb-3 row" style="margin-top: 10px;">
                                                        <label for="inputpendidikan" class="col-sm-2 col-form-label">Tahap Pendidikan</label>
                                                        <div class="col-sm-10">
                                                            <select class="form-select" id="inputpendidikan" aria-label="Default select example">
                                                                <option selected>Pilih Tahap</option>
                                                                <option value="1">UPSR</option>
                                                                <option value="2">PT3</option>
                                                                <option value="3">SPM</option>
                                                                <option value="4">Diploma</option>
                                                                <option value="5">Degree</option>
                                                                <option value="6">Master</option>
                                                                <option value="7">PHD</option>

                                                            </select>
                                                        </div>

                                                        <label for="inputTelefon" class="col-sm-2 col-form-label">No Telefon</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="inputTelefon">
                                                        </div>
                                                    </div>



                                                    <div class="d-flex justify-content-center">
                                                        <button type="button" class="btn btn-success">SUBMIT</button>
                                                        &nbsp;&nbsp;&nbsp;
                                                    </div>
                            </form>
                            <br><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"></script>
</body>

</html>