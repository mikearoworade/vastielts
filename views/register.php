<?php require_once(__DIR__ . '/../config/config.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="<?php echo BASE_URL;?>/assets/css/style.css">
</head>
<body>
    <div class="form-container">
        <h2>Register</h2>
        <form action="register.php" method="POST">
            <label for="firstname">First Name</label>
            <input type="text" id="firstname" name="firstname" required>

            <label for="lastname">Last Name</label>
            <input type="text" id="lastname" name="lastname" required>

            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <label for="gender">Gender</label>
            <select id="gender" name="gender" required>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>

            <button type="submit">Register</button>
            <p>Already have an account? <a href="login.html">Login</a></p>
        </form>
    </div>
</body>
</html>