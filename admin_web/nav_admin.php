<!DOCTYPE html>
<html>
<head>
    <title>DucthMill.com.la</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <script src="../bootstrap/js/jquery.min.js" type="text/javascript"></script>
    <script src="../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

    <style>
        nav {
            font-family: Phetsarath OT;
            font-size: 50px;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-inner navbar-fixed-top" style="background-color:#b3e7ff">
    </div>
    <div class="container-fluid">

        <a class="navbar-brand" href="#"><img src="../logo/logoducth.png" width="90" height="90" margin-top="-2px"/></a>


        <ul class="nav navbar-nav" style=" font-size:20px;">
            <li><a href="index.php"><span class="glyphicon glyphicon-asterisk"></span>&nbsp; Admin System</a></li>


        </ul>

        <ul class="nav navbar-nav" style=" font-size:20px;">

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    <span class="glyphicon glyphicon-wrench"></span>&nbsp; ຈັດການຂໍ້ມູນ
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="list_type.php"><span class="glyphicon glyphicon-triangle-right"></span>&nbsp; ປະເພດສິນຄ້າ</a></li>
                    <li><a href="list_product.php"><span class="glyphicon glyphicon-triangle-right"></span>&nbsp; ລາຍການສິນຄ້າ</a></li>
                    <li><a href="list_emp.php"><span class="glyphicon glyphicon-triangle-right"></span>&nbsp; ພະນັກງານ</a></li>
                    <li><a href="list_cus.php"><span class="glyphicon glyphicon-triangle-right"></span>&nbsp; ລູກຄ້າ</a></li>
                </ul>
            </li>
        </ul>

        <ul class="nav navbar-nav" style=" font-size:20px;">

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    <span class="glyphicon glyphicon-folder-open"></span>&nbsp;&nbsp; ລາຍງານ<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="list_receive.php"><span class="glyphicon glyphicon-triangle-right"></span>&nbsp; ລາຍງານການສົ່ງສິນຄ້າ</a></li>
                    <li><a href="rp_emp.php"><span class="glyphicon glyphicon-triangle-right"></span>&nbsp; ລາຍງານຂໍ້ມູນພະນັກງານ</a></li>
                    <li><a href="rp_cus.php"><span class="glyphicon glyphicon-triangle-right"></span>&nbsp; ລາຍງານຂໍ້ມູນສິນຄ້າທັງໝົດ</a></li>
                </ul>
            </li>
        </ul>

        <?php
        if (isset($_SESSION['admin_login'])) {
            ?>
            <ul class="nav navbar-nav navbar-right" style=" font-size:20px; ">
                <li><a href="list_order.php"><span class="glyphicon glyphicon-list-alt"></span> Order List</a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="glyphicon glyphicon-user"></span>
                        <?php echo $_SESSION['ef'] . ' ' . $_SESSION['el']?>
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="logout.php">
                                <span class="glyphicon glyphicon-log-out"></span> ອອກຈາກລະບົບ</a>
                        </li>
                    </ul>
                </li>

            </ul>
            <?php
        }
        ?>

    </div>
</nav>


<script src="../bootstrap/js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>

