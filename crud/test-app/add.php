<?php require('db.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Page</title>
</head>

<body>
    <div class="main">
        <a href="index.php">Back</a>
        <div class="form">
            <form action="request.php" method="post">
                <input type="text" name="user" required placeholder="type your username">
                <button type="submit" name="add-user">Save User</button>
            </form>
        </div>
    </div>
</body>

</html>