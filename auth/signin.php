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
    <h2>Login User</h2>

    <div>
        <form action="request.php" method="post">

            <input type="email" name="email" placeholder="email" required>
            <input type="password" name="password" placeholder="password" required>
            <button type="submit" name="signin">Sign in</button>
        </form>
        <p>If you not have an account ? <a href="signup.php">Click Here</a></p>
    </div>

</body>

</html>