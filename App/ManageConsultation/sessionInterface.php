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
    <?php include "../Component/header.php"; ?>

    <div class="container-fluid">
        <div class="row">
            <?php
            $activePage = 'aduan';
            include "../Component/sidebarStaff.php";
            ?>

            <div class="col-md-9 content">
                <div class="content-title bg-success text-white p-3">
                    <h1 class="h3 m-0">Aduan/Khidmat Nasihat</h1>
                </div>
                <div class="contentBox mt-3">
                    <div class="desc">
                        <div style="margin-top: 50px;">
                            <div style="margin-top: 30px; margin-left: 10px;">
                                <!--Connect to facade, to insert session details-->
                                <form class="row g-3" action="../../../ezkahwin/index.php" method="POST">
                                    <div class="mb-3 row" style="margin-top: 10px;">
                                        <label for="consultation_session_no" class="col-sm-2 col-form-label">No Sesi</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="consultation_session_no" name="consultation_session_no">
                                        </div>
                                        <label for="consultation_additional" class="col-sm-2 col-form-label">Sesi Tambahan</label>
                                        <div class="col-sm-10">
                                            <select class="form-select" id="consultation_additional" name="consultation_additional" aria-label="Default select example">
                                                <option selected>Perlu sesi tambahan?</option>
                                                <option value="Ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                        <label for="consultation_date" class="col-sm-2 col-form-label">Tarikh Janji Temu</label>
                                        <div class="col-sm-10">
                                            <input type="date" class="form-control" id="consultation_date" name="consultation_date">
                                        </div>
                                        <label for="consultation_time" class="col-sm-2 col-form-label">Masa Janji Temu</label>
                                        <div class="col-sm-10">
                                            <input type="time" class="form-control" id="consultation_time" name="consultation_time">
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn btn-primary" name="submitsession">HANTAR</button>
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                        <button type="button" class="btn btn-danger" onclick="window.location.href='listOfApplication.php'">BATAL</button>
                                    </div>
                                </form>
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