<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <style>
    /* Reset some default styles */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }

    body {
      height: 100vh;
      /* background: linear-gradient(135deg, #6a11cb, #2575fc);/ */
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .login-container {
      background: white;
      width: 360px;
      padding: 40px 30px;
      border-radius: 16px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
      text-align: center;
    }

    .login-container h2 {
      color: #333;
      margin-bottom: 25px;
      font-weight: 600;
      letter-spacing: 0.5px;
    }

    .input-group {
      margin-bottom: 20px;
      text-align: left;
    }

    .input-group label {
      font-size: 14px;
      color: #555;
      display: block;
      margin-bottom: 8px;
    }

    .input-group input {
      width: 100%;
      padding: 12px 14px;
      border: 1px solid #ccc;
      border-radius: 8px;
      outline: none;
      font-size: 15px;
      transition: all 0.3s ease;
    }

    .input-group input:focus {
      border-color: #2575fc;
      box-shadow: 0 0 4px rgba(37, 117, 252, 0.4);
    }

    .login-btn {
      width: 100%;
      padding: 12px;
      background: linear-gradient(135deg, #6a11cb, #2575fc);
      color: white;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      font-weight: 600;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    .login-btn:hover {
      background: linear-gradient(135deg, #5b0ebb, #1d64e1);
    }

    .extra-links {
      margin-top: 15px;
      font-size: 14px;
    }

    .extra-links a {
      color: #2575fc;
      text-decoration: none;
      margin: 0 5px;
    }

    .extra-links a:hover {
      text-decoration: underline;
    }

    @media (max-width: 400px) {
      .login-container {
        width: 90%;
        padding: 30px 20px;
      }
    }
  </style>
</head>

<body>
  <div class="login-container">
    <h2>Welcome Back</h2>
    <form action="login.php" method="post">
      <div class="input-group">
        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="input-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
      </div>
      <button type="submit" class="login-btn">Login</button>
      <div class="extra-links">
        <a href="#">Forgot Password?</a>
        <a href="#">Create Account</a>
      </div>
    </form>
  </div>
</body>


<?php
// 1 Get
// 2 post
// 3 request


// echo $_GET['email'] ?? '';
// echo $_GET['password'] ?? '';

// echo $_POST['email'] ?? '';
// echo $_POST['password'] ?? '';

echo $_REQUEST['email'] ?? '';
echo $_REQUEST['password'] ?? '';
?>

</html>