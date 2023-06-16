<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Header and Sidebar Example</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../../../ezkahwin/public/css/styles.css">
</head>

<body>
    <?php include "../Component/header.php"; ?>

    <div class="container-fluid">
        <div class="row">
            <?php 
            $activePage = 'pendaftaran';
            include "../Component/sidebar.php"; 
            ?>

            <div class="col-md-9 content">
                <div class="content-title bg-primary text-white p-3">
                    <h1 class="h3 m-0">Pendaftaran Perkahwinan</h1>
                </div>
                <div class="contentBox mt-3">
                    <div class="card-header mb-3">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" data-bs-toggle="tab" href="#maklumatSuami">Maklumat Suami</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#maklumatIsteri">Maklumat Isteri</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#maklumatPerkahwinan">Maklumat Perkahwinan</a>
                            </li>
                        </ul>
                    </div>
                    <?php
                        require_once 'C:\xampp\htdocs\ezkahwin\BusinessServices\controllers\MarriageRegistrationController\NewMarriageRegistrationController.php';

                        $newRegister = new newMarriageController();
                        $data = $newRegister->displayAllData(); 
                    ?>
                    <div class="card-body">
                        <div class="tab-content">
                            <div id="maklumatSuami" class="tab-pane fade show active">
                                <div class="row g-3">
                                    <?php if ($data) : ?>
                                    <div class="col-md-4">
                                        <label for="firstname" class="form-label">No. Kad Penganalan</label>
                                        <input type="text" class="form-control" id="firstname" value="<?php echo $data['icnum']; ?>" readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="lastname" class="form-label">Nama Suami</label>
                                        <input type="text" class="form-control" id="lastname" value="<?php echo $data['name']; ?>" readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="username" class="form-label">Tarikh Lahir</label>
                                        <input type="text" class="form-control" id="username" value="<?php echo $data['applicant_dob']; ?>" readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="inputState" class="form-label">Bangsa</label>
                                        <input type="text" class="form-control" id="inputCity" value="<?php echo $data['applicant_race']; ?>" readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="inputAcademic1" class="form-label">Taraf Pendidikan</label>
                                        <input type="text" class="form-control" id="inputAcademic1" value="<?php echo $data['applicant_levelOfEducation']; ?>" readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="inputSocialAcc" class="form-label">Nama Pekerjaan</label>
                                        <input type="text" class="form-control" id="inputSocialAcc" value="<?php echo $data['applicant_JOB']; ?>" readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="inputSocialAcc" class="form-label">Pendapatan</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">RM</span>
                                            <input type="text" class="form-control" id="inputSocialAcc" value="<?php echo $data['applicant_salary']; ?>" readonly>
                                        </div> 
                                    </div>
                                    <div class="col-md-4">
                                        <label for="inputSocialAcc" class="form-label">No. Telefon</label>
                                        <input type="text" class="form-control" id="inputSocialAcc" value="<?php echo $data['phonenum']; ?>" readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="inputSocialAcc" class="form-label">Status Perkahwinan</label>
                                        <input type="text" class="form-control" id="inputSocialAcc" value="<?php echo $data['applicant_marriage_status']; ?>" readonly>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="inputBio" class="form-label">Alamat</label>
                                        <textarea class="form-control" id="inputBio" readonly><?php echo $data['applicant_address']; ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div id="maklumatIsteri" class="tab-pane fade">
                                <div class="row g-3">
                                    <div class="col-md-4">
                                        <label for="firstname" class="form-label">No. Kad Penganalan</label>
                                        <input type="text" class="form-control" id="firstname" value="<?php echo $data['partner_ic']; ?>" readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="lastname" class="form-label">Nama Isteri</label>
                                        <input type="text" class="form-control" id="lastname" value="<?php echo $data['partner_name']; ?>" readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="username" class="form-label">Tarikh Lahir</label>
                                        <input type="text" class="form-control" id="username" value="<?php echo $data['partner_dob']; ?>" readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="inputState" class="form-label">Bangsa</label>
                                        <input type="text" class="form-control" id="inputCity" value="<?php echo $data['partner_race']; ?>" readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="inputSocialAcc" class="form-label">No. Telefon</label>
                                        <input type="text" class="form-control" id="inputSocialAcc" value="<?php echo $data['partner_phone_num']; ?>" readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="inputSocialAcc" class="form-label">Status Perkahwinan</label>
                                        <input type="text" class="form-control" id="inputSocialAcc" value="<?php echo $data['partner_marriage_status']; ?>" readonly>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="inputBio" class="form-label">Alamat</label>
                                        <textarea class="form-control" id="inputBio" readonly><?php echo $data['partner_address']; ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="maklumatPerkahwinan" class="tab-pane fade">
                            <div class="row g-3">
                                <div class="col-md-12 bg-primary text-white p-2">
                                    <h5 class="m-0">Maklumat Perkahwinan</h5>
                                </div>
                                <div class="col-md-4">
                                    <label for="firstname" class="form-label">Tarikh Mohon</label>
                                    <input type="text" class="form-control" id="firstname" value="<?php echo $data['marriage_date']; ?>" readonly>
                                </div>
                                <div class="col-md-4">
                                    <label for="lastname" class="form-label">Nama Suami</label>
                                    <input type="text" class="form-control" id="lastname" value="<?php echo $data['name']; ?>" readonly>
                                </div>
                                <div class="col-md-4">
                                    <label for="username" class="form-label">Nama Isteri</label>
                                    <input type="text" class="form-control" id="username" value="<?php echo $data['partner_name']; ?>" readonly>
                                </div>
                                <div class="col-md-4">
                                    <label for="inputCity" class="form-label">Tarikh Akad Nikah</label>
                                    <input type="text" class="form-control" id="inputCity" value="<?php echo $data['solemnization_date']; ?>" readonly>
                                </div>
                                <div class="col-md-4">
                                    <label for="inputState" class="form-label">Tempat Akad Nikah</label>
                                    <input type="text" class="form-control" id="inputCity" value="<?php echo $data['marriage_address']; ?>" readonly>
                                </div>
                                <div class="col-md-4">
                                    <label for="inputEmail" class="form-label">Mas Kahwin</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">RM</span>
                                        <input type="email" class="form-control" id="inputEmail" value="<?php echo $data['amount_dowry']; ?>  " readonly>
                                    </div> 
                                </div>
                                <div class="col-md-12 bg-primary text-white p-2">
                                    <h5 class="m-0">Maklumat Wali</h5>
                                </div>
                                <div class="col-md-4">
                                    <label for="inputAcademic1" class="form-label">Nama Wali</label>
                                    <input type="text" class="form-control" id="inputAcademic1" value="<?php echo $data['guardian_name']; ?>" readonly>
                                </div>
                                <div class="col-md-4">
                                    <label for="inputSocialAcc" class="form-label">No. Kad Pengenalan Wali</label>
                                    <input type="text" class="form-control" id="inputSocialAcc" value="<?php echo $data['guardian_IC']; ?>" readonly>
                                </div>
                                <div class="col-md-4">
                                    <label for="inputSocialAcc" class="form-label">No. Telefon Wali</label>
                                    <input type="text" class="form-control" id="inputSocialAcc" value="<?php echo $data['guardian_phone_number']; ?>" readonly>
                                </div>
                                <div class="col-md-12">
                                    <label for="inputBio" class="form-label">Alamat Wali</label>
                                    <textarea class="form-control" id="inputBio" readonly><?php echo $data['guardian_address']; ?></textarea>
                                </div>
                                <div class="col-md-12 bg-primary text-white p-2">
                                    <h5 class="m-0">Maklumat Saksi</h5>
                                </div>
                                <div class="col-md-4">
                                    <label for="inputAcademic1" class="form-label">Nama Saksi Pertama</label>
                                    <input type="text" class="form-control" id="inputAcademic1" value="<?php echo $data['witness1_name']; ?>" readonly>
                                </div>
                                <div class="col-md-4">
                                    <label for="inputSocialAcc" class="form-label">No. Kad Pengenalan Saksi Pertama</label>
                                    <input type="text" class="form-control" id="inputSocialAcc" value="<?php echo $data['witness1_IC']; ?>" readonly>
                                </div>
                                <div class="col-md-4">
                                    <label for="inputSocialAcc" class="form-label">No. Telefon Saksi Pertama</label>
                                    <input type="text" class="form-control" id="inputSocialAcc" value="<?php echo $data['witness1_phone_number']; ?>" readonly>
                                </div>
                                <div class="col-md-12">
                                    <label for="inputBio" class="form-label">Alamat Saksi Pertama</label>
                                    <textarea class="form-control" id="inputBio" readonly><?php echo $data['witness1_address']; ?></textarea>
                                </div>
                                <div class="col-md-4">
                                    <label for="inputAcademic1" class="form-label">Nama Saksi Kedua</label>
                                    <input type="text" class="form-control" id="inputAcademic1" value="<?php echo $data['witness2_name']; ?>" readonly>
                                </div>
                                <div class="col-md-4">
                                    <label for="inputSocialAcc" class="form-label">No. Kad Pengenalan Saksi Kedua</label>
                                    <input type="text" class="form-control" id="inputSocialAcc" value="<?php echo $data['witness2_IC']; ?>" readonly>
                                </div>
                                <div class="col-md-4">
                                    <label for="inputSocialAcc" class="form-label">No. Telefon Saksi Kedua</label>
                                    <input type="text" class="form-control" id="inputSocialAcc" value="<?php echo $data['witness2_phone_number']; ?>" readonly>
                                </div>
                                <div class="col-md-12">
                                    <label for="inputBio" class="form-label">Alamat Saksi Kedua</label>
                                    <textarea class="form-control" id="inputBio" readonly><?php echo $data['witness2_address']; ?></textarea>
                                </div>
                                <div class="col-md-2">
                                    <button type="back" class="btn btn-secondary">Kembali</button>
                                    <button type="submit"  onclick="window.location.href = 'MarriageRegistrationSuccess.php';" class="btn btn-primary">Daftar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php else : ?>
                        <div class="contentBox mt-3">
                            <p>No data found.</p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>