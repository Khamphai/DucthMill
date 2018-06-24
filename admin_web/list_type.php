<?php
session_start();
require("../conndb.php");
?>
<html>
<head>

    <title>Manage Product</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <script src="./bootstrap/js/jquery.min.js" type="text/javascript"></script>
    <script src="./bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <style type="text/css">
        body{
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
            <h1>Manage product Type</h1>
            <form>
                <a href="add_type.php" class="btn btn-primary btn-lg">Add Type</a>
            </form>
            <table class="table table-hover table-bordered table"
                   style="text-align:center; font-family:Phetsarath OT;">
                <thead>
                <tr>
                    <th scope="col-sm-3">ID_Type</th>
                    <th scope="col-sm-3">Name_Type</th>
                    <th scope="col-sm-3">Edit</th>
                    <th scope="col-sm-3">Delete</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $i = 1;
                $sql = "SELECT * FROM type_pro ";
                $result = mysqli_query($mysqli, $sql);
                while ($row = mysqli_fetch_array($result)) {
                    extract($row);
                    ?>
                    <tr class="table-active">

                        <td><?= $i++ ?></td>
                        <td><?= $name_type ?></td>
                        <td>
                            <a href="edit_type.php?id_type=<?= $id_type ?>" class="btn btn-success btn-sm">
                                Edit
                            </a>
                        </td>
                        <td>
                            <a href="process_type.php?type=del&id_type=<?= $id_type ?>" onclick="alert();" class="btn btn-danger btn-sm">
                                Delete
                            </a>

                        </td>
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
