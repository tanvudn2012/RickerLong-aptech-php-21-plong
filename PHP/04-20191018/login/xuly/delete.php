<?php
if ($_SERVER["REQUEST_METHOD"] == "GET"){
    $id=$_GET['id'];
    include('./connect.php');
    $delete="DELETE FROM user WHERE id_user='$id'";
    $query=mysqli_query($connect,$delete);
    if ($query) {
        header ('location: ../Home.php');
    }
    else {
        echo "Xóa dữ liệu thất bại". mysqli_error($connect);
    }
}
?>