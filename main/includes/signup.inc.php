<?php

if(isset($_POST["patient_register_button"])) {

    $patient_email_address = $_POST["patient_email_address"];
    $patient_password = $_POST["patient_password"];
    $patient_first_name = $_POST["patient_first_name"];
    $patient_last_name = $_POST["patient_last_name"];
    $patient_gender = $_POST["patient_gender"];
    $patient_phone_no = $_POST["patient_phone_no"];
    $patient_addres = $_POST["patient_address"];
}
else {
    header("location: ../signup.php");
}