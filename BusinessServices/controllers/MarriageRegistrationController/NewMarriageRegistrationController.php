<?php

require_once 'C:\xampp\htdocs\ezkahwin\BusinessServices\Model\MarriageRegistrationModel\marriageRegistrationModel.php';

class newMarriageController extends Connection
{
    public function newMarriage($marriage_category, $marriage_license_number)
    {

        $newmaddarriage = new MarriageRegistrationModel();
        $newmarriage = $newmaddarriage->addMarriage($marriage_category, $marriage_license_number);

        if (!$newmarriage) {
            echo "Faild Register"; // Debugging statement
            header("refresh:3; ../../ezkahwin/App/MarriageRegistration/MewMarriageRegistration.php");
        } else {
            header("Location: ../../ezkahwin/App/MarriageRegistration/MarriageRegistrationInfo.php");
            exit();
        }
    }

    public function displayAllData()
    {
        $allInfo = new MarriageRegistrationModel();
        $allMarriageData = $allInfo->displayInfo();

        return $allMarriageData;

    }
}
