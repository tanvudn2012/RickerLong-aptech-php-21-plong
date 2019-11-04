<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
<link rel="stylesheet" href="bootstrap.css">
<title>Title</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="text-center text-secondary my-4"> Welcome you to the Table User</h1>
            <table class="table table-light ">
                <thead class="thead-light text-center ">
                    <tr>
                        <th class="border">Id User</th>
                        <th class="border">Name</th>
                        <th class="border">Email</th>
                        <th class="border">Password</th>
                        <th class="border">Roles</th>
                        <th class="border">Feature</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                   $connect=mysqli_connect('localhost','root','','php_21');
                   $sql="SELECT * FROM php_21.user AS a
                        JOIN php_21.roles AS b
                        ON a.id_role = b.id";
                   $query=mysqli_query($connect,$sql);
                   while ($row=mysqli_fetch_array($query)) {
                    echo $row['name'];
                ?>
                    <tr class="border">
                        <td class="border"><?php echo $row['id_user'] ?></td>
                        <td class="border"><?php echo $row['name'] ?></td>
                        <td class="border"><?php echo $row['email'] ?></td>
                        <td class="border"><?php echo $row['password'] ?></td>
                        <td class="border"><?php echo $row['role'] ?></td>
                        <td class="d-flex ">
                            <a class="btn btn-primary m-auto">Show</a>
                            <a class="btn btn-warning m-auto" href="./UpdateUser.php?id=<?php echo $row['id_user']?>">Edit</a>
                            <a class="btn btn-danger  m-auto" href="./xuly/delete.php?id=<?php echo $row['id_user'] ?>" >Delete</a>
                        </td>
                    </tr>
                <?php
                   }
                ?>
                </tbody>
            </table>
            <a class="float-right btn btn-info text-white" href="./createUser.php">CREATE AN USER </a>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>