<?php
session_start();
require("conndb.php");
$i = 0;
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
    body {
        padding-top: 100px;
    }
</style>
<body>
<?php
require("nav.php");


?>

<div class="container">

    <div class="row">
        <a href="products.php" class="btn btn-success"><span class="glyphicon glyphicon-arrow-left"></span> Back to Shop</a>
        <br>
        <br>
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Cart Detail</h3>
            </div>
            <div class="panel-body">
                <table class="table table-hover table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Image</th>
                        <th scope="col">product name</th>
                        <th scope="col">Qtt</th>
                        <th scope="col">price</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $pro_price = 0;
                    $total = 0;

                    $cus_id = $_SESSION['login'];
                    $sql = "SELECT p.picture as pic, p.name_pro as name, i.quantity_invoice as qtt, p.price as price, i.pro_id FROM detail_invoice i INNER JOIN product p ON(i.pro_id=p.pro_id) WHERE i.cus_id=$cus_id AND id_invoice IS NULL";
                    $result = mysqli_query($mysqli, $sql);

                    while ($row = mysqli_fetch_array($result)) {
                        extract($row);
                        $pro_price = ($qtt * $price);
                        $total = $total + $pro_price;
                        ?>
                        <tr>
                            <td><?= ++$i ?></td>
                            <td><img src="./image/products/<?= $pic ?>" width="100px" height="80px"/></td>
                            <td><?= $name ?></td>
                            <td>
                                <form class="form-inline" action="process_cart.php?type=update" method="post">
                                    <input type="number" class="form-control" min="1" max="10" name="qtt"
                                           value="<?= $qtt ?>">
                                    <input type="hidden" name="pro_id" value="<?= $pro_id ?>">
                                    <input type="hidden" name="cus_id" value="<?= $cus_id ?>">
                                    <button type="submit" name="update" class="btn btn-success btn-sm">
                                        <span class="glyphicon glyphicon-ok"></span>
                                    </button>
                                </form>
                            </td>
                            <td>₭<?php echo number_format($pro_price, 2) ?></td>
                            <td>
                                <form class="form-inline" action="process_cart.php?type=del" method="post">
                                    <input type="hidden" name="pro_id" value="<?= $pro_id ?>">
                                    <input type="hidden" name="cus_id" value="<?= $cus_id ?>">
                                    <button type="submit" name="update" class="btn btn-danger btn-sm">
                                        <span class="glyphicon glyphicon-remove"></span>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                    <tr>
                        <th colspan="5">Total Price</th>
                        <td>₭<?php echo number_format($total, 2) ?></td>

                    </tr>
                    </tbody>
                </table>

                <div class="pull-right">
                    <?php
                    if ($i > 0) {
                        ?>
                        <form class="form-inline" action="process_cart.php?type=checkout" method="post">
                            <input type="hidden" name="cus_id" value="<?= $cus_id ?>">
                            <button type="submit" name="update" class="btn btn-primary btn-lg">Check Out <span class="glyphicon glyphicon-arrow-right"></span></button>
                        </form>
                        <?php
                    }
                    ?>
                </div>

            </div>
        </div>
    </div>




</div>


</body>
</html>
