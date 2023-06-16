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
                    <h1 class="h3 m-0">Pendaftaran Baharu</h1>
                </div>
                <div class="contentBox mt-3">
                    <form action="../../../ezkahwin/index.php" method="POST">
                        <div class="desc">
                            <div class="mb-3">
                                <label for="selectInput" class="form-label">Kategori Pendaftaran Nikah</label>
                                <select class="form-select" id="selectInput" name="marriage_category">
                                    <option selected>Select an option</option>
                                    <option value="Perkahwinan dengan kebenaran">Perkahwinan dengan kebenaran</option>
                                    <option value="Perkahwinan tanpa kebenaran">Perkahwinan tanpa kebenaran</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="normalInput" class="form-label">No. Akuan Terima Kebenaran Berkahwin</label>
                                <input type="text" class="form-control" id="normalInput" name="marriage_license_number">
                            </div>
                        </div>
                        <div class="btnGroup text-center">
                            <button type="submit" name="submit" class="btn btn-primary">HANTAR</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"></script>
</body>

</html>