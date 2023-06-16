<?php
// controller.php
require_once 'IncentiveProfile.php';

class ProfileController {
    private $incentiveProfile;

    public function __construct() {
        $this->incentiveProfile = new IncentiveProfile();
    }

    public function saveData($ic_number, $name, $birth_date, $birth_place, $address, $phone_number) {
        $this->incentiveProfile->saveData($ic_number, $name, $birth_date, $birth_place, $address, $phone_number);
    }

    public function searchData($ic_number) {
        return $this->incentiveProfile->searchData($ic_number);
    }
}

?>
