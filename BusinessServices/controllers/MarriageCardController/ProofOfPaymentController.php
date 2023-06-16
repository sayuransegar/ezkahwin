<?php

require_once 'C:\xampp\htdocs\ezkahwin\BusinessServices\Model\MarriageCardModel\ProofOfPaymentModel.php';

class newMarriageCard extends Connection
{
    public function marriageCard($proofofpayment)
    {

        $proof_of_payment = new ProofOfPaymentModel();
        $card = $proof_of_payment->addPayment($proofofpayment);

        if (!$card) {
            echo "Faild Register"; // Debugging statement
            header("refresh:3; ../../ezkahwin/App/MarriageCard/ProofOfPayment.php");
        } else {
            header("Location: ../../ezkahwin/App/MarriageCard/ProofOfPaymentSuccess.php");
            exit();
        }
    }
}