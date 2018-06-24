<?php
session_start();
require("conndb.php");
require("login_pg.php");
if($_POST['loginsell']!=''){
		$uname = $_POST['uname'];
		$passwd = $_POST['passwd'];
			$sql="SELECT * FROM seller Where user_sell='$uname' and pass_sell='$passwd' ";
			$result= $mysqli->query($sql);
			if(mysqli_num_rows($result)==1){
				$_SESSION['loginsell']='Ok';
						header("Location:pgsell.php");
						exit();
			}
		
			else{
				echo "ຊື່ຜູ້ໃຊ້ ຫຼື ລະຫັດຜ່ານຂງທ່ານບໍ່ຖືກຕ້ອງ ກະຸນາປ້ອນຂໍ້ມູນໃຫ້ຖຶກ.</br></br>";
			}
			
	}
require("login_sell.php");
	
?>