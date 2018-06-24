<?php
require("session.php");
require("conndb.php");
	if($_GET['del']){
		$ids=$_GET['del'];
		$sql= "delete from product where id='$ids'";
		$result= $mysqli->query($sql);
		header("location:admin.php");
		exit();
		
	}
?>