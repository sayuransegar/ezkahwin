<?php
require_once __DIR__ . '/../../models/ManageConsultationModel/complaint.php';
//require_once __DIR__ . '/../../models/ManageConsultationModel/consultation.php';
//require_once __DIR__ . '/../../models/ManageConsultationModel/status.php';

class complaintController extends complaintModel {
    public function getComplaint ($complaint_date, $complaint_desc) {
        $complaintModel = new complaintModel();
        $complaintResult = new $complaintModel->addComplaint($complaint_date, $complaint_desc);

        if (!$complaintResult) {
            echo "No result"; //Debugging statement
        }
        else {
            header("Location: listOfApplication.php");
            exit();
        }
    }
}

?>