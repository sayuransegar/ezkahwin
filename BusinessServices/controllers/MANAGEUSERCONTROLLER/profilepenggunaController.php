<?php

require_once 'C:\xampp\htdocs\ezkahwin\BusinessServices\Model\MANAGEUSERMODEL\staff.php';


class allUserData extends staff
{
    public function getUsersData()
    {
        $dataUser = new staff();
        $dataUserResult = $dataUser->getAllUsers();

        return $dataUserResult;
    }
}

