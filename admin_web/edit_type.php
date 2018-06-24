<?php
require("../conndb.php");

if (isset($_GET['id_type']))

$type_id = $_GET['id_type'];

$sql = "SELECT * FROM type_pro WHERE id_type=$type_id";
$result = mysqli_query($mysqli, $sql);
$row = mysqli_fetch_assoc($result);
extract($row);

?>

<html>
<head>
    <title>Add Product</title>
    <head>

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

        <form action="process_type.php?type=update" method="POST" enctype="multipart/form-data" class="form-group row col-lg-6 form1" style="text-alight:left"
              id="log">
            <legend style="font-family:Phetsarath OT; color:blue; font-size:40px ; text-align:center;"></legend>
            <input type="hidden" name="id_type" value="<?=$id_type?>">
            <div class="form-group">
                <label>Name Product</label>
                <input class="form-control" type="text" placeholder="" name="name_type" value="<?=$name_type?>">
            </div>

            <div class="form-group">
                <button class="btn btn-primary" type="submit" name="submit" onclick="alert();">ຍອມຮັບ
                    <span class="glyphicon glyphicon-ok"></span>
                </button>

                <a href="list_product.php" class="btn btn-danger" name="cancel">ຍົກເລີກ <span
                        class="glyphicon glyphicon-remove"></span></a>

            </div>
        </form>
    </div>
</div>
</div>
</body>
</html>


