<?php
    session_start();
    require("conndb.php");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Cart</title>
</head>

<style>
    body{
        padding-top: 100px;
    }
</style>
<body>
<?php
require("nav.php");

$pro_id = $_GET['pro_id'];
$sql = "SELECT * FROM product WHERE pro_id=$pro_id";
$result = mysqli_query($mysqli, $sql);
$row = mysqli_fetch_assoc($result);
extract($row);
?>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <a href="#" class="thumbnail">
                <img src="./image/products/<?=$picture?>" alt="...">
            </a>
        </div>

        <div class="col-md-6">
            <h1>
                <?=$name_pro?>
            </h1>
            <h3>
                ₭<?php echo number_format($price, 2)?>
            </h3>

            <br>
            <?php
            if (isset($_SESSION['login'])) {
                ?>
                <form method="post" action="process_cart.php?type=add">
                    <input type="hidden" name="pro_id" value="<?=$pro_id?>">
                    <input type="hidden" name="qtt" value="1">
                    <input type="hidden" name="cus_id" value="<?=$_SESSION['login']?>">
                    <button type="submit" name="add" class="btn btn-success btn-lg">
                        <span class="glyphicon glyphicon-plus"></span> Add to Cart
                    </button>
                </form>
                <?php
            }else{
            ?>
                <h3 style="color: #ff2638; font-weight: bold">
                    ( ກະລຸນາເຂົ້າສູ່ລະບົບກ່ອນ )
                </h3>
                <?php
            }
            ?>
        </div>

    </div>

    <br>
    <br>
    <h1 style="margin-left: 20px; font-weight: bold">ສິນຄ້າແນະນຳ</h1>
    <hr>
</div>



<div class="container">
    <div class="row">
        <?php
        $sql = "SELECT * FROM product LIMIT 4";
        $result = mysqli_query($mysqli, $sql);

        while ($row = mysqli_fetch_array($result)) {
            extract($row);
            ?>
            <a href="view_product.php?pro_id=<?=$pro_id?>">
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <img src="./image/products/<?=$picture?>" alt="...">
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


</body>
</html>
