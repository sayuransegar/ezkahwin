<?php
require_once __DIR__ . '/../../models/ManageConsultationModel/consultation.php';

class consultationController extends consultation
{
    public function consultation($consultation_session_no, $consultation_additional, $consultation_date,  $consultation_time)
    {
        $addconsultationModel = new consultation();
        $result = $addconsultationModel->addConsultation($consultation_session_no, $consultation_additional, $consultation_date,  $consultation_time);

        if (!$result) {
            echo "Failed"; // Debugging statement
            header("refresh:3; ../../ezkahwin/App/ManageConsultation/sessionInterface.php");
        } else {
            header("Location: ../../ezkahwin/App/ManageConsultation/listOfApplication.php");
            exit();
        }
    }
}
