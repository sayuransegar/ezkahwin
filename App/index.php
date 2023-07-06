<?php
require_once 'controller/ViewRequestMarriageInterfaceApplicantController.php';
require_once 'controller/WitnessController.php';
require_once 'controller/CourseController.php';


require_once 'controller/MarriageController.php';
require_once 'controller/GuardianController.php';

$action = $_GET['action'] ?? '';

switch ($action) {
    case 'ViewRequestMarriageInterfaceApplicant':
        $ViewRequestMarriageInterfaceApplicantController = new ViewRequestMarriageInterfaceApplicantController();
        $ViewRequestMarriageInterfaceApplicantController->showForm();
        break;
    case 'marriage':
        $marriageController = new MarriageController();
        $marriageController->showForm();
        break; 
        case 'course':
            $courseController = new CourseController();
            $courseController->showForm();
            break;     
    case 'guardian':
            $guardianController = new GuardianController();
            $guardianController->showForm();
            break;  
    
     case 'witness':
                $witnessController = new WitnessController();
                $witnessController->showForm();
                break;  

    case 'partner':
        $partnerController = new PartnerController();
        $partnerController->showForm();
        break;
    
    case 'submitViewRequestMarriageInterfaceApplicant':
        $ViewRequestMarriageInterfaceApplicantController = new ViewRequestMarriageInterfaceApplicantController();
        $formData = $_POST;
        $ViewRequestMarriageInterfaceApplicantController->submitForm($formData);
        break;
    case 'submitMarriage':
        $marriageController = new MarriageController();
        $formData = $_POST;
        $marriageController->submitForm($formData);
        break;

    case 'submitGuardian':
            $guardianController = new GuardianController();
            $formData = $_POST;
            $guardianController->submitForm($formData);
            break;  

            case 'submitCourse':
                $courseController = new CourseController();
                $formData = $_POST;
                $courseController->submitForm($formData);
                break;  

    case 'submitWitness':
                $witnessController = new WitnessController();
                $formData = $_POST;
                $witnessController->submitForm($formData);
                break; 
     
    case 'submitPartner':
        $partnerController = new PartnerController();
        $formData = $_POST;
        $partnerController->submitForm($formData);
        break;
    
    default:
        // Handle invalid action
        echo "Invalid action";
}
?>
