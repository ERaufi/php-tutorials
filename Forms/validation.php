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

    <?php
    $nameError = '';
    $emailError = '';
    $ageError = '';
    $genderError = '';

    $name = '';
    $email = '';
    $age = '';
    $gender = '';
    $hobby = '';



    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        if ($_POST['name'] == '') {
            $nameError = "Name is required";
        } else {
            $name = $_POST['name'];
            if (strlen($_POST['name']) < 3) {
                $nameError = 'name must be at least 3 characters';
            }
        }

        if ($_POST['email'] == '') {
            $emailError = "email is required";
        } else {
            $email = $_POST['email'];
            if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $emailError = "Invalid email format";
            }
        }

        if ($_POST['age'] == '') {
            $ageError = "age is required";
        } else {
            $age = $_POST['age'];
            if (!is_numeric($_POST['age'])) {
                $ageError = "Age must be a number";
            }
        }

        if (!isset($_POST['gender'])) {
            $genderError = 'Please select your gender';
        } else {
            $gender = $_POST['gender'];
        }


        if (isset($_POST['hobby'])) {
            $hobby = $_POST['hobby'];
        }
    }

    ?>

    <div class="form-box">

        <form method="POST">

            <label>Name:</label><br>
            <input type="text" name="name" value="<?php echo $name ?>">
            <div class="error"><?php echo $nameError  ?></div>
            <br>

            <label>Email:</label><br>
            <input type="text" name="email" value="<?php echo $email ?>">
            <div class="error"><?php echo $emailError  ?></div>

            <br>

            <label>Age:</label><br>
            <input type="text" name="age" value="<?php echo $age ?>">
            <div class="error"><?php echo $ageError  ?></div>

            <br>

            <label>Gender:</label><br>
            <input type="radio" name="gender" value="Male" <?php if ($gender == 'Male') echo 'checked' ?>> Male
            <input type="radio" name="gender" value="Female" <?php if ($gender == 'Female') echo 'checked' ?>> Female
            <br><br>

            <label>Hobbies:</label><br>
            <input type="checkbox" name="hobby[]" value="Reading" <?php if (in_array('Reading', $hobby)) echo 'checked' ?>> Reading
            <input type="checkbox" name="hobby[]" value="Sports" <?php if (in_array('Sports', $hobby)) echo 'checked' ?>> Sports
            <input type="checkbox" name="hobby[]" value="Games" <?php if (in_array('Games', $hobby)) echo 'checked' ?>> Games
            <br><br>

            <button type="submit">Submit</button>

        </form>

    </div>
</body>

</html>