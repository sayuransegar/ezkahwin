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
            <?php include "../Component/sidebar.php"; ?>

            <div class="col-md-9 content">
                <div class="content-title bg-primary text-white p-3">
                    <h1 class="h3 m-0">Aduan/Khidmat Nasihat</h1>
                </div>
                <div class="contentBox mt-3">
                    <div class="desc">
                        <div style="margin-top: 30px; margin-left: 10px;">
                            <h6 align="left"><b>MAKLUMAT ADUAN</b></h6><br><br>
                            <form class="row g-3" action="../../../ezkahwin/index.php" method="POST">
                                <div class="mb-3 row" style="margin-top: 10px;">
                                    <label for="complaint_date" class="col-sm-2 col-form-label">Tarikh Aduan</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" id="complaint_date" name="complaint_date">
                                    </div>
                                    <label for="complaint_desc" class="col-sm-2 col-form-label">Penerangan Aduan</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" id="complaint_desc" name="complaint_desc" rows="5"></textarea>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-center">
                                    <button type="submit" name="submitcomplaint" class="btn btn-primary">HANTAR</button>
                                    &nbsp;&nbsp;&nbsp;
                                    <button type="button" class="btn btn-primary" onclick="window.location.href='applicationDetails.php'">BATAL</button>
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