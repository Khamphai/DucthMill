<?php

if (isset($_GET['type'])) {
    $type = $_GET['type'];
    switch ($type) {

        case "update":
            update_status();
            break;

        case "del":
            del_pro();
            break;
    }
}


function update_status()
{

    include '../conndb.php';
    $status = $_GET['status'];
    $id = $_GET['id'];
    $sql = "UPDATE invoice SET status='$status' WHERE id_invoice=$id";
    $result = $mysqli->query($sql);
    if ($result) {
        header('Location: list_order.php');
    }else{
        echo "<script type='text/javascript'>alert('add pro failed!')</script>";
    }
}

function del_pro()
{
    include '../conndb.php';
    $cus_id = $_GET['cus_id'];
    $sql = "DELETE FROM customer WHERE cus_id=$cus_id";
    $result = $mysqli->query($sql);
    if ($result) {
        header('Location: list_cus.php');
    }else{
        echo "<script type='text/javascript'>alert('add pro failed!')</script>";
    }

}