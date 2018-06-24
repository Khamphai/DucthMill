<?php
session_start();
require("conndb.php");
$cus_id = $_SESSION['login'];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>History Invoice</title>
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

        <?php
        $sql = "SELECT * FROM invoice WHERE cus_id=$cus_id ORDER BY id_invoice DESC ";
        $result = mysqli_query($mysqli, $sql);

        while ($row = mysqli_fetch_array($result)) {
            extract($row);
            ?>
            <div class="col-md-12">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h1 class="panel-title">
                                <span class="label label-danger">
                                    <?php $date = date_create($date_invoice);
                                    echo date_format($date, "Y/m/d"); ?>
                                </span>
                        </h1>
                    </div>
                    <div class="panel-body">
                        <ul>
                            <li>Order ID: <?= $id_invoice ?></li>
                            <li>Status: <span class="label label-info"><?= $status ?></span></li>
                        </ul>

                        <table class="table table-hover table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Image</th>
                                <th scope="col">product name</th>
                                <th scope="col">Qtt</th>
                                <th scope="col">price</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $i = 0;
                            $pro_price = 0;
                            $total = 0;

                            $sql2 = "SELECT p.picture as pic, p.name_pro as name, i.quantity_invoice as qtt, p.price as price, i.pro_id FROM detail_invoice i INNER JOIN product p ON(i.pro_id=p.pro_id) WHERE i.cus_id=$cus_id AND id_invoice=$id_invoice";
                            $result2 = mysqli_query($mysqli, $sql2);

                            while ($row2 = mysqli_fetch_array($result2)) {
                                extract($row2);
                                $pro_price = ($qtt * $price);
                                $total = $total + $pro_price;
                                ?>
                                <tr>
                                    <td><?= ++$i ?></td>
                                    <td><img src="./image/products/<?= $pic ?>" width="80px" height="60px"/></td>
                                    <td><?= $name ?></td>
                                    <td><?= $qtt ?></td>
                                    <td>₭<?php echo number_format($pro_price, 2) ?></td>

                                </tr>
                                <?php
                            }
                            ?>
                            <tr>
                                <th colspan="4">Total Price</th>
                                <td>₭<?php echo number_format($total, 2) ?></td>

                            </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            <?php
        }
        ?>

    </div>


</div>


</body>
</html>
