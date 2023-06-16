<?php
// index (2).php

//if (isset($_POST['submit'])) {
    require_once 'C:\xampp\htdocs\ezkahwin\BusinessServices\controllers\IncentiveController\IncentiveController.php';
    $controller = new Controller();

    $process = isset($_GET['process']) ? $_GET['process']: '';

    if($process == "insertApplicant"){
        $ic = $_POST["ic"];
        $name = $_POST["name"];
        $tarikh = $_POST["tarikh"];
        $tempat = $_POST["tempat"];
        $alamat = $_POST["alamat"];
        $noTel = $_POST["noTel"];
            $controller->saveData($ic, $name, $tarikh, $tempat, $alamat, $noTel);
    }else{
        echo "no such process";
    }
    
//}
?>
