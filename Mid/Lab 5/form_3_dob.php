<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $day = $_POST['day'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    $error = "";

    if (empty($day) || empty($month) || empty($year)) {
        $error = "All fields are required.";
    } elseif (!is_numeric($day) || !is_numeric($month) || !is_numeric($year)) {
        $error = "Day, month, and year must be valid numbers.";
    } elseif ($day < 1 || $day > 31 || $month < 1 || $month > 12 || $year < 1953 || $year > 1998) {
        $error = "Invalid date. Please follow the validation rules.";
    } else {
        $error = "Date of birth is valid.";
    }

    if ($error) {
        echo "<script>alert('$error');</script>";
    } else {
        echo "<script>alert('Form submitted successfully!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOB Form</title>
</head>

<body>
<form method="post" action="<?php $error = htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <fieldset style="width:200px">
            <legend>Date of Birth</legend>
            &nbsp; dd &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; mm &nbsp;&nbsp; yyyy 
            <br>
            <input type="text" name="day" size="2px"> / <input type="text" name="month" size="2px"> / <input type="text" name="year" size="2px">
            <hr width="180px" align="left">
            <input type="submit" name="" value="Submit" />
        </fieldset><br>
    </form>
</body>

</html>