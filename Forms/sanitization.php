<!DOCTYPE html>
<html>

<head>
    <title>Sanitization Example</title>
</head>

<body>

    <h2>Sanitize User Input</h2>

    <form method="POST">
        <label for="name">Full Name:</label><br>
        <input type="text" name="name"><br><br>

        <label for="email">Email Address:</label><br>
        <input type="text" name="email"><br><br>

        <label for="age">Age:</label><br>
        <input type="text" name="age"><br><br>

        <button type="submit">Submit</button>
    </form>

</body>


<?php
if ($_SERVER["REQUEST_METHOD"] === 'POST') {


    $name=trim($_POST['name']);
    $name=filter_var($name,FILTER_SANITIZE_SPECIAL_CHARS);
    echo $name;
    echo "<br/>";
    $email=filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
    echo $email;
    echo "<br/>";

    $age=filter_var($_POST['age'],FILTER_SANITIZE_NUMBER_INT);
    echo $age;
    echo "<br/>";
}
?>

</html>