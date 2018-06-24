<?php
session_start();
require("conndb.php");
require("login_pg.php");
if($_POST['loginemp']!=''){
		$uname = $_POST['uname'];
		$passwd = $_POST['passwd'];
			$sql="SELECT * FROM emp Where user_name='$uname' and password='$passwd' ";
			$result= $mysqli->query($sql);
			if(mysqli_num_rows($result)==1){
				$_SESSION['loginemp']='Ok';
						header("Location:pg_staff.php");
						exit();
			}
		
			else{
				echo "ຊື່ຜູ້ໃຊ້ ຫຼື ລະຫັດຜ່ານຂງທ່ານບໍ່ຖືກຕ້ອງ ກະຸນາປ້ອນຂໍ້ມູນໃຫ້ຖຶກ.</br></br>";
			}
			
	}
require("login_emp.php");
	
?>