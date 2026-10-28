<?php require('db.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Application</title>
</head>

<body>
    <div class="main">
        <a href="add.php" class="">Create</a>
        <div class="data">
            <h2>All Todos</h2>
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>User</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $query = "SELECT * FROM username";

                    $q_run = mysqli_query($conn, $query);

                    if (mysqli_num_rows($q_run) > 0) {
                        // $res = mysqli_fetch_assoc($q_run);

                        // print_r($data);

                        foreach ($q_run as $data) {


                    ?>
                            <tr>
                                <td><?= $data['id']; ?></td>
                                <td><?= $data['user'] ?> </td>
                                <td>
                                    <!-- <a href="edit.php/?id=<?= $data['id'] ?>" class="">Edit</a> -->
                                    <form action="edit.php" method="post">
                                        <input type="hidden" value="<?= $data['id'] ?>" name="uid">
                                        <button type="submit" name="delete-user">Edit</button>
                                    </form>
                                    <form action="request.php" method="post">
                                        <input type="hidden" value="<?= $data['id'] ?>" name="user_id">
                                        <button type="submit" name="e-user">Delete</button>
                                    </form>

                                </td>
                            </tr>

                    <?php
                        }
                    } else {
                        echo "<h5>No records found</h5>";
                    }
                    ?>

                    <!-- <td>
                            <a href="#" class="">Edit</a>
                            <a href="#" class="">Delete</a>
                        </td> -->

                </tbody>
            </table>
        </div>
    </div>
</body>

</html>