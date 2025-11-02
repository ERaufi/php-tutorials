<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Radio & Checkbox Example</title>
    <style>
        body {
            font-family: Arial;
            background: #f5f7fa;
            padding: 50px;
        }

        form {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            width: 350px;
        }

        label {
            display: block;
            margin: 10px 0 5px;
        }

        input[type="submit"] {
            margin-top: 15px;
            padding: 10px;
            background: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <h2>Choose Your Preferences</h2>

    <form method="POST" action="">
        <!-- Radio Buttons -->
        <label>Select Your Gender:</label>
        <input type="radio" name="gender" value="Male"> Male
        <input type="radio" name="gender" value="Female"> Female
        <input type="radio" name="gender" value="Other"> Other

        <!-- Checkboxes -->
        <label>Select Your Hobbies:</label>
        <input type="checkbox" name="hobby[]" value="Reading"> Reading
        <input type="checkbox" name="hobby[]" value="Traveling"> Traveling
        <input type="checkbox" name="hobby[]" value="Cooking"> Cooking

        <input type="submit" value="Submit">
    </form>

    <hr>
</body>


<?php
echo $_POST['gender'] ?? '';
// echo $_REQUEST['hobby'] ?? '';


for($i=0;$i<count($_POST['hobby']);$i++)
{
    echo "<br>";
    echo $_POST['hobby'][$i];
}

?>

</html>