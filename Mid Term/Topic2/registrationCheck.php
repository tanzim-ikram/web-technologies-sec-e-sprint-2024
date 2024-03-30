<?php

$firstNameError = "";
$lastNameError = "";
$dobError = "";
$genderError = "";
$phoneNumberError = "";
$emailError = "";
$passwordError = "";
$confirmPasswordError = "";


if (isset($_POST['submit'])) {
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $day = $_POST['day'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
    $phoneNumber = $_POST['phoneNumber'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    
    // First Name validation
    if (empty($firstName)) {
        $firstNameError = "Please enter your first name";
    }
    else {
        $nameLen = explode(' ', $firstName);
        if (count($nameLen) < 2) {
            $firstNameError = 'First Name can not be less than 2 words';
        }
        else {
            foreach ($nameLen as $namePart) {
                if (!ctype_alnum(str_replace(['.', '-'], '', $namePart))) {
                    $firstNameError = "First Name must contain alphanumeric characters, period, or dash only";
                    break;
                    }
                }
            }
    }

    // Last Name validation
    if (empty($lastName)) {
        $lastNameError = "Please enter your first name";
    }
    else {
        $nameLen = explode(' ', $lastName);
        if (count($nameLen) > 1) {
            $lastNameError = 'Last Name can not be more than 1 word';
        }
        else {
            foreach ($nameLen as $namePart) {
                if (!ctype_alnum(str_replace(['.', '-'], '', $namePart))) {
                    $firstNameError = "First Name must contain alphanumeric characters, period, or dash only";
                    break;
                    }
                }
            }
    }

    // Date of Birth validation
    if (empty($day) || empty($month) || empty($year)) {
        $dobError = "Please enter your date of birth";
    } else {
        if (!is_numeric($day) || !is_numeric($month) || !is_numeric($year)) {
            $dobError = "Invalid date format";
        } else {
            if ($day < 1 || $day > 31 || $month < 1 || $month > 12 || $year < 1900 || $year > 2016) {
                $dobError = "Invalid date of birth";
            }
        }
    }


    // Password validation
    if (empty($password) || strlen($password) < 5) {
        $passwordError = "Password must not be less than five characters";
    } else {
        $hasSpecialChar = false;

        foreach (str_split($password) as $char) {
            if ($char == '@' || $char == '#' || $char == '%') {
                $hasSpecialChar = true;
                break;
            }
        }

        if (!$hasSpecialChar) {
            $passwordError = "Password must contain at least one of the special characters (@, #, $, %)";
        }
    }

    // Confirm password validation
    if (empty($confirmPassword) || $confirmPassword != $password) {
        $confirmPasswordError = "Passwords do not match";
    }

    // Email validation
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailError = "Invalid email format";
    }

    // Phone number validation
    if (strlen($phoneNumber) != 11 || $phoneNumber[0] != '0' || $phoneNumber[1] != '1') {
        $phoneNumberError = "Invalid phone number. Please try again";
    }

    // Gender validation
    if (empty($gender)) {
        $genderError = "Please select your gender";
    }
}

?>