<?php

require_once 'C:\xampp\htdocs\ezkahwin\BusinessServices\Model\MarriageRegistrationModel\marriageRegistrationModel.php';

class MarriageRegistrationController
{
    public function displayPartner($partner_ic)
    {
        // Perform the necessary search and store the partner IC in a session variable
        $_SESSION['partner_ic'] = $partner_ic;
        
        // Redirect back to the view page
        header("Location: ../../ezkahwin/App/MarriageRegistration/MarriageRegistrationView.php");
        exit();
    }
}
?>

