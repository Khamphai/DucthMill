<?php
ob_start();
session_start();
require("conndb.php");

if(isset($_POST['login'])){
	$uname = $_POST['uname'];
	$passwd = $_POST['passwd'];
	$sql="SELECT * FROM customer WHERE user_cus='$uname' and password_cus='$passwd'";
	$result= $mysqli->query($sql);
		if(mysqli_num_rows($result) == 1){
			while( $row = $result->fetch_array(MYSQLI_ASSOC)){
				$f = $row['first_name'];
				$l = $row['last_name'];
				$id = $row['cus_id'];
				$_SESSION['login'] = $id;
				$_SESSION['f'] = $f;
				$_SESSION['l'] = $l;
				header("Location:index.php");
				exit();
			}
		}
		else{
			echo "<script>alert('Failure.');</script>";
		}
}
?>