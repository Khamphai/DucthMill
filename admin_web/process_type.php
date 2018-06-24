<?php

if (isset($_GET['type'])) {
    $id_type = $_GET['type'];
    switch ($id_type) {

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
        $name_type = $_POST['name_type'];
            $sql = "insert into type_pro (name_type) values ('$name_type')";
            $result = $mysqli->query($sql);
            if ($result) {
                header('Location: list_type.php');
            }else{
                echo "<script type='text/javascript'>alert('add pro failed!')</script>";
            }
    }

}

function update_pro()
{
    include '../conndb.php';

    if (isset($_POST['submit'])) {

        $name_type = $_POST['name_type'];
        $id_type = $_POST['id_type'];

        $sql = "UPDATE type_pro SET name_type='$name_type' WHERE id_type=$id_type";
        $result = $mysqli->query($sql);
        if ($result) {
            header('Location: list_type.php');
        } else {
            echo "<script type='text/javascript'>alert('add pro failed!')</script>";
        }
    }
}


function del_pro()
{
    include '../conndb.php';
    $id_type = $_GET['id_type'];
    $sql = "DELETE FROM type_pro WHERE id_type=$id_type";
    $result = $mysqli->query($sql);
    if ($result) {
        header('Location: list_type.php');
    }else{
        echo "<script type='text/javascript'>alert('add pro failed!')</script>";
    }

}