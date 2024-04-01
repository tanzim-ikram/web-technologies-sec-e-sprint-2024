<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $error = "";
    if (empty($_POST["gender"])) {
        $error = "Gender is required";
    } else {
        $gender = $_POST["gender"];
        $error = "Gender selected: $gender";
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
    <title>Gender Form</title>
</head>
<body>
<form noValidate=true method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <fieldset style="width:310px">
            <legend>Gender</legend>
            <input type="radio" name="gender"> Male
            <input type="radio" name="gender"> Female
            <input type="radio" name="gender"> Other
            <hr>
            <input type="submit" name="" value="Submit" />
        </fieldset>        
    </form>
</body>
</html>