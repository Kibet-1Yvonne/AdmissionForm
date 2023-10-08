<?php
require_once('admission.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [
        'first_name' => $_POST['first_name'],
        'last_name' => $_POST['last_name'],
        'date_of_birth' => $_POST['date_of_birth'],
        'gender' => $_POST['gender'],
        // Add more fields as needed
    ];

    $admissionForm = new AdmissionForm();

    if ($admissionForm->submitForm($data)) {
        echo "Form submitted successfully.";
    } else {
        echo "Error submitting the form.";
    }
}
?>
