<?php
// controller.php
require_once 'C:\xampp\htdocs\ezkahwin\BusinessServices\Model\IncentiveModel\IncentiveApplication.php';

class Controller {
    private $model;

    public function __construct() {
        $this->model = new Model();
    }

    public function saveData($ic, $name, $tarikh, $tempat, $alamat, $noTel) {
        $this->model->saveData($ic, $name, $tarikh, $tempat, $alamat, $noTel);
    }
}
?>
