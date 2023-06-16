<?php

require_once __DIR__ . '/../../Model/MANAGEUSERMODEL/ManageUser.php';


class editprofileController extends ManageUser
{
  public function profile($email, $name, $gender, $phonenum, $address, $id)
  {
    $manageUser = new ManageUser();
    $profileEditResult = $manageUser->editProfile($email, $name, $gender, $phonenum, $address, $id);

    if (!$profileEditResult) {
      echo "Failed Register"; // Debugging statement
      header("refresh:3; ../../ezkahwin/App/ManageUser/editprofile.php");
    } else {
      echo "Profile Updated";
      header("Location: ../../ezkahwin/App/ManageUser/editprofile.php");
      exit();
    }
  }
}
