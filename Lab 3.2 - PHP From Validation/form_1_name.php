<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $error = "";

    if (empty($name)) {
        $error = "Name cannot be empty.";
    } 
    elseif (!preg_match("/^[a-zA-Z][a-zA-Z .-]*$/", $name)) {
        $error = "Invalid name format.";
    } 
    elseif (str_word_count($name) < 2) {
        $error = "Name must contain at least two words.";
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
    <title>Name Form</title>
</head>

<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <fieldset style="width:0px">
            <legend>Name</legend>
            <input type="text" name="name" value="" />
            <hr>
            <input type="submit" name="" value="Submit" />
        </fieldset>
    </form>x
</body>

</html>
