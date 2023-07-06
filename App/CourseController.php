<?php
require_once 'model/CourseModel.php';
class CourseController
{
    private $courseModel;

    public function __construct()
    {
        $this->courseModel = new CourseModel();
    }

    public function showForm()
    {
        // Display the guardian form view
        require_once 'view/Course.php';
    }

    public function submitForm($formData)
    {
        // Save the guardian form data in the database
        $this->courseModel->saveCourseData($formData);

        // Redirect to the guardian form
        header("Location: index.php?action=upload");
        exit();
    }
}
