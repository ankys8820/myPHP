<!-- Main : http://localhost/myPHP/crud/add -->
<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Users</title>
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
                        <h4>Add User</h4>
                        <a href="http://localhost/myPHP/crud/" class="btn btn-dark float-end">BACK</a>

                    </div>
                    <div class="card-body">
                        <form action="logic.php" method="POST" class="">
                           <div class="mb-3">
                             <label for="">Full Name</label>
                             <input type="text" name="name" class="form-control" required>
                           </div>
                               <div class="mb-3">
                             <label for="">Email</label>
                             <input type="email" name ="email"  class="form-control" required>
                           </div>
                            <div class="mb-3">
                             <label for="">Mobile</label>
                             <input type="text" name="mobile" class="form-control" required>
                           </div>
                             <label for="">City</label>
                             <input type="text" name="city" class="form-control" required>
                           </div>
                           <div class="mb-3">
                            <button type="submit" name="save-user" class="btn btn-success">Save</button>
                           </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>