<?php
session_start();

if (isset($_SESSION['username'])) {
    header('Location: index.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auth Project</title>
</head>

<body>
    <h2>Register User</h2>

    <div>
        <form action="request.php" method="post">
            <input type="text" name="username" placeholder="username" required>
            <input type="email" name="email" placeholder="email" required>
            <input type="password" name="password" placeholder="password" required>
            <button type="submit" name="signup">Sigh Up</button>
        </form>
        <p>If you already have an account ? <a href="signin.php">Click Here</a></p>
    </div>

</body>

</html>