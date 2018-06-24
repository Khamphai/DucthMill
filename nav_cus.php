<?php
	session_start();
	require("session.php");
?>
<!DOCTYPE html>
<html>
<head>
  <title>DucthMill.com.la</title>
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
	<script src="../bootstrap/js/jquery.min.js" type="text/javascript"></script>
	<script src="../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<!--<link rel="shortcut icon" type="image/x-icon" href="shortcut.jpg" >
	-->
	</style>
	<style>
  .nav{
   font-family:Phetsarath OT;
   font-size: 40px;
 
  }

</style>
</head>
<body>
<nav class="navbar navbar-inner navbar-fixed-top" style="background-color:#35ddb2 ">
<!--<div class="page-header" style="background-color:#AFEEEE;margin-top:-20px;height:130px;font-family:Phenomena;font-weight:bold; font-size:70px;text-align:center; ">
 -->  
</div>
  <div class="container-fluid">
 
 <a class="navbar-brand" href="#" ><img src="../logo/logoducth.png" width="70" height="70" margin-top="-2px" /></a>
 

    <ul class="nav navbar-nav" style=" font-size:20px; ">
		<li><a href="check_in.php">ລາຍການກວດສອບຜະລິດຕະພັນທີ່ໄດ້ຮັບ</a></li>
		<li><a href="../edit_cus.php?id=<?php echo $_SESSION['login'];?>">ແກ້ໄຂຂໍ້ມູນສ່ວນຕົວ</a></li>
     <li class="dropdown" ><a class="dropdown-toggle" data-toggle="dropdown" style="font-family:Phetsarath OT; color:#5f0f28;">ລາຍການສິນຄ້າ<span class="caret"></span></a>
			<ul class="dropdown-menu" style="font-size:20px" >
			  <li><a href="milk_s.php">ນົມປ້ຽວ</a></li>
			  <li><a href="milk_j.php">ນົມຈືດ</a></li>
			  <li><a href="yakult.php">ໂຢ່ເກິດ</a></li> 
			</ul></li>
			<li><a href="#">ກະຕ່າສິນຄ້າ</a></li>
    </ul>
     
     <form class="navbar-form navbar-right"  action="../logout.php">
		<li><a href="../logout.php"><span class="glyphicon glyphicon-off"></span> Sign Out</a></li>
    </form>
	</div>
</nav>
</body>
</html>