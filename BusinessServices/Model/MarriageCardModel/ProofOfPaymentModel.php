<?php
require_once 'C:\xampp\htdocs\ezkahwin\BusinessServices\Model\db.php';

class ProofOfPaymentModel extends Connection
{
    public function addPayment($proofofpayment)
    {
        $connection = $this->getConnection();
        $query = "INSERT INTO marriagecard VALUE (0, NULL, NULL, '$proofofpayment', NULL, NULL)";

        $result = mysqli_query($connection, $query);
        if (!$result) {
            return false;
        } else {
            return $result;
        }
    }

}
