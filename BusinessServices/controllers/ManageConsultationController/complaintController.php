<?php
require_once __DIR__ . '/../../models/ManageConsultationModel/complaint.php';
//require_once __DIR__ . '/../../models/ManageConsultationModel/consultation.php';
//require_once __DIR__ . '/../../models/ManageConsultationModel/status.php';

class complaintController extends complaint {
    public function complaint($complaint_date, $complaint_desc)
    {
        $addcomplaintModel = new complaint();
        $Result = $addcomplaintModel->addComplaint($complaint_date, $complaint_desc);

        if (!$Result) {
            echo "Failed"; // Debugging statement
            header("refresh:3; ../../ezkahwin/App/ManageConsultation/complaintForm.php");
        } else {
            header("Location: ../../ezkahwin/App/ManageConsultation/complaintForm.php");
            exit();
        }
    }
}

?>