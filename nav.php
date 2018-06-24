<!DOCTYPE html>
<html>
<head>
    <title>DucthMill.com.la</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/jquery.min.js" type="text/javascript"></script>
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

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

        <a class="navbar-brand" href="#"><img src="logo/logoducth.png" width="90" height="90" margin-top="-2px"/></a>


        <ul class="nav navbar-nav" style=" font-size:20px;">
            <li><a href="index.php"><span class="glyphicon glyphicon-home"></span>&nbsp; ຫນ້າຫລັກ</a></li>
            <li><a href="products.php"><span class="glyphicon glyphicon-tasks"></span> ສິນຄ້າທັງໝົດ</a></li>
            <li><a href="#" id="btn_about"> <span class="glyphicon glyphicon-list-alt"></span> ກ່ຽວກັບ</a></li>

        </ul>

        <?php
        if (!isset($_SESSION['login'])) {
            ?>
            <ul class="nav navbar-nav navbar-right" style=" font-size:20px; ">
                <li><a href="f_regis.php"><span class="glyphicon glyphicon-user"></span> ສະຫມັກລູກຄ້າ</a></li>
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> ເຂົ້າສູ່ລະບົບ</a></li>
            </ul>
            <?php
        }
        ?>
        <?php
        if (isset($_SESSION['login'])) {
            ?>
            <ul class="nav navbar-nav navbar-right" style=" font-size:20px; ">
                <li><a href="history_invoice.php"><span class="glyphicon glyphicon-list-alt"></span> ລາຍການທິ່ສັ່ງ</a>
                </li>
                <li><a href="view_cart.php"><span
                                class="glyphicon glyphicon-shopping-cart"></span> ກະຕ່າສີນຄ້າ</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="glyphicon glyphicon-user"></span>
                        <?php echo $_SESSION['f'] . ' ' . $_SESSION['l']?>
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
</body>
</html>

<script src="bootstrap/js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
    $(function () {
        $("#btn_about").on('click', function () {
            $.ajax({
                url: "popup_ab.php",
                data: "id=" + $(this).attr("id"),
                type: "GET",
                beforeSend: function () {
                },
                success: function (result) {
                    $("#addbook_dialog_modal").html('');
                    $("#addbook_dialog_modal").html(result);
                    $("#addbookModal").modal('show');
                },
                error: function (error) {
                    alert(error.responseText);
                }
            });
        });
    });
</script>
<!-- Large modal -->
<button type="button" class="btn btn-primary btn-lg  sr-only" id="btn_msg1" data-toggle="modal"
        data-target="#exampleModal">Launch demo modal
</button>
<div class="modal fade" id="addbookModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" id="addbook_dialog_modal" role="document"></div>
</div>