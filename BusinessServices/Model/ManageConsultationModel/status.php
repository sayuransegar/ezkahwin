<?php
require_once __DIR__ . '/../db.php';

class status extends Connection
{
    public function updateStatus($consultationID, $status)
    {
        try {
            $connection = $this->getConnection();
            $query = "UPDATE complaint SET status = ? WHERE consultation_ID = ?";
            $stmt = $connection->prepare($query);
            $stmt->bind_param("si", $status, $consultationID);

            if (!$stmt->execute()) {
                throw new Exception("Error executing query: " . $stmt->error);
            }

            $stmt->close();
            return true;
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }
}
