<?php
require_once __DIR__ . '/../db.php';

class consultation extends Connection
{
    public function addConsultation($consultation_session_no, $consultation_additional, $consultation_date,  $consultation_time)
    {
        $connection = $this->getConnection();
        $query = "INSERT INTO consultation VALUE (0, '$consultation_session_no', '$consultation_additional','$consultation_date', '$consultation_time')";

        $result = mysqli_query($connection, $query);
        if (!$result) {
            return false;
        } else {
            return $result;
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
