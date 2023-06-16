<?php

require_once 'C:\xampp\htdocs\ezkahwin\BusinessServices\Model\MarriageCardModel\MarriageCardApprovalModel.php';


class cardList extends MarriageCard
{
    public function getCard()
    {
        $dataCard = new MarriageCard();
        $dataCardResult = $dataCard->getAllCard();

        return $dataCardResult;
    }
}