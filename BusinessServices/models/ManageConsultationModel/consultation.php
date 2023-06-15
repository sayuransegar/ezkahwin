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
            $query = "SELECT consultation_ID, consultation_date, consultation_time FROM consultation";
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
            $consultationData = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $consultationData;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return null;
        }
    }

    public function getDataStatus()
    {
        try {
            $query = "SELECT status_ID, status_type FROM status";
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
            $statusData = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $statusData;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return null;
        }
    }
}
