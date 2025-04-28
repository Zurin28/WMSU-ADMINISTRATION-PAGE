<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="css/home.css">
    <style>
        body {
            background: #fff;
        }
        .login-container {
            max-width: 350px;
            margin: 100px auto;
            background: #fff;
            padding: 32px 28px 24px 28px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(124, 9, 2, 0.10);
            border: 2px solid #7C0902;
        }
        .login-title {
            text-align: center;
            color: #7C0902;
            font-size: 2em;
            font-weight: 800;
            margin-bottom: 24px;
            letter-spacing: 1px;
        }
        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 18px;
            border: 1.5px solid #7C0902;
            border-radius: 5px;
            font-size: 1em;
            background: #f9f9f9;
            color: #333;
            font-family: 'Montserrat', sans-serif;
        }
        .login-container input[type="submit"] {
            width: 100%;
            padding: 12px;
            background: #7C0902;
            color: #fff;
            border: none;
            border-radius: 30px;
            font-size: 1.1em;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.2s;
            letter-spacing: 1px;
        }
        .login-container input[type="submit"]:hover {
            background: #a00d0d;
        }
        .error {
            color: #d8000c;
            background: #ffd2d2;
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 16px;
            text-align: center;
            border: 1px solid #d8000c;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-title">Admin Login</div>
        <?php
        $error = '';
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'] ?? '';
            $password = $_POST['password'] ?? '';
            if ($email === 'admin' && $password === 'admin') {
                header('Location: ../sample-admin/Home');
                exit();
            } else {
                $error = 'Invalid email or password.';
            }
        }
        if ($error) {
            echo '<div class="error">' . htmlspecialchars($error) . '</div>';
        }
        ?>
        <form method="post" action="">
            <input type="text" name="email" placeholder="Email" required autocomplete="off">
            <input type="password" name="password" placeholder="Password" required autocomplete="off">
            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>