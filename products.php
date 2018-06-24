<?php
session_start();
require("conndb.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>DucthMill.com.la</title>
    <link rel="stylesheet" href="body.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="css/textlink.css">
</head>
<style>
    body{
        padding-top: 70px;
    }
</style>
<body>

<?php
require("nav.php");
?>


<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-2">
            <div class="list-group">
                <a href="#" class="list-group-item active">
                    Product Type
                </a>
                <a href="products.php" class="list-group-item">All</a>
                <?php
                $sqlt = "SELECT * FROM type_pro";
                $resultt = mysqli_query($mysqli, $sqlt);

                while ($rowt = mysqli_fetch_array($resultt)) {
                extract($rowt);
                ?>
                <a href="products.php?type=<?=$id_type?>" class="list-group-item"><?=$name_type?></a>
                    <?php
                }
                ?>
            </div>
        </div>
        <div class="col-md-10">
            <?php
            if (isset($_GET['type'])){
                $type = $_GET['type'];
                $sql = "SELECT * FROM product WHERE id_type=$type";
            }else{
                $sql = "SELECT * FROM product";
            }

            $result = mysqli_query($mysqli, $sql);

            while ($row = mysqli_fetch_array($result)) {
                extract($row);
                ?>
                <a href="view_product.php?pro_id=<?= $pro_id ?>">
                    <div class="col-md-3">
                        <div class="thumbnail">
                            <img src="./image/products/<?= $picture ?>" alt="...">
                            <div class="caption">
                                <h2><?= $name_pro ?></h2>
                                <h3>₭<?php echo number_format($price, 2)?></h3>
                            </div>
                        </div>
                    </div>
                </a>
                <?php
            }
            ?>
        </div>

    </div>
</div>

</body>
</html>
