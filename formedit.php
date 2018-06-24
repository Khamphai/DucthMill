<?php
require("session.php");
require("conndb.php");
$rs = $conn -> query("SELECT * FROM customer WHERE cus_id = ".$_GET['cus_id']);
	//echo $row;
	$fet = $rs -> fetch_object();

	if($_POST['sub']!=""){
		$id_cus=$_POST['id'];
		$f_name=$_POST['fname'];
		$l_name=$_POST['lname'];
		$phone=$_POST['phone'];
		$vill_add=$_POST['vill'];
		$dist_add=$_POST['dist'];
		$pro_add=$_POST['prov'];
		$no_house=$_POST['house'];
		$user_cus=$_POST['user'];
		$password_cus=$_POST['pwd'];
		$sql= "update customer set name='$name', description='$des', price='$des', catename='$cate' where id='$id_cus'"; 
		$result=$mysqli->query($sql);
		if($ressult){
			header("Location:login.php");
			}else  {
				echo "error!....";
			}
			exit();
	}
		
?>
<html>
<head>
<title>www.DucthMill.com.la</title>
</head>
<body>
<style>
body{
    margin-top: 300px;
	background-image: url("Python.jpg");
}
b{
	font-size:25px;
	color:white;
}
p{
    font-size: 50px;
}
div.absolute {
    margin-top: 150px;
} 
.a{
    height: 40px;
	width:300px;
	font-size:16px;
}
input[type=text], input[type=password] {
    width: 100%;
	text-align:center;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
	font-size:20px;
}
input[type=submit] {
    width: 50%;
    background-color: red;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
	font-size:18px;
}

input[type=submit]:hover {
	background-color: #E67E22  ;
}
</style>
<center>
<div class="absolute">
<form method= "post">
	<table>
		<tr>
			<td><b>Id:</b></td><td><input type= "text" name= "id" value= "<?php echo $row['id'];?>"></td>
		</tr>
		<tr>
			<td><b>Name:</b></td><td><input type= "text" name= "name" value= "<?php echo $row['name'];?>"></td>
		</tr>
		<tr>
			<td><b>Type:</b></td><td><select class="a" name="catename" >
				<option values="Router"><?php echo $row['catename'];?></option>
				<option values="Switch"><?php echo $row['catename'];?></option></select>
			</td>
		</tr>
		<tr>
			<td><b>Description:</b></td><td><input type= "text" name= "des" value= "<?php echo $row['description'];?>"></td>
		</tr>
		<tr>
			<td><b>Price:</b></td><td><input type= "text" name= "price" value= "<?php echo $row['price'];?>"></td>
		</tr>
		<tr>
			<td></td><td><input type="submit" name= "sub" value = "Submit"></td>
		</tr>
	</table>
</form>
</center>
</div>
</body>
</html>