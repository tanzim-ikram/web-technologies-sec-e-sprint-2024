<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $error = "";
    if (empty($_POST["bloodGroup"])) {
        $error = "Blood group is required";
    } else {
        $error = "Submission successful";
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
    <title>Blood Group Form</title>
</head>

<body>
<form noValidate=true method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <fieldset style="width:250px">        
        <legend>
            Blood Group &nbsp;
        </legend>
        <select id="bloodGroup" name="bloodGroup">
            <option value="">Select</option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="AB">AB</option>
            <option value="B+">B+</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
        </select>
        <hr width="150px" align="left">
        <input type="submit" name="" value="Submit" />
    </fieldset>
    </form>
</body>

</html>