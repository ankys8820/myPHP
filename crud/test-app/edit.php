<?php require('db.php');



// echo $uid;




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
</head>

<body>
    <div class="main">
        <a href="http://localhost/test-app/index.php" class="">Back</a>
        <div class="form-edit">
            <?php

            $uid = $_POST['uid'];


            $query = "SELECT * FROM username WHERE id='$uid'";

            $q_run = mysqli_query($conn, $query);

            if (mysqli_num_rows($q_run) > 0) {

                foreach ($q_run as $data) {
            ?>
                    <form action="request.php" method="post">
                        <input type="hidden" value="<?= $data['id'] ?>" name="uid">
                        <input type="text" name="user" value="<?= $data['user'] ?>" required placeholder="type your username">
                        <button type="submit" name="update_user">Update User</button>
                    </form>
            <?php
                }
            }
            ?>

        </div>
    </div>
</body>

</html>