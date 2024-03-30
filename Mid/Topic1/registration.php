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
    $dob = $_POST['dob'];
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
                for ($i = 0; $i < strlen($firstName); $i++) {
                    $char = $firstName[$i];

                    if (!ctype_alnum($char) && $char != '.' && $char != '-' && $char != '_') {
                        $firstNameError = "Username must contain alphanumeric characters, period, dash, or underscore only";
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
        $nameLen = explode(' ', $lasttName);
        if (count($nameLen) > 1) {
            $lastNameError = 'Last Name can not be more than 1 word';
        }
        else {
                for ($i = 0; $i < strlen($lastName); $i++) {
                    $char = $lastName[$i];

                    if (!ctype_alnum($char) && $char != '.' && $char != '-' && $char != '_') {
                        $lastNameError = "Username must contain alphanumeric characters, period, dash, or underscore only";
                        break;
                    }
                }
            }
    }

    // Date of Birth validation
    if (empty($dob)) {
        $dobError = "Please enter your date of birth";
    } else {
        // Split the date into day, month, and year
        $dobParts = explode('-', $dob);
        
        // Ensure there are three parts (day, month, year)
        if (count($dobParts) != 3) {
            $dobError = "Invalid date format";
        } else {
            // Extract day, month, and year from the parts
            $day = $dobParts[2];
            $month = $dobParts[1];
            $year = $dobParts[0];
            
            // Check if day, month, and year are numeric
            if (!is_numeric($day) || !is_numeric($month) || !is_numeric($year)) {
                $dobError = "Invalid date format";
            } else {
                // Check if day, month, and year fall within valid ranges
                if ($day < 1 || $day > 31 || $month < 1 || $month > 12 || $year < 1900 || $year > 2016) {
                    $dobError = "Invalid date of birth";
                }
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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>

<body>
    <table align="center">
        <tr>
            <td>
                <form method="post" action="">
                    <fieldset>
                        <legend>Registration</legend>

                        <table width="100%">
                            <!-- First Name -->
                            <tr>
                                <td>First Name</td>
                                <td>:
                                    <input type="text" name="firstname" value="">
                                    <span class="error"><?php echo $firstNameError; ?></span>
                                </td>
                            </tr>

                            <tr>
                                <td colspan="2">
                                    <hr>
                                </td>
                            </tr>

                            <!-- Last Name -->
                            <tr>
                                <td>Last Name</td>
                                <td>:
                                    <input type="text" name="lastname" value="">
                                    <span class="error"><?php echo $lastNameError; ?></span>
                                </td>
                            </tr>

                            <tr>
                                <td colspan="2">
                                    <hr>
                                </td>
                            </tr>

                            <!-- DOB -->
                            <tr>
                                <td>Date of Birth</td>
                                <td>:
                                    <input type="date" name="dob" value="">
                                    <span class="error"><?php echo $dobError; ?></span>
                                </td>
                            </tr>

                            <tr>
                                <td colspan="2">
                                    <hr>
                                </td>
                            </tr>

                            <!-- Gender -->
                            <tr>
                                <td>Gender</td>
                                <td>:
                                    <input type="radio" name="gender" value="male">Male
                                    <input type="radio" name="gender" value="female">Female
                                    <span class="error"><?php echo $genderError; ?></span>
                                </td>
                            </tr>

                            <tr>
                                <td colspan="2">
                                    <hr>
                                </td>
                            </tr>

                            <!-- Phone -->
                            <tr>
                                <td>Phone Number</td>
                                <td>:
                                    <input type="text" name="phoneNumber" value="">
                                    <span class="error"><?php echo $phoneNumberError; ?></span>
                                </td>
                            </tr>

                            <tr>
                                <td colspan="2">
                                    <hr>
                                </td>
                            </tr>

                            <!-- Email -->
                            <tr>
                                <td>Email</td>
                                <td>:
                                    <input type="email" name="email" value="">
                                    <span class="error"><?php echo $emailError; ?></span>
                                </td>
                            </tr>

                            <tr>
                                <td colspan="2">
                                    <hr>
                                </td>
                            </tr>

                            <!-- Password -->
                            <tr>
                                <td>Password</td>
                                <td>:
                                    <input type="password" name="password" value="">
                                    <span class="error"><?php echo $passwordError; ?></span>
                                </td>
                            </tr>

                            <tr>
                                <td colspan="2">
                                    <hr>
                                </td>
                            </tr>

                            <!-- Confirm Password -->
                            <tr>
                                <td>Confirm Password</td>
                                <td>:
                                    <input type="password" name="confirmPassword"value="">
                                    <span class="error"><?php echo $confirmPasswordError; ?></span>
                                </td>
                            </tr>

                            <tr>
                                <td colspan="2">
                                    <hr>
                                </td>
                            </tr>

                            <tr>
                                <td colspan="2">
                                    <input type="submit" value="Submit" name="submit">
                                    <input type="reset" value="Reset">
                                </td>
                            </tr>
                        </table>
                    </fieldset>
                </form>
            </td>
        </tr>
    </table>

</body>

</html>