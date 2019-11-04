<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
<link rel="stylesheet" href="./css/style.css">
<title>Title</title>
</head>
<body>
<div class="Header border-bottom">
    <div class="container ">
        <h1>LARAVEL CRUD USERS DEMO</h1>
    </div>
</div>
<div class="Section border-bottom">
    <div class="container ">
        <div class="row">
            <div class="col d-flex justify-content-center">
                <form class=" d-flex flex-column w-75" method="POST" action="./xuly/insert.php">
                    <h3>Name</h3>
                    <input class="form-control" type="text" name="name" placeholder="Name">
                    <h3>Email</h3>
                    <input class="form-control" type="email" name="email" placeholder="Email">
                    <h3>PASSWORD</h3>
                    <input class="form-control" type="password" name="password" placeholder="Password">
                    <h3>Select Roles</h3>
                    <select class="custom-select w-50 mb-3 " name="id_role">
                    <?php 
                        $connect=mysqli_connect('localhost','root','','php_21');
                        $sql="SELECT * FROM roles";
                        $query=mysqli_query($connect,$sql);
                        while ($row=mysqli_fetch_assoc($query)) {
                    ?>
                        <option  value="<?php echo $row['id']  ?>"><?php echo $row['role']?></option>
                        <?php 
                        }
                        ?>
                    </select>
                        <button type="submit" class=" m-auto  w-25 btn btn-danger ">Confirms</button>

                </form>

            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>