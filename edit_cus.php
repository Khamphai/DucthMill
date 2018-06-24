
<?php
session_start();
require("session.php");
require("conndb.php");
 if($_POST['submit']!=''){
	$id=$_POST['id'];
    $user=$_POST['user'];
    $passw=$_POST['passwd'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $tel=$_POST['tel'];
    $nohouse=$_POST['nhouse'];
    $village=$_POST['village'];
    $district=$_POST['district'];
    $sql="update customer set user_cus='$user',password_cus='$passw',first_name='$fname', last_name='$lname', phone='$tel',no_house='$nohouse',vill_add='$village',dist_add='$district' where cus_id='$id'"; 
    echo $sql;
	$result=$mysqli->query($sql);
      header("Location:pg_cus.php");
      exit();
  }
    if($_GET['id']!=''){
	$ids=$_GET['id'];
	$sql="SELECT*FROM customer where cus_id = '$ids'";
    $result = mysqli_query($mysqli, $sql);
		while($row = mysqli_fetch_array($result)){
			$id= $row['cus_id'];
			$fname = $row['first_name'];
			$lname = $row['last_name'];
			$vill = $row['vill_add'];
			$user=$row['user_cus'];
			$passw=$row['password_cus'];
			$tel=$row['phone'];
			$district=$row['dist_add'];
			$nhouse=$row['no_house'];
		}
    }
    
?>
<html>
<head>
  <title>Edit Form</title>
  <head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
  <script src="./bootstrap/js/jquery.min.js" type="text/javascript"></script>
  <script src="./bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  <style type="text/css">
.form1{
  border :2px solid blue;
  padding: 60px 40px;
  margin-top:40px;
 
}
.bg{

  width:100%;
  height :100%;
 }
#log {
  border :2px solid black;
  padding: 60px 40px;
  margin-top:40px;
  font-family:Phetsarath OT; 
  color:#5f0f28;

}
  </style>


</head>
<body>


<form class="form-group row col-lg-3">
</form>
<form class="form-group row col-lg-6 form1" style="text-alight:center" method="post" id="log">
 <fieldset class="container-fluid bg">
    <legend style="font-family:Phetsarath OT; color:blue; font-size:40px ; text-align:center;">ແກ້ໄຂຂໍ້ມູນສ່ວນຕົວ</legend>
   
     
    </div>
	<div class="form-group">
      <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" type="text" name="id"value= "<?php echo $id;?>">
     <!-- <small class="form-text text-muted" id="emailHelp">We'll never share your email with anyone else.</small>-->
    </div>
    <div class="form-group">
      <label for="exampleInputusername">ຊື່ ຜູ້ໃຊ້</label>
      <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" type="user" name="user"value= "<?php echo $user;?>">
     <!-- <small class="form-text text-muted" id="emailHelp">We'll never share your email with anyone else.</small>-->
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">ລະຫັດ</label>
      <input class="form-control" id="exampleInputPassword1" type="password" name="passwd"value= "<?php echo $passw;?>">
    </div>
   
     <div class="form-group">
      <label>ຊື່</label>
      <input class="form-control" id="exampleInputPassword1" type="text" name="fname"value= "<?php echo $fname;?>">
    </div>
    <div class="form-group">
      <label >ນາມສະກຸນ </label>
      <input class="form-control" id="exampleInputPassword1" type="text" name="lname"value= "<?php echo $lname;?>">
    </div>
    <div class="form-group" style="font-family:Phetsarath OT; color:#5f0f28">
      <label >ເບີໂທລະສັບ</label>
       <input class="form-control" type="text" name="tel" value= "<?php echo $tel;?>">
    </div>
	<div class="form-group"> 
      <label>ເລກເຮືອນ</label>
       <input class="form-control" type="text" name="nhouse"value= "<?php echo $nhouse;?>"></div>
    </div>
    <div class="form-group"> 
      <label>ບ້ານ</label>
       <input class="form-control" type="text" name="village"value= "<?php echo $vill;?>"></div>
    </div>
	<div class="form-group"> 
      <label>ເມືອງ</label>
       <input class="form-control" type="text" name="district"value= "<?php echo $district;?>"></div>
    </div>
    <input name="submit" id="submit" class="btn btn-primary" type="submit" value="ແກ້ໄຂ">
    <a href="index.php" class="btn btn-danger" type="submit">ຍົກເລີກ<span class="glyphicon glyphicon-remove"></a>
  </fieldset>
</form>

</body>
</html>
