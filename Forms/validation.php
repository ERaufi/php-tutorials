<!DOCTYPE html>
<html>

<head>
    <title>PHP Validation Example</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        .form-box {
            width: 350px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
        }

        .error {
            color: red;
            font-size: 14px;
        }
    </style>

</head>

<body>

    <h2>Form Validation Example</h2>

    <?php
    // Define error variables
    $nameError = "";
    $emailError = "";
    $ageError = "";
    $genderError = "";

    // Define input variables
    $name = "";
    $email = "";
    $age = "";
    $gender = "";
    $hobby = [];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // --- NAME VALIDATION ---
        if (!isset($_POST["name"]) || $_POST["name"] == "") {
            $nameError = "Name is required.";
        } else {
            $name = $_POST["name"];
            if (strlen($name) < 3) {
                $nameError = "Name must be at least 3 characters.";
            }
        }

        // --- EMAIL VALIDATION ---
        if (!isset($_POST["email"]) || $_POST["email"] == "") {
            $emailError = "Email is required.";
        } else {
            $email = $_POST["email"];
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailError = "Invalid email format.";
            }
        }

        // --- AGE VALIDATION ---
        if (!isset($_POST["age"]) || $_POST["age"] == "") {
            $ageError = "Age is required.";
        } else {
            $age = $_POST["age"];
            if (!is_numeric($age)) {
                $ageError = "Age must be a number.";
            }
        }

        // --- GENDER VALIDATION (RADIO BUTTON) ---
        if (!isset($_POST["gender"])) {
            $genderError = "Please select your gender.";
        } else {
            $gender = $_POST["gender"];
        }

        // --- HOBBY CHECKBOXES ---
        if (isset($_POST["hobby"])) {
            $hobby = $_POST["hobby"]; // Array
        }
    }
    ?>

    <div class="form-box">

        <form method="POST">

            <label>Name:</label><br>
            <input type="text" name="name" value="<?php echo $name; ?>">
            <div class="error"><?php echo $nameError; ?></div>
            <br>

            <label>Email:</label><br>
            <input type="text" name="email" value="<?php echo $email; ?>">
            <div class="error"><?php echo $emailError; ?></div>
            <br>

            <label>Age:</label><br>
            <input type="text" name="age" value="<?php echo $age; ?>">
            <div class="error"><?php echo $ageError; ?></div>
            <br>

            <label>Gender:</label><br>
            <input type="radio" name="gender" value="Male" <?php if ($gender == "Male") echo "checked"; ?>> Male
            <input type="radio" name="gender" value="Female" <?php if ($gender == "Female") echo "checked"; ?>> Female
            <div class="error"><?php echo $genderError; ?></div>
            <br><br>

            <label>Hobbies:</label><br>
            <input type="checkbox" name="hobby[]" value="Reading" <?php if (in_array("Reading", $hobby)) echo "checked"; ?>> Reading
            <input type="checkbox" name="hobby[]" value="Sports" <?php if (in_array("Sports", $hobby)) echo "checked"; ?>> Sports
            <input type="checkbox" name="hobby[]" value="Games" <?php if (in_array("Games", $hobby)) echo "checked"; ?>> Games
            <br><br>

            <button type="submit">Submit</button>

        </form>

    </div>
</body>

</html>