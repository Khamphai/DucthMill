 <html>
 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href=".//bootstrap/css/bootstrap.min.css" crossorigin="anonymous">

    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css" crossorigin="anonymous">

    <title>DucthMill.la</title>
    </head>


 <style type="text/css">
 .bg {
 	background-image:url("image/bg1.jpg");
 	background-repeat: no-repeat;
 	width:100%;
 	height :100%;
 }
#log {
	border :2px solid black;
	padding: 60px 40px;
	margin-top:40px;
}
.img {

	width:12 0px;
	margin:auto;
	margin-top: 20px;
	margin-bottom: 20px;
	float: center;

}

.label{
	color: black;
	text-align: left;
	font-weight: bolder 20px;

} 

 </style>
 </head>
 <body>

 <?php

// include 'nav.php';

 include 'login_cus.php';

 ?>
 	<div class="container-fluid bg">
 		<div class="row">
 		<div class="col-lg-4 "></div>
 			
 			<div class="col-lg-4 ">
 				<form method="POST" id="log">
 				
 				<img class="img img-responsive circle"  src="logo/icon-user.png" width="80px" >

 				<div class="form-group">
 						<label>User Name</label>
 						<input type="text" class="form-control" placeholder="Username" name="uname" required>
 					</div>  
 					<div class="form-group">
 						<label >Password</label>
 						<input type="password" class="form-control" placeholder="Password" name="passwd" required>
 					</div>
 					<div class="checkbox">
                        <input type="submit" class="btn btn-success btn-block" id="login" name="login" value="Login">
                        <a href="index.php" class="btn btn-danger btn-block">Cencal </a>
 					</div>
 				</form>
 			
 		</div>
 	</div>
 </body>
 </html>