<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="mainApplicant.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    
    <title>Aduan/Khidmat Nasihat</title>
</head>
<body>

    <div class="header">
        <img src="newbanner.png" class="img-fluid">
    </div>

    <div class="sidebar">
        <a href="#home">Profil Pengguna</a>
        <a href="#news">Permohonan Perkahwinan</a>
        <a href="#contact">Pendaftaran Perkahwinan</a>
        <a href="ICVerification.php">Aduan/Khidmat Nasihat</a>
        <a href="#insentif">Insentif</a>
        <a href="#logout">Log Keluar</a>
    </div>

    <div class="content">
        
        <div class="p-2 mb-2 custom-bg-color text-white">
            <span class="h6">ADUAN/KHIDMAT NASIHAT</span>
        </div>

        <div style="margin-top: 100px;">
            <form class="row g-3">
                <h6 align="center">NO KAD PENGENALAN / PASSPORT</h6><br><br>
                <div class="d-flex justify-content-center">
                    <input type="text" style="width: 300px; height: 35px;" class="form-control form-control-sm" id="inputIC">
                    &nbsp;&nbsp;&nbsp;
                    <button type="submit" onclick="window.location.href = 'listOfApplication.php';" class="btn btn-primary mb-3">CARIAN</button>
                </div>
                    <div class="d-flex justify-content-center">
                        <div style="margin-top: 40px; width: 750px;">
                            <input style="text-align: center;" class="form-control" type="text" value="CATATAN: Sila masukkan nombor kad pengenalan pasangan anda untuk tujuan pengesahan" aria-label="readonly input example" readonly>
                        </div>
                    </div>
            </form>  
        </div>
    </div>
</body>
</html>
