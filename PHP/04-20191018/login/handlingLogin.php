<?php
$email=$password='';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password =  $_POST["password"];
    $connect= mysqli_connect("localhost","root","","php_21");
    $sql="SELECT * FROM user WHERE email='$email'and password='$password'";
    $result= mysqli_query($connect,$sql);
    if (mysqli_num_rows($result)==0) {
        echo"Dang nhap that bai";
        header('Location: index.php');
    }
    else {
        header('Location: Home.php');   
    }
}
?>