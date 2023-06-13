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
                    <h1 class="h3 m-0">ADUAN/KHIDMAT NASIHAT</h1>
                </div>
                <div class="contentBox mt-3">
                    <div class="desc">
                        <div style="margin-top: 100px;">
                            <form class="row g-3">
                                <h6 align="center">NO KAD PENGENALAN / PASSPORT</h6><br><br>
                                <div class="d-flex justify-content-center">
                                    <input type="text" style="width: 300px; height: 35px;" class="form-control form-control-sm" id="inputIC">
                                    &nbsp;&nbsp;&nbsp;
                                    <button type="button" onclick="window.location.href = 'applicationDetails.php';" class="btn btn-primary mb-3">CARIAN</button>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <div style="margin-top: 40px; width: 750px;">
                                        <input style="text-align: center;" class="form-control" type="text" value="CATATAN: Sila masukkan nombor kad pengenalan pasangan anda untuk tujuan pengesahan" aria-label="readonly input example" readonly>
                                    </div>
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