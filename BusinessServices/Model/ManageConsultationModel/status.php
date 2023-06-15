<?php
require_once __DIR__ . '/../db.php';

class Status extends Connection
{
    public function getDataStatus()
    {
        try {
            $connection = $this->getConnection();
            $query = "SELECT status_ID, status_type FROM status";
            $result = mysqli_query($connection, $query);

            if (!$result) {
                throw new Exception("Error executing query: " . mysqli_error($connection));
            }

            $statusData = mysqli_fetch_all($result, MYSQLI_ASSOC);
            mysqli_free_result($result);

            return $statusData;
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
            return null;
        }
    }
}
