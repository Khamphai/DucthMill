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
        $fname=$_POST['fname'];
        $lname = $_POST['lname'];
        $phone = $_POST['phone'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $position = $_POST['position'];

        $sql = "insert into emp (first_name,last_name,phone,user_name,password,position) values('$fname','$lname','$phone','$username','$password','$position')";
        $result = $mysqli->query($sql);
            if ($result) {
                header('Location: list_emp.php');
            }else{
                echo "<script type='text/javascript'>alert('add pro failed!')</script>";
            }
        } else {
            echo "<script type='text/javascript'>alert('failed!')</script>";
        }

}

function update_pro()
{
    include '../conndb.php';

    if (isset($_POST['submit'])) {
        $ID_emp=$_POST['ID_emp'];
        $fname=$_POST['fname'];
        $lname = $_POST['lname'];
        $phone = $_POST['phone'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $position = $_POST['position'];

            $sql = "UPDATE emp SET first_name='$fname',last_name='$lname',phone='$phone',user_name='$username',password='$password',POSITION ='$position' WHERE ID_emp=$ID_emp";
            $result = $mysqli->query($sql);
            if ($result) {
                header('Location: list_emp.php');
            }else{
                echo "<script type='text/javascript'>alert('add pro failed!')</script>";
            }
        } else {
            echo "<script type='text/javascript'>alert('failed!')</script>";
        }
}

function del_pro()
{
    include '../conndb.php';
    $ID_emp = $_GET['ID_emp'];
    $sql = "DELETE FROM emp WHERE ID_emp=$ID_emp";
    $result = $mysqli->query($sql);
    if ($result) {
        header('Location: list_emp.php');
    }else{
        echo "<script type='text/javascript'>alert('add pro failed!')</script>";
    }

}