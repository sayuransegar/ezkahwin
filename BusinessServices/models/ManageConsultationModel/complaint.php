<?php
require_once __DIR__ . '/../../models/db.php';

class complaintModel extends Connection
{
    public function addComplaint($complaint_date, $complaint_desc)
    {
        $connection = $this->getConnection();

        $query = "INSERT INTO complaint VALUES (0, '$complaint_date', '$complaint_desc')";

        $result = mysqli_query($connection, $query);

        if (!$result){
            return false;
        } else{
            return $result;
        }
    }
}
