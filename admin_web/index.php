<?php
session_start();
if (!isset($_SESSION['admin_login'])) {
    header("Location:login.php");
}
require("../conndb.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Manage System</title>
    <link rel="stylesheet" href="../body.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="../css/textlink.css">
</head>
<style>
    body{
        padding-top: 25px;
    }
</style>
<body>

<?php

require("nav_admin.php");

?>


<br>
<br>
<div class="container">
    <div class="row">
        <div class="jumbotron">
            <center>
                <h1>Welcome to Admin System of DucthMill.la</h1>
            </center>

        </div>

    </div>
</div>


</body>
</html>
