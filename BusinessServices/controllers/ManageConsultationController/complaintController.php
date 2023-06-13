<?php
require_once __DIR__ . '/../../models/ManageConsultationModel/complaint.php';

class complaintController extends complaint
{
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

    public function getDataComplaint()
    {
        try {
            $connection = $this->getConnection();
            $query = "SELECT complaint_ID, complaint_date, complaint_desc FROM complaint";
            $result = mysqli_query($connection, $query);

            if (!$result) {
                throw new Exception("Error executing query: " . mysqli_error($connection));
            }

            $complaintData = mysqli_fetch_all($result, MYSQLI_ASSOC);
            mysqli_free_result($result);

            return $complaintData;
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
            return null;
        }
    }

    public function latestComplaint($complaint_ID, $complaint_date, $complaint_desc)
    {
        $updatecomplaintModel = new complaint();
        $Result = $updatecomplaintModel->updateComplaint($complaint_ID, $complaint_date, $complaint_desc);

        if (!$Result) {
            echo "Failed"; // Debugging statement
            header("refresh:3; ../../ezkahwin/App/ManageConsultation/complaintForm.php");
        } else {
            header("Location: ../../ezkahwin/App/ManageConsultation/complaintForm.php");
            exit();
        }
    }

    public function deleteComplaint($complaint_ID)
    {
        $deletecomplaintModel = new complaint();
        $result = $deletecomplaintModel->deleteComplaint($complaint_ID);

        if ($result) {
            // Deletion successful
            header("Location: ../../ezkahwin/App/ManageConsultation/complaintForm.php");
            exit();
        } else {
            // Deletion failed
            echo "Failed to delete complaint.";
            header("refresh:3; ../../ezkahwin/App/ManageConsultation/complaintForm.php");
        }
    }
}
