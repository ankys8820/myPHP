<!-- Main : http://localhost/myPHP/crud/ -->
<?php
session_start();

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
    <?php include('message.php'); ?> 
    
    <div class="container">
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
                <tr>
                    <td>1</td>
                    <td>Ankit</td>
                    <td>ankit@gmail.com</td>
                    <td>8820219915</td>
                    <td>Kolkata</td>
                    <td>
                        <a href="" class="btn btn-secondary">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            </tbody>
           </table>
        </div>

    </div>
   

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>