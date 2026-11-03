<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: signin.php');
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
    <h2>Auth Project Dashboard. Hey <?= $_SESSION['username'];
                                    ?></h2>



    <form action="request.php" method="post">
        <button type="submit" name="logout">Logout</button>

    </form>




</body>

</html>