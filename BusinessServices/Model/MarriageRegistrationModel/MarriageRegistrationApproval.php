<?php
require_once __DIR__ . '/../../MODEL/db.php';


class MarriageRegistrationApproval extends Connection {
    
    public function getAllMarriage()
    {
        $connection = $this->getConnection();
    
        $query = "SELECT * FROM marriageregistration";
    
        $result = mysqli_query($connection, $query);
    
        $users = array();
    
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $users[] = $row;
            }
        }
    
        return $users;
    }

    public function updateMarriageStatus($marriageId, $status)
    {
        $connection = $this->getConnection();
    
        $query = "UPDATE marriageregistration SET status = '$status' WHERE marriageregister_id = $marriageId";
    
        mysqli_query($connection, $query);
    }
    
}

?>