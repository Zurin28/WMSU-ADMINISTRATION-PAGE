<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    
    // Basic validation
    if (!empty($email) && !empty($password)) {
        // Check for admin credentials
        if ($email === 'admin@wmsu.edu.ph' && $password === 'admin123') {
            $_SESSION['logged_in'] = true;
            $_SESSION['user_type'] = 'admin';
            header('Location: ../sample-admin/Home.php');
            exit;
        } 
        // Check for user credentials
        else if ($email === 'user@wmsu.edu.ph' && $password === 'user123') {
            $_SESSION['logged_in'] = true;
            $_SESSION['user_type'] = 'user';
            header('Location: ../admin/copy.php');
            exit;
        } 
        else {
            $error = "Invalid email or password";
        }
    } else {
        $error = "Please fill in all fields";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
        }
        .login-title {
            color: #7C0902;
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 24px;
            text-align: center;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-label {
            display: block;
            margin-bottom: 8px;
            color: #333;
            font-weight: 500;
        }
        .form-control {
            width: 100%;
            padding: 10px 12px;
            border: 1.5px solid #ddd;
            border-radius: 6px;
            font-size: 14px;
            transition: border-color 0.2s;
        }
        .form-control:focus {
            border-color: #7C0902;
            outline: none;
        }
        .btn-primary {
            width: 100%;
            padding: 12px;
            background: #7C0902;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s;
        }
        .btn-primary:hover {
            background: #660000;
        }
        .error {
            color: #dc3545;
            font-size: 14px;
            margin-top: 8px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="login-card">
        <div class="login-title">Login</div>
        <?php if (isset($error)): ?>
            <div class="error"><?php echo htmlspecialchars($error); ?></div>
        <?php endif; ?>
        <form method="post" action="">
            <div class="form-group">
                <label class="form-label" for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label class="form-label" for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn-primary">Login</button>
        </form>
    </div>
</body>
</html>