<?php

require('dbconfig.php');

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Image Crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <h1>Hello, world!</h1>
    <!-- MS -->
    <!-- Button trigger modal -->
    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Launch demo modal
    </button> -->

    <!-- Modal -->
    <div class="modal fade" id="demo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add User Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="request.php" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <!-- { Code you want show = form} -->

                        <div class="form-group">
                            <label for="">First Name</label>
                            <input type="text" name="fname" class="form-control" placeholder="FirstName" required>
                        </div>

                        <div class="form-group">
                            <label for="">Last Name</label>
                            <input type="text" name="lname" class="form-control" placeholder="LastName" required>
                        </div>

                        <div class="form-group">
                            <label for="">Date</label>
                            <input type="date" name="date" class="form-control" placeholder="Date" required>
                        </div>

                        <div class="form-group">
                            <label for="">Image</label>
                            <input type="file" name="image" id="images" class="form-control" placeholder="Image" required>
                        </div>





                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-dark">Register</button>
                        </div>

                    </div>
                </form>

            </div>
        </div>
    </div>
    <!-- M_end -->



    <div class="container-fluid">
        <button type="button" class="btn btn-dark"
            data-bs-toggle="modal" data-bs-target="#demo">
            Add Data
        </button>

    </div>




    <!--  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>