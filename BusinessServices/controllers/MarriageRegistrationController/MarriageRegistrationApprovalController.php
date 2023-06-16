<?php

require_once 'C:\xampp\htdocs\ezkahwin\BusinessServices\Model\MarriageRegistrationModel\MarriageRegistrationApproval.php';


class updateMarriageStatus extends MarriageRegistrationApproval
{

    public function updateMarriageStatus($marriageId, $status)
    {
        $marriageRegistrationApproval = new MarriageRegistrationApproval();
        $marriageRegistrationApproval->updateMarriageStatus($marriageId, $status);

        header("Location: ../../ezkahwin/App/MarriageRegistration/MarriageRegistrationListAdmin");
        exit();
    }
}