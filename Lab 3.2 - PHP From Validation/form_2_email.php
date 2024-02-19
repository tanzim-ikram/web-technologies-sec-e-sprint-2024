<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $error = "";

    if (empty($email)) {
        $error = "Email cannot be empty.";
    } 
    else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error = "Invalid email format.";
        } else {
            $error = "Email is valid.";
        }
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
    <title>Email Form</title>
</head>

<body>
    <form noValidate=true method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <fieldset style="width:310px">
            <legend>Email:</legend>
            <br>
            <input style="width:200px; display: inline-block;" type="email" name="email">
            <button title="hint: example@gmail.com">i</button>
            <hr style="width:100%">
            <input type="submit" value="Submit" />
        </fieldset>
    </form>
</body>

</html>