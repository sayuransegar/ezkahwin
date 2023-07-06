

<?php
require_once 'model/ViewRequestMarriageInterfaceApplicantModel.php';
class ViewRequestMarriageInterfaceApplicantController
{
    private $ViewRequestMarriageInterfaceApplicantModel;

    public function __construct()
    {
        $this->ViewRequestMarriageInterfaceApplicantModel = new ViewRequestMarriageInterfaceApplicantModel();
    }

    public function showForm()
    {
        // Display the applicant form view
        require_once 'view/ViewRequestMarriageInterfaceApplicant.php';
    }

    public function submitForm($formData)
    {
        // Save the applicant form data in the database
        $this->ViewRequestMarriageInterfaceApplicantModel->saveViewRequestMarriageInterfaceApplicantData($formData);

        // Redirect to the partner form
        header("Location: index.php?action=marriage");
        exit();
    }
}
class PartnerController
{
    private $partnerModel;

    public function __construct()
    {
        $this->partnerModel = new PartnerModel();
    }

    public function showForm()
    {
        // Display the partner form view
        require_once 'view/marriage.php';
    }

    public function submitForm($formData)
    {
        // Save the partner form data in the database
        $this->partnerModel->savePartnerData($formData);

       
    }
}
