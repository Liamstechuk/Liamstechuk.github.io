<?php
session_start();

// Define the correct username and password
$correct_username = 'l.bakewell5@met.police.uk';
$correct_password = 'MetLiam101';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($username === $correct_username && $password === $correct_password) {
        $_SESSION['loggedin'] = true;
    } else {
        $error = 'Incorrect username or password!';
    }
}

// If the user is not logged in, show the login form
if (!isset($_SESSION['loggedin'])) {
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login - Met Police</title>
        <style>
            body {
                background-color: black;
                color: white;
                font-family: Arial, sans-serif;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
            }
            .login-container {
                background-color: #222;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            }
            img {
                width: 100px;
                display: block;
                margin: 0 auto 20px;
            }
            .error {
                color: red;
                margin-bottom: 15px;
            }
            input[type="text"], input[type="password"] {
                width: 100%;
                padding: 10px;
                margin: 10px 0;
                border: none;
                border-radius: 5px;
            }
            input[type="submit"] {
                width: 100%;
                padding: 10px;
                background-color: #0078d4;
                color: white;
                border: none;
                border-radius: 5px;
                cursor: pointer;
            }
            input[type="submit"]:hover {
                background-color: #005bb5;
            }
        </style>
    </head>
    <body>
        <div class="login-container">
            <img src="metlogo.png" alt="Met Police Logo">
            <form method="post" action="">
                <?php if (isset($error)) { echo '<div class="error">' . $error . '</div>'; } ?>
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="submit" value="Login">
            </form>
        </div>
    </body>
    </html>

    <?php
    exit;
}

// If logged in, show the dashboard
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Met Police</title>
    <style>
        body {
            background-color: black;
            color: white;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .dashboard-container {
            padding: 20px;
            text-align: center;
        }
        .dashboard-header img {
            width: 100px;
            position: absolute;
            top: 20px;
            left: 20px;
        }
        .link-box {
            background-color: #222;
            padding: 20px;
            margin: 20px;
            display: inline-block;
            width: 250px;
            height: 100px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            text-align: center;
            vertical-align: middle;
            line-height: 60px;
        }
        .link-box a {
            color: white;
            text-decoration: none;
            font-size: 18px;
        }
        .link-box a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="dashboard-header">
        <img src="metlogo.png" alt="Met Police Logo">
    </div>
    <div class="dashboard-container">
        <h1>Welcome to the Dashboard</h1>
        <div class="link-box">
            <a href="https://liamstech.me" target="_blank">Liam's Tech</a>
        </div>
        <div class="link-box">
            <a href="https://rewindradio.org.uk" target="_blank">Rewind Radio</a>
        </div>
        <div class="link-box">
            <a href="https://www.met.police.uk" target="_blank">Met Police</a>
        </div>
        <div class="link-box">
            <a href="https://www.bartshealth.nhs.uk" target="_blank">London Hospital</a>
        </div>
    </div>
</body>
</html>
