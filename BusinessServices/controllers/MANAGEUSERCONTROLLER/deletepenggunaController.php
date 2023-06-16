<?php

require_once __DIR__ . '/../../Model/MANAGEUSERMODEL/staff.php';

class deletePengguna extends staff
{
    public function deleteUser($id)
    {
        $manageUserModel = new staff();
        $manageUserModel->deleteUserById($id);

        header("Location: ../../ezkahwin/App/ManageUser/profilepengguna.php");
        exit();
    }
}
