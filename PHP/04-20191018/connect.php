<?php
    $server = "localhost";
    $user ="root";
    $password ="";
    $connect= mysqli_connect($server,$user,$password);
   	if (!$connect) {
   		die( "Ket noi that bai" . mysqli_connect_error());
   	}

   	# $sql="CREATE DATABASE aptech_php"

   	/*$sql="CREATE TABLE aptech_php.user(
   	id int AUTO_INCREMENT PRIMARY KEY,
   	firt_Name varchar(50) ,
   	last_Name varchar(50),
   	email varchar(50)
   )";
	*/

   	/*ect, $sql)) {
   		echo "Tao TABLE thanh cong ";
   	}
   	 else {
   	 	echo "Tao TABLE that bai" . mysqli_error();
   	}
	   */
	/* 

	 ---------- QUERY TO THE TABLE -----------
   	$select ="SELECT * FROM aptech_php.user";
   	$result = mysqli_query($connect,$select);
   	if (mysqli_num_rows($result)>0) {
   		while ($row=mysqlfetch_assoc($result)) {
   			echo "id: " .i_ $row["id"]. " - Name: " . $row["firt_Name"]. " " . $row["last_Name"]. " - Email: " . $row["email"]. "<br>";
   		}
   	}
	   else echo "That bai"

	----------------------------------------------- 
	*/
	
	/*
	------------ ADD 1 COLUMN IN TABLE USER --------
	$add='ALTER TABLE aptech_php.user ADD password varchar(50) ';
	$result = mysqli_query($connect,$add);
	if ($result) {
		echo'Thanh cong';
	}
	--------------------------------------------------
	*/

/*------------- INSERT 1 RECORDING TO THE TABLE USER ------- 
	$insert="INSERT INTO aptech_php.user(firt_Name,last_Name,email,password) VALUES ('THUONG','NGO','admin@gmail.com','thuongngo123')";
	$result = mysqli_multi_query($connect,$insert);
	if ($result) {
		echo'Thanh cong';
	}
?>
*/

/*$sql= "CREATE TABLE php_day_5.user(
	id_user int AUTO_INCREMENT ,
	id_roles int ,
	email varchar(50) unique,
	password varchar(50),

	#PRIMARY KEY (id)
	PRIMARY KEY (id_user),
	FOREIGN KEY(id_roles) REFERENCES php_day_5.roles(id)
)";
*/

#$sql="DROP TABLE php_day_5.user ";
#$sql="INSERT INTO php_day_5.roles(role) VALUES('admin'),('user'),('guest') ";
$sql="INSERT INTO php_day_5.user(id_roles,email,password) VALUES(3,'guest@gmail.com','123123')";
$query=mysqli_query($connect,$sql);
if ($query) {
	echo "Tao database thanh cong ";
   	}
   	 else {
   	 	echo "Tao TABLE that bai" . mysqli_error();
   	}
