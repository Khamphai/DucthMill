<?php
ob_start();
session_start();
require("../conndb.php");

if(isset($_POST['admin'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql="SELECT * FROM emp WHERE user_name='$username' and password='$password'";
    $result= $mysqli->query($sql);
    if(mysqli_num_rows($result) == 1){
        while( $row = $result->fetch_array(MYSQLI_ASSOC)){
            $ef = $row['first_name'];
            $el = $row['last_name'];
            $p = $row['position'];
            $id = $row['ID_emp'];
            $_SESSION['admin_login'] = $id;
            $_SESSION['ef'] = $ef;
            $_SESSION['el'] = $el;
            $_SESSION['p'] = $p;
            header("Location:index.php");
            exit();
        }
    }
    else{
        echo "<script>alert('Failure.');</script>";
    }
}
?>
<html>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" crossorigin="anonymous">
<link rel="stylesheet" href="../bootstrap/css/bootstrap.css" crossorigin="anonymous">
<title>Manage System</title>
</head>


<style type="text/css">
    .bg {
        background-image: url("../image/bg1.jpg");
        background-repeat: no-repeat;
        width: 100%;
        height: 100%;
    }

    #log {
        border: 2px solid black;
        padding: 60px 40px;
        margin-top: 40px;
    }

    .img {
        width: 12 0px;
        margin: auto;
        margin-top: 20px;
        margin-bottom: 20px;
        float: center;
    }


</style>
</head>
<body>

<?php


?>
<div class="container-fluid bg">
    <div class="row">
        <div class="col-lg-4 "></div>

        <div class="col-lg-4 ">
            <form method="POST" id="log">
                <img class="img img-responsive circle" src="../logo/icon-user.png" width="80px">
                <center>
                    <h4>Manage System</h4>
                </center>
                <div class="form-group">
                    <label>User Name</label>
                    <input type="text" class="form-control" placeholder="Username" name="username" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" placeholder="Password" name="password" required>
                </div>
                <div class="checkbox">
                    <input type="submit" class="btn btn-success btn-block" id="login" name="admin" value="Login">
                    <a href="index.php" class="btn btn-danger btn-block">Cencal </a>
                </div>
            </form>

        </div>
    </div>
</body>
</html>