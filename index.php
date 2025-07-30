<?php

session_start();

$errors = [
    'login' => $_SESSION['login_error'] ?? '',
    'register' => $_SESSION['register_error'] ?? '',
];

$activeForm = $_SESSION['active_form'] ?? 'login';

session_unset();

function showError($error){
    return !empty($error) ? "<p class = 'error_message'> $error </p>" : '';
}

function isActiveForm($formName, $activeForm) {
    return $formName === $activeForm ? 'active' : '';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">
    
</head>
<body>

    <div class="container">
        <div class="form-box <?= isActiveForm('login',$activeForm); ?>" id="login-form">
            <form action="login_register.php" method="post">
                <h2>
                    Login
                </h2>
                <?= showError($errors['login']); ?> 
                <input type="email" name="email" placeholder="Enter your email" required><br>
                <input type="password" name="password" placeholder="Enter your password" required><br>
                <button type="submit" onclick="alert('Press OK to login')" name="login">Login</button>
                <p>Don't have an account? <a href="#" onclick="showForm('register-form')">Register</a></p>
            </form>
        </div>


        <div class="form-box <?= isActiveForm('register',$activeForm); ?>"  id="register-form">
            <form action="login_register.php" method="post">
                <h2>
                    Register
                </h2>
                <?= showError($errors['register']); ?> 
                <input type="text" name="name" placeholder="Enter your name" required><br>
                <input type="email" name="email" placeholder="Enter your email" required><br>
                <input type="password" name="password" placeholder="Enter your password" required><br>
                <select name="role" required>
                    <option value="#">-SELECT-</option>
                    <option value="admin">LANDLORD</option>
                    <option value="user">TENANT</option>
                </select><br>
                <button type="submit" onclick="alert('Press OK to login')" name="register">Register</button>
                <p>Have an account already? <a href="#" onclick="showForm('login-form')">Login</a></p>
            </form>
        </div>
    </div>
    <script src="index.js"></script>
</body>
</html>