<?php
require("../conndb.php");

if (isset($_GET['pro_id']) && isset($_GET['type_id']))

    $pro_id = $_GET['pro_id'];
    $type_id = $_GET['type_id'];

$sql = "SELECT * FROM product WHERE pro_id=$pro_id";
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

        <form action="process_pro.php?type=update" method="POST" enctype="multipart/form-data" class="form-group row col-lg-6 form1" style="text-alight:left"
              id="log">
            <legend style="font-family:Phetsarath OT; color:blue; font-size:40px ; text-align:center;"></legend>
            <input type="hidden" name="pro_id" value="<?=$pro_id?>">
            <div class="form-group">
                <label>Picture</label>
                <input type="file" placeholder="" name="image" required>
            </div>
            <div class="form-group">
                <label>Name Product</label>
                <input class="form-control" type="text" placeholder="" name="pro_name" value="<?=$name_pro?>">
            </div>

            <div class="form-group">
                <label>product date </label>
                <input class="form-control" type="date" placeholder="" name="pro_date" value="<?=$pro_date?>">
            </div>

            <div class="form-group" style="font-family:Phetsarath OT; color:#5f0f28">
                <label>prodduct exprie</label>
                <input class="form-control" type="date" placeholder="" name="pro_exp" value="<?=$exprie?>">
            </div>

            <div class="form-group">
                <label>Price</label>
                <input class="form-control" type="number" placeholder="" name="price" value="<?=$price?>">

            </div>

            <div class="form-group">
                <label>type_id</label>
                <select name="id_type" class="form-control">
                    <?php
                    $sql2 = "SELECT * FROM type_pro";
                    $ress = mysqli_query($mysqli, $sql2);
                    while ($r = mysqli_fetch_array($ress)) {
                        extract($r);
                        ?>
                        <option value="<?= $id_type ?>" <?php if($id_type == $type_id) echo "selected"?>><?= $name_type ?></option>
                        <?php
                    }
                    ?>
                </select>

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


