<?php
require_once __DIR__ . '/../../Model/ManageConsultationModel/consultation.php';

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

    public function getDataConsultation()
    {
        try {
            $connection = $this->getConnection();
            $query = "SELECT consultation_ID, consultation_date, consultation_time FROM consultation";
            $result = mysqli_query($connection, $query);

            if (!$result) {
                throw new Exception("Error executing query: " . mysqli_error($connection));
            }

            $consultationData = mysqli_fetch_all($result, MYSQLI_ASSOC);
            mysqli_free_result($result);

            return $consultationData;
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
            return null;
        }
    }
}
