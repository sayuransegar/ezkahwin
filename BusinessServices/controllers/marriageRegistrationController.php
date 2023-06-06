<?php

require_once 'BusinessServices/models/marriageRegistrationModel.php';

class MarriageRegistrationController
{
    public function index()
    {
        $marriageRegistrationModel = new MarriageRegistrationModel();
        $data = $marriageRegistrationModel->getApplicantData();

        renderView('App/complaintForm.php', compact('data'));

    }
}

function renderView($viewFile, $data = [])
{
    if (!empty($data)) {
        extract($data);
    }

    require_once $viewFile;
}
