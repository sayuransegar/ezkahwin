<?php
require_once 'model/GuardianModel.php';
class GuardianController
{
    private $guardianModel;

    public function __construct()
    {
        $this->guardianModel = new GuardianModel();
    }

    public function showForm()
    {
        // Display the guardian form view
        require_once 'view/GuardianInformationInterface.php';
    }

    public function submitForm($formData)
    {
        // Save the guardian form data in the database
        $this->guardianModel->saveGuardianData($formData);

        // Redirect to the guardian form
        header("Location: index.php?action=witness");
        exit();
    }
}

