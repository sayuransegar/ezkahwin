<?php
require_once 'model/WitnessModel.php';
class WitnessController
{
    private $witnessModel;

    public function __construct()
    {
        $this->witnessModel = new WitnessModel();
    }

    public function showForm()
    {
        // Display the witness form view
        require_once 'view/WitnessInformationInterface.php';
    }

    public function submitForm($formData)
    {
        // Save the witness form data in the database
        $this->witnessModel->saveWitnessData($formData);

        // Redirect to the witness form
        header("Location: index.php?action=document");
        exit();
    }
}
