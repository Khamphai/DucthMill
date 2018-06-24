<?php
session_start();
require("session.php");
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
    <style>
        .zoom:hover {
            transform: scale(1.05);
        }

        .t {
            margin-top: 250px;
            margin-bottom: 120px;

        }
    </style>
</head>
<body>

<?php
require("nav_cus.php");
require("slide.php");
//	require("footer.php");
//echo "ffff $id_cus";
?>

</body>
</html>
