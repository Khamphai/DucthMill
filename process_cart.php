<?php

if (isset($_GET['type'])) {

    $type = $_GET['type'];

    switch ($type) {

        case "add":
            add_pro();
            break;

        case "update":
            update_cart();
            break;

        case "del":
            del_cart();
            break;

        case "checkout":
            check_out();
            break;
    }
}

function add_pro()
{
    include 'conndb.php';

    $pro_id = $_POST['pro_id'];
    $qtt = $_POST['qtt'];
    $cus_id = $_POST['cus_id'];

    $sql2 = "SELECT * FROM detail_invoice WHERE pro_id=$pro_id AND cus_id=$cus_id AND id_invoice IS NULL";
    $result2 = mysqli_query($mysqli, $sql2);
    $row = mysqli_num_rows($result2);
    if ($row > 0) {
        header("Location: view_product.php?pro_id=$pro_id");
        exit();
    }else{
        $sql3 = "INSERT INTO detail_invoice(pro_id, quantity_invoice, cus_id) VALUES ($pro_id, $qtt, $cus_id)";
        $result3 = mysqli_query($mysqli, $sql3);
        if (!$result3) {
            echo "<script>alert('Add Product to Cart failed.');</script>";
        }else{
            header("Location: view_cart.php");
        }
    }




}

function update_cart()
{
    include 'conndb.php';

    $pro_id = $_POST['pro_id'];
    $qtt = $_POST['qtt'];
    $cus_id = $_POST['cus_id'];

    $sql = "UPDATE detail_invoice SET quantity_invoice=$qtt WHERE pro_id=$pro_id AND cus_id=$cus_id AND id_invoice IS NULL";
    $result = mysqli_query($mysqli, $sql);
    if (!$result) {
        echo "<script>alert('Update Product to Cart failed.');</script>";
    }else{
        header("Location: view_cart.php");
    }
}

function del_cart()
{
    include 'conndb.php';

    $pro_id = $_POST['pro_id'];
    $cus_id = $_POST['cus_id'];

    $sql = "DELETE FROM detail_invoice WHERE pro_id=$pro_id AND cus_id=$cus_id AND id_invoice IS NULL";
    $result = mysqli_query($mysqli, $sql);
    if (!$result) {
        echo "<script>alert('Delete Product to Cart failed.');</script>";
    }else{
        header("Location: view_cart.php");
    }
}


function check_out()
{

    session_start();
    include 'conndb.php';

    $cus_id = $_POST['cus_id'];

    $sql = "INSERT INTO invoice(cus_id, status) VALUES ($cus_id, 'Pending')";
    $result = mysqli_query($mysqli, $sql);
    if (!$result) {
        echo "<script>alert('Add invoice failed.');</script>";
    }else{

        $sql2 = "SELECT id_invoice FROM invoice ORDER BY id_invoice DESC LIMIT 1";
        $result2 = mysqli_query($mysqli, $sql2);
        $row = mysqli_fetch_assoc($result2);
        $id_inv = $row['id_invoice'];
        if ($row > 0) {
            $sql3 = "UPDATE detail_invoice SET id_invoice=$id_inv WHERE cus_id=$cus_id AND id_invoice IS NULL";
            $result3 = mysqli_query($mysqli, $sql3);
            if ($result3) {
                header("Location: history_invoice.php");
            }
        }else{
            echo "<script>alert('Can not Check Out.');</script>";
        }



    }





}