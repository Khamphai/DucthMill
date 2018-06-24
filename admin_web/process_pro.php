<?php

if (isset($_GET['type'])) {

    $type = $_GET['type'];

    switch ($type) {

        case "add":
            add_pro();
            break;

        case "update":
            update_pro();
            break;

        case "del":
            del_pro();
            break;
    }
}

function add_pro()
{
    include '../conndb.php';

    if (isset($_POST['submit'])) {

        $target = "../image/products/" . basename($_FILES['image']['name']);
        $pic = $_FILES['image']['name'];
        $namepro = $_POST['pro_name'];
        $date = $_POST['pro_date'];
        $exp = $_POST['pro_exp'];
        $price = $_POST['price'];
        $id_type = $_POST['id_type'];

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $sql = "insert into product (picture,name_pro,pro_date,exprie,price,id_type) values ('$pic','$namepro','$date','$exp','$price','$id_type')";
            $result = $mysqli->query($sql);
            if ($result) {
                header('Location: list_product.php');
            }else{
                echo "<script type='text/javascript'>alert('add pro failed!')</script>";
            }
        } else {
            echo "<script type='text/javascript'>alert('failed!')</script>";
        }
    }

}

function update_pro()
{
    include '../conndb.php';

    if (isset($_POST['submit'])) {

        $target = "../image/products/" . basename($_FILES['image']['name']);
        $pic = $_FILES['image']['name'];
        $namepro = $_POST['pro_name'];
        $pro_id = $_POST['pro_id'];
        $date = $_POST['pro_date'];
        $exp = $_POST['pro_exp'];
        $price = $_POST['price'];
        $id_type = $_POST['id_type'];

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $sql = "UPDATE product SET picture='$pic',name_pro='$namepro',pro_date='$date',exprie='$exp',price='$price',id_type='$id_type' WHERE pro_id=$pro_id";
            $result = $mysqli->query($sql);
            if ($result) {
                header('Location: list_product.php');
            }else{
                echo "<script type='text/javascript'>alert('add pro failed!')</script>";
            }
        } else {
            echo "<script type='text/javascript'>alert('failed!')</script>";
        }
    }


}

function del_pro()
{
    include '../conndb.php';
    $pro_id = $_GET['pro_id'];
    $sql = "DELETE FROM product WHERE pro_id=$pro_id";
    $result = $mysqli->query($sql);
    if ($result) {
        header('Location: list_product.php');
    }else{
        echo "<script type='text/javascript'>alert('add pro failed!')</script>";
    }

}