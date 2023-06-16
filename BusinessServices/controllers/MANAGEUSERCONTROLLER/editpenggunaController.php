<?php

require_once __DIR__ . '/../../Model/MANAGEUSERMODEL/staff.php';


class editPengguna extends staff
{
  public function editUser($id)
  {
      $manageUserModel = new staff();
      $user = $manageUserModel->getUserById($id);

      return $user;
  }

  public function userUpdate($email, $name, $gender, $phonenum, $address, $id)
  {
    $manageUser = new staff();
    $profileEditResult = $manageUser->updateUser($email, $name, $gender, $phonenum, $address, $id);

    if (!$profileEditResult) {
      echo "Failed Register"; // Debugging statement
      header("refresh:3; ../../ezkahwin/App/ManageUser/profilepengguna.php");
    } else {
      echo "Profile Updated";
      header("Location: ../../ezkahwin/App/ManageUser/profilepengguna.php");
      exit();
    }
  }
}