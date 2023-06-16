<?php
require_once __DIR__ . '/../../MODEL/db.php';


class MarriageCard extends Connection {
    
    public function getAllCard()
    {
        $connection = $this->getConnection();
    
        $query = "SELECT * FROM marriagecard";
    
        $result = mysqli_query($connection, $query);
    
        $users = array();
    
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $users[] = $row;
            }
        }
    
        return $users;
    }

    public function updateCardStatus($marriageId, $status)
    {
        $connection = $this->getConnection();
    
        $query = "UPDATE marriagecard SET status = '$status' WHERE card_id = $marriageId";
    
        mysqli_query($connection, $query);
    }
    
}

?>