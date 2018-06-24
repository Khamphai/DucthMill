<?php
require("../conndb.php");
?>

<html>
<head>
    <title>Add Product</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <script src="../bootstrap/js/jquery.min.js" type="text/javascript"></script>
        <script src="../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <style type="text/css">
            body {
                padding-top: 25px;
            }

            #log {
                border: 2px solid black;
                padding: 20px 40px;
                margin-top: 40px;
                font-family: Phetsarath OT;
                color: #5f0f28;

            }
        </style>

</head>
<body>
<?php
require("nav_admin.php");
?>
<div class="container">
    <div class="row">

        <form class="form-group row col-md-4">
        </form>

        <form action="process_emp.php?type=add" method="POST" enctype="multipart/form-data" class="form-group row col-lg-6 form1" style="text-alight:left" id="log">
            <div class="form-group">
                <label>First_name</label>
                <input class="form-control" type="text" placeholder="" name="fname">
            </div>
            <div class="form-group">
                <label>Last_name</label>
                <input class="form-control" type="text" placeholder="" name="lname">
            </div>

            <div class="form-group">
                <label>Phone</label>
                <input class="form-control" type="text" placeholder="" name="phone">
            </div>

            <div class="form-group" style="font-family:Phetsarath OT; color:#5f0f28">
                <label>Username</label>
                <input class="form-control" type="text" placeholder="" name="username">
            </div>

            <div class="form-group">
                <label>password</label>
                <input class="form-control" type="password" placeholder="" name="password">

            </div>
            <div class="form-group">
                <label>Position</label>
                <select class="form-control" name="position">
                    <option value="employee">Employee</option>
                    <option value="Seller">Seller</option>
                    <option value="Admin">Admin</option>
                </select>

            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit" name="submit" onclick="alert();">ຍອມຮັບ
                    <span class="glyphicon glyphicon-ok"></span>
                </button>

                <a href="list_emp.php" class="btn btn-danger" name="cancel">ຍົກເລີກ <span
                        class="glyphicon glyphicon-remove"></span></a>

            </div>
        </form>
    </div>
</div>
</body>
</html>


