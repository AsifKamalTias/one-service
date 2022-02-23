<?php
    //read data from json
    // $admin_data = file_get_contents("../model/adminInfo.json");
    // $json=json_decode($admin_data, true);
    // $admin_username = $json['admin'][0]['username'];
    // $admin_password = $json['admin'][0]['password'];

    include '../Models/get-admin-auth.php';
    $admin_username = getAdminUserName();
    $admin_password = getAdminPassword();
    // echo $admin_username;
    // echo $admin_password;

    //check if the username and password are correct
    if($_POST['username'] == $admin_username && $_POST['password'] == $admin_password) {
        if(isset($_POST['remember'])) {
            setcookie('one_service_admin_username', $_POST['username'], time() + (86400 * 30), "/");
            setcookie('one_service_admin_password', $_POST['password'], time() + (86400 * 30), "/");
        }
        else {
            setcookie('one_service_admin_username', $_POST['username'], time() - 3600, "/");
            setcookie('one_service_admin_password', $_POST['password'], time() - 3600, "/");
        }
        session_start();
        $_SESSION['one_service_admin_username'] = $_POST['username'];
        $_SESSION['one_service_admin_password'] = $_POST['password'];
        header("Location: ../Views/admin/admin-dashboard.php");
    }
    else {
        header("Location: ../Views/admin/admin-sign-in.php?signin=false");
    }
?>