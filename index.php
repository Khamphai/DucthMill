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
        padding-top: 25px;
    }
</style>
<body>

<?php

require("nav.php");

require("slide.php");
?>


<br>
<br>
<div class="container">
    <div class="row">
        <?php
        $sql = "SELECT * FROM product LIMIT 8";
        $result = mysqli_query($mysqli, $sql);

        while ($row = mysqli_fetch_array($result)) {
            extract($row);
            ?>
            <a href="view_product.php?pro_id=<?= $pro_id ?>">
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <img src="./image/products/<?= $picture ?>" alt="...">
                        <div class="caption">
                            <h2><?= $name_pro ?></h2>
                            <h3 class="text text-success">₭<?php echo number_format($price, 2)?></h3>
                        </div>
                    </div>
                </div>
            </a>
            <?php
        }
        ?>
    </div>
</div>


<?php
include 'footer.php';
?>

</body>
</html>
