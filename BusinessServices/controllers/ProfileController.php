<?php
// controller.php
require_once 'ProfileController.php';

class Controller {
    private $model;

    public function __construct() {
        $this->model = new Model();
    }

    public function getData($ic_number) {
        return $this->model->getData($ic_number);
    }
}
?>
