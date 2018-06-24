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
            <h1>Manage Employee</h1>
            <a href="add_emp.php" class="btn btn-primary btn-lg">Add Employee</a>
            <br>
            <br>
            <table class="table table-hover table-bordered table"
                   style="text-align:center; font-family:Phetsarath OT;">
                <thead>
                <tr>
                    <th scope="col-sm-4">ID</th>
                    <th scope="col-sm-4">First_name</th>
                    <th scope="col-sm-4">Last_name</th>
                    <th scope="col-sm-3">Phone</th>
                    <th scope="col-sm-3">User_name</th>
                    <th scope="col-sm-3">Password</th>
                    <th scope="col-sm-3">Position</th>
                    <th scope="col-sm-3">Edit</th>
                    <th scope="col-sm-3">Delete</th>
                </tr>
                </thead>
                <tbody>

                <?php
                $i = 1;
                $sql = "SELECT * FROM emp";
                $result = mysqli_query($mysqli, $sql);
                while ($row = mysqli_fetch_array($result)) {
                    extract($row);
                    ?>
                    <tr class="table-active">
                        <td><?= $i++ ?></td>
                        <td><?= $first_name ?></td>
                        <td><?= $last_name ?></td>
                        <td><?= $phone ?></td>
                        <td><?= $user_name ?></td>
                        <td><?= $password ?></td>
                        <td><?= $position ?></td>
                        <td>
                            <a href="edit_emp.php?ID_emp=<?= $ID_emp ?>" class="btn btn-success btn-sm">
                                Edit
                            </a>
                        </td>
                        <td>
                            <a href="process_emp.php?type=del&ID_emp=<?=$ID_emp?>" class="btn btn-danger btn-sm">
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
