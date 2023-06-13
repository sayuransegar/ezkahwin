<?php
require_once __DIR__ . '/../../models/db.php';

class complaint extends Connection
{
    public function addComplaint($complaint_date, $complaint_desc)
    {
        try {
            $connection = $this->getConnection();
            $query = "INSERT INTO complaint (complaint_date, complaint_desc) VALUES (?, ?)";
            $stmt = $connection->prepare($query);
            $stmt->bind_param("ss", $complaint_date, $complaint_desc);
            $stmt->execute();
            $stmt->close();

            return true;
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }


    public function getDataComplaint()
    {
        try {
            $query = "SELECT complaint_ID, complaint_date, complaint_desc FROM complaint";
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
            $complaintData = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $complaintData;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return null;
        }
    }

    public function updateComplaint($complaint_ID, $complaint_date, $complaint_desc)
    {
        try {
            $connection = $this->getConnection();
            $query = "UPDATE complaint SET complaint_date = ?, complaint_desc = ? WHERE complaint_ID = ?";
            $stmt = $connection->prepare($query);
            $stmt->bind_param("ssi", $complaint_date, $complaint_desc, $complaint_ID);

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

    public function deleteComplaint($complaint_ID)
    {
        try {
            $connection = $this->getConnection();
            $query = "DELETE FROM complaint WHERE complaint_ID = ?";
            $stmt = $connection->prepare($query);
            $stmt->bind_param("i", $complaint_ID);

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
