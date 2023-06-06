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
                    <h1 class="h3 m-0">Aduan/Khidmat Nasihat</h1>
                </div>
                <div class="contentBox mt-3">
                    <div class="desc">
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
                                        <th style="text-align: center;" scope="col">TARIKH</th>
                                    </tr>
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                        <th colspan="2" scope="col"></th>
                                    </tr>
                                    <thead>
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col"></th>
                                            <th scope="col"></th>
                                            <th scope="col"></th>
                                            <th scope="col"></th>
                                            <th colspan="2" scope="col"></th>
                                        </tr>
                                    </thead>
                                    <thead>
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col"></th>
                                            <th scope="col"></th>
                                            <th scope="col"></th>
                                            <th scope="col"></th>
                                            <th colspan="2" scope="col"></th>
                                        </tr>
                                    </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"></script>
</body>

</html>