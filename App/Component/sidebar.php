<?php
if (isset($_COOKIE['user_data'])) {
    $userArray = json_decode($_COOKIE['user_data'], true);
    $icnum = $userArray['icnum'];
    $name = $userArray['name'];
}
?>

<div class="col-md-3 sidebar align-items-center">
    <div class="userinfo mt-3 d-flex flex-column align-items-center">
        <div class="box d-flex align-items-center">
            <div class="label me-1">ID</div>
            <div>: <?php echo $icnum; ?></div>
        </div>
        <div class="box d-flex align-items-center">
            <div class="label me-1">Nama</div>
            <div>: <?php echo $name; ?></div>
        </div>
    </div>
    <div class="sidebar-items w-auto mt-3">
        <ul class="nav flex-column">
            <li class="nav-item sidebar-item p-2 <?php echo $activePage === 'profil' ? 'active' : ''; ?>">
                <a class="nav-link" href="../../../ezkahwin/App/ManageUser/editprofile.php">Kemas Kini Profil</a>
            </li>
            <li class="nav-item sidebar-item p-2 <?php echo $activePage === 'kursus' ? 'active' : ''; ?>">
                <a class="nav-link" href="#">Permohonan Kursus Perkahwinan</a>
            </li>
            <li class="nav-item sidebar-item p-2 <?php echo $activePage === 'permohonan' ? 'active' : ''; ?>">
                <a class="nav-link" href="#">Permohonan Perkahwinan</a>
            </li>
            <li class="nav-item sidebar-item p-2 <?php echo $activePage === 'pendaftaran' ? 'active' : ''; ?>">
                <a class="nav-link" href="../../../ezkahwin-backup/index.php">Pendaftaran Perkahwinan</a>
            </li>
            <li class="nav-item sidebar-item p-2 <?php echo $activePage === 'kad' ? 'active' : ''; ?>">
                <a class="nav-link" href="../../../ezkahwin-backup/App/MarriageCard/ProofOfPayment.php">Kad Kahwin</a>
            </li>
            <li class="nav-item sidebar-item p-2 <?php echo $activePage === 'aduan' ? 'active' : ''; ?>">
                <a class="nav-link" href="../../../ezkahwin/App/ManageConsultation/IDVerification.php">Aduan/Khidmat Nasihat</a>
            </li>
            <li class="nav-item sidebar-item p-2 <?php echo $activePage === 'insentif' ? 'active' : ''; ?>">
                <a class="nav-link" href="#">Insentif</a>
            </li>
            <li class="nav-item sidebar-item sidebar-item-last p-2">
                <a class="nav-link" href="#">Log Keluar</a>
            </li>
        </ul>
    </div>
</div>