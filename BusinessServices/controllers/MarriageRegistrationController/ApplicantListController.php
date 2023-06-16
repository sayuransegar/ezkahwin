<?php

require_once 'C:\xampp\htdocs\ezkahwin\BusinessServices\Model\MarriageRegistrationModel\MarriageRegistrationApproval.php';


class applicantList extends MarriageRegistrationApproval
{
    public function getMarriage()
    {
        $dataMarriage = new MarriageRegistrationApproval();
        $dataMarriageResult = $dataMarriage->getAllMarriage();

        return $dataMarriageResult;
    }
}