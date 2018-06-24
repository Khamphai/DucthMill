
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>DucthMill.com.la</title>
<link rel="stylesheet" href="body.css">
<?php
	require("conndb.php");
	require("nav_staff.php");
	require("slide.php");
	
	require("footer.php");

?>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/textlink.css">
<style>
.zoom:hover {
    transform: scale(1.05); 
}


.t{
	margin-top:250px;
	margin-bottom:120px;

}
</style>
</head>
<body>

<!--
<div class="t">
<div class="container" style="width:70%;" >
    <?php
	$sql ="select picture,name,price from product order by id ASC";
	$result= $mysqli->query($sql);
		while( $row = $result->fetch_array(MYSQLI_ASSOC)){
			$name=$row['name'];
			?>
            <div class="col-md-4" >
            <div style="border:1px solid #eaeaec; margin:-1px -10px 10px -1px; box-shadow: 0 1px 2px rgba(0,0,0,0.05); padding:10px">
			<div class="zoom"><center><?php foreach ($row as $key=>$value){ if( $key=="picture"){ echo "<a href='linkimage.php?name=$name'><img src='./pic/".$value." ' class='img-responsive'></a>";}} ?></center></div>
			<center><h4><class="text-info"><?php foreach ($row as $key=>$value){ if( $key=="name"){ echo "<a href='linkimage.php?name=$name'>$value</a>";}} ?></h4>
            <h4><div class="text-danger">Price: <?php echo $row["price"]; ?></h4></center>
			</div>
            </div>
            <?php
		}
	?>
</div>
</div>

	<section class="sidebar col-lg-4" >
			<?php include'./asidebar.php';?>
		<P>
			ການຕິດຕັ້ງເພື່ອເຂົ້າໃຊ້ລະບົບສຳລັບລູກຄ້າ 
			ແມ່ນລູກຄ້າຈະສາມາດມີສິດທິໃນການກວດເບີ່ງລາຍງານການຮັບເຄື່ງແລະ
			ລາຍງານການກວດການສັ່ງສິນຄ້າຕາມລູກຄ້າກຳນົດຕາມຂອບເຂດທີ່ແອດມີນໄດ້ກຳນົດໄວ້
			ພຽງເທົ່ານິ້ນ.
		</P>
	</section>-->

</body>
</html>
