<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Create Cookie</h2>
    <form method="POST">
        <input type="text" name="username" placeholder="Enter your name">
        <button type="submit" name="create_cookie">Create Cookie</button>
    </form>

    <?php
    if (isset($_POST['create_cookie'])) {
        // Create a cookie that lasts for 30 seconds
        setcookie("username", $_POST['username'], time() + 30, "/");
        echo "Cookie 'username' created!";
    }
    ?>


    <h2>Read Cookie</h2>
    <form method="POST">
        <button type="submit" name="read_cookie">Read Cookie</button>
    </form>

    <?php
    if (isset($_POST['read_cookie'])) {
        if (isset($_COOKIE['username'])) {
            echo "Cookie Value: " . $_COOKIE['username'];
        } else {
            echo "Cookie not found!";
        }
    }
    ?>


    <h2>Update Cookie</h2>
    <form method="POST">
        <input type="text" name="new_username" placeholder="Enter new name">
        <button type="submit" name="update_cookie">Update Cookie</button>
    </form>

    <?php
    if (isset($_POST['update_cookie'])) {
        setcookie("username", $_POST['new_username'], time() + 30, "/");
        echo "Cookie updated!";
    }
    ?>


    <h2>Delete Cookie</h2>
    <form method="POST">
        <button type="submit" name="delete_cookie">Delete Cookie</button>
    </form>

    <?php
    if (isset($_POST['delete_cookie'])) {
        setcookie("username", "", time() - 3600, "/");
        echo "Cookie deleted!";
    }
    ?>
</body>

</html>