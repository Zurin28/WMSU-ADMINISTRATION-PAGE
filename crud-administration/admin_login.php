<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="css/home.css">
    <style>
        html, body {
            height: 100%;
        }
        body {
            min-height: 100vh;
            background: #f8f9fa;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Montserrat', Arial, sans-serif;
        }
        .login-card {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 24px rgba(124, 9, 2, 0.10), 0 1.5px 4px rgba(0,0,0,0.04);
            border: 1.5px solid #7C0902;
            max-width: 370px;
            width: 100%;
            padding: 36px 32px 28px 32px;
            margin: 0 16px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .login-title {
            color: #7C0902;
            font-size: 2em;
            font-weight: 800;
            margin-bottom: 24px;
            letter-spacing: 1px;
            text-align: center;
        }
        .form-group {
            width: 100%;
            margin-bottom: 18px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .form-label {
            display: block;
            margin-bottom: 6px;
            color: #7C0902;
            font-weight: 600;
            font-size: 1em;
            letter-spacing: 0.5px;
            width: 100%;
            text-align: left;
            max-width: 260px;
        }
        .form-control {
            width: 100%;
            max-width: 260px;
            padding: 12px;
            border: 1.5px solid #7C0902;
            border-radius: 5px;
            font-size: 1em;
            background: #f9f9f9;
            color: #333;
            font-family: inherit;
            transition: border-color 0.2s;
            margin: 0 auto;
            display: block;
        }
        .form-control:focus {
            border-color: #a00d0d;
            outline: none;
            background: #fff;
        }
        .btn-primary {
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
            margin-top: 8px;
        }
        .btn-primary:hover {
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
            width: 100%;
        }
        @media (max-width: 480px) {
            .login-card {
                padding: 24px 8px 18px 8px;
            }
        }
    </style>
</head>
<body>
    <div class="login-card">
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
        <form method="post" action="" style="width:100%;">
            <div class="form-group">
                <label class="form-label" for="email">Email</label>
                <input class="form-control" type="text" name="email" id="email" placeholder="Email" required autocomplete="off">
            </div>
            <div class="form-group">
                <label class="form-label" for="password">Password</label>
                <input class="form-control" type="password" name="password" id="password" placeholder="Password" required autocomplete="off">
            </div>
            <button class="btn-primary" type="submit">Login</button>
        </form>
    </div>
</body>
</html>