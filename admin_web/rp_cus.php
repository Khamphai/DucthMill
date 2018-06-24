<?php
session_start();
require("../conndb.php");
?>
<html>
<head>

    <title>Report Product</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <script src="./bootstrap/js/jquery.min.js" type="text/javascript"></script>
    <script src="./bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <style type="text/css">
        body {
            padding-top: 25px;
        }
    </style>
</head>
<body>
<?php

require("nav_admin.php");

?>
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <br>
            <table class="table table-hover table-bordered table"
                   style="text-align:center; font-family:Phetsarath OT;">
                <thead>
                <tr>
                    <th scope="col-sm-4">ID</th>
                    <th scope="col-sm-4">First_name</th>
                    <th scope="col-sm-4">Last_name</th>
                    <th scope="col-sm-4">Village</th>
                    <th scope="col-sm-4">District</th>
                    <th scope="col-sm-4">No House</th>
                    <th scope="col-sm-3">Phone</th>
                    <th scope="col-sm-3">Username</th>
                </tr>
                </thead>
                <tbody>

                <?php
                $i = 1;
                $sql = "SELECT * FROM customer";
                $result = mysqli_query($mysqli, $sql);
                while ($row = mysqli_fetch_array($result)) {
                    extract($row);
                    ?>
                    <tr class="table-active">
                        <td><?= $i++ ?></td>
                        <td><?= $first_name ?></td>
                        <td><?= $last_name ?></td>
                        <td><?= $vill_add ?></td>
                        <td><?= $dist_add ?></td>
                        <td><?= $no_house ?></td>
                        <td><?= $phone ?></td>
                        <td><?= $user_cus ?></td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>
