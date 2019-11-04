<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $passWord=$_POST['password'];
    $role=$_POST['id_role'];
    
    if ($name == '' || $email =='' || $passWord == '') {
        echo"Vui lòng nhập đầy đủ thông tin <br>". '<a href="../createUser.php">Về trang trước</a> <br> '   ;
        die("Tạo tài khoản thất bại");
    }
    include('./connect.php');
    $checkEmail=mysqli_query($connect,"SELECT * FROM user WHERE email ='$email' ");
    $addUser=mysqli_query($connect,"INSERT INTO user(name,email,password,id_role) VALUES ('$name','$email','$passWord','$role')");
    if (mysqli_num_rows($checkEmail)>0) {
        die("Email đã có người dùng, vui lòng đổi tên email") ;
    }
    if ($addUser) {
        echo'Tạo tài khoản thành công'. '<a href="../Home.php"> Đến trang Home </a>' ;
    }
    else {
        echo "Tạo tài khoản thất bài" . '<a href="../createUser.php">Về trang trước</a>';
    }
}
?>