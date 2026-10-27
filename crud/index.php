<!-- Main : http://localhost/myPHP/crud/ -->
<?php
session_start();

require 'dbcon.php';

?> 

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD App</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  </head>
<body>
   
    
    <div class="container">
         <?php include('message.php'); ?> 
        <h2>User Lists</h2>
        <a href="add.php" class="mb-3 btn btn-dark">Add Users</a>

        <div>
           <table class="table table-dark">

            <thead>
                <tr>
                    <th>Id</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>City</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- <tr>
                    <td>1</td>
                    <td>Ankit</td>
                    <td>ankit@gmail.com</td>
                    <td>8820219915</td>
                    <td>Kolkata</td>
                    <td>
                        <a href="" class="btn btn-secondary">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                    </td>
                </tr> -->
                <?php 
                    $query = "SELECT * FROM `users`";

                    $q_run = mysqli_query($conn,$query);

                    if(mysqli_num_rows($q_run) > 0){

                    foreach($q_run as $users){
                        // echo $users['name'];
                    ?>
                    <tr>
                        <td><?= $users['id'] ?></td>
                        <td><?= $users['name'] ?></td>
                        <td><?= $users['email'] ?></td>
                        <td><?= $users['mobile'] ?></td>
                        <td><?= $users['city'] ?></td>

                        <td>
                            <!-- <a href="" class="btn btn-success">View</a> -->
                            <a href="edit.php?id=<?= $users['id'] ?>" class="btn btn-secondary">Edit</a>
                            <!-- <a href="?id=<?= $users['id'] ?>" class="btn btn-danger">Delete</a> -->
                             <!-- d-inline is used for display without form space -->
                            <!-- <form action="logic.php" class="d-inline" method="POST">
                                <button type="submit" name="del_user" value="<?= $users['id'] ?>" class="btn btn-danger">Delete</button>
                            </form> -->
                            <form action="logic.php" class="d-inline" method="POST">
                              <input type="hidden" name="user_id" value="<?= $users['id'] ?>">
                              <button type="submit" name="del_user" class="btn btn-danger"> Delete </button>
                            </form>
                        </td>
                    </tr>

                <?php
                    }

                    }
                    else{
                        echo "<h5>No records found</h5>";
                    }
                    
                ?>
            </tbody>
           </table>
        </div>

    </div>
   

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>