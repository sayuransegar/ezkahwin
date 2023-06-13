<?php
require_once __DIR__ . '/../models/ManageConsultationModel/consultation.php';

class ScheduleController
{
    private $consultationModel;

    public function __construct()
    {
        $this->consultationModel = new Consultation();
    }

    public function getDataConsultation()
    {
        // Call the method in the model to fetch the consultation data
        return $this->consultationModel->getDataConsultation();
    }
}