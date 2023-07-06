<?php
require_once 'model/MarriageModel.php';
class MarriageController
{
    private $marriageModel;

    public function __construct()
    {
        $this->marriageModel = new MarriageModel();
    }

    public function showForm()
    {
        // Display the marriage form view
        require_once 'view/MarriageInformationInterface.php';
    }

    public function submitForm($formData)
    {
        // Save the marriage form data in the database
        $this->marriageModel->saveMarriageData($formData);

        // Redirect to the next page
        header("Location: index.php?action=guardian");

        exit();
    }
}
