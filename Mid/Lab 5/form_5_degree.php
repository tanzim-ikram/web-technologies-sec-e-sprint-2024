<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectedDegrees = 0;
    $degrees = ['SSC', 'HSC', 'BSc', 'MSc'];
    $error = "";

    foreach ($degrees as $degree) {
        if (isset($_POST[$degree])) {
            $selectedDegrees++;
        }
    }

    if ($selectedDegrees < 2) {
        $error = "You must select at least two degrees.";
    } else {
        $error = "Form submitted successfully.";
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
    <title>Degree Form</title>
</head>
<body>
<form noValidate=true method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <fieldset style="width:250px">
            <legend>Degree</legend>
            <input type="checkbox" name="options1" value="option1">  SSC
            <input type="checkbox" name="options2" value="option2">  HSC
            <input type="checkbox" name="options3" value="option3">  BSc
            <input type="checkbox" name="options4" value="option4">  MSc
            <hr>
            <input type="submit" name="" value="Submit" />
        </fieldset>
    </form>
</body>
</html>