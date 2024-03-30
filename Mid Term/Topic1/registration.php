<?php

    require_once('../Topic2/registrationCheck.php')

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
                                    &nbsp; dd &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; mm &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; yyyy 
                                    <br>
                                    &nbsp;<input type="text" name="day" size="3px"> / <input type="text" name="month" size="3px"> / <input type="text" name="year" size="4px">
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
                                <td colspan="2" align="center">
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