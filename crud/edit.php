
<!-- Main : http://localhost/myPHP/crud/add -->
<?php
session_start();
require 'dbcon.php';

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>

<body>
    <div class="container mt-5">
        <!-- Session Message -->
         <?php include('message.php'); ?>
    </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit User</h4>
                        <a href="http://localhost/myPHP/crud/" class="btn btn-dark float-end">BACK</a>

                    </div>
                    <div class="card-body">
                       <?php
                            if(isset($_GET['id'])){
                              $user_id = $_GET['id'];
                            
                            $query = "SELECT * FROM `users` WHERE id = '$user_id'";

                            $q_run = mysqli_query($conn,$query);

                           if(mysqli_num_rows($q_run) > 0){

                          //  foreach($q_run as $user){
                            $user = mysqli_fetch_assoc($q_run);
                            // $user = mysqli_fetch_array($q_run);
                         
                         

                            // print_r($user);

                            // echo "name = ",$user['name'];

                          ?>
                            <!-- code -->
                        <form action="logic.php" method="POST" class="">
                          <input type="hidden" name="user_id" value = "<?= $user['id'] ?>">
                           <div class="mb-3">
                             <label for="">Full Name</label>
                             <input type="text" name="name" value= "<?=$user['name']; ?>" class="form-control" required>
                           </div>
                               <div class="mb-3">
                             <label for="">Email</label>
                             <input type="email" name ="email" value= "<?= $user['email']; ?>"  class="form-control" required>
                           </div>
                            <div class="mb-3">
                             <label for="">Mobile</label>
                             <input type="text" name="mobile" value= "<?= $user['mobile']; ?>" class="form-control" required>
                           </div>
                             <label for="">City</label>
                             <input type="text" name="city" value= "<?= $user['city']; ?>" class="form-control" required>
                           </div>
                           <div class="mb-3">
                            <button type="submit" name="update-user" class="btn btn-success">Update Users</button>
                           </div>
                        </form>

                      <?php

                            
                           

                           

                           }
                          }
                           else{
                            echo "<h4>No record found</h4>";
                           }
                        ?> 
                        
                         
                     



                     
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>