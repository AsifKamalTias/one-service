<?php
    include '../Models/admin.php';
    // $admin_username = getAdminUserName();
    // $admin_password = getAdminPassword();
    if(isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $adminValid = checkAdminSignInValid($username, $password);
        if($adminValid)
        {
            if(isset($_POST['remember'])) {
                setcookie('one_service_admin_username', $_POST['username'], time() + (86400 * 30), "/");
                setcookie('one_service_admin_password', $_POST['password'], time() + (86400 * 30), "/");
            }
            else{
                setcookie('one_service_admin_username', $_POST['username'], time() - 3600, "/");
                setcookie('one_service_admin_password', $_POST['password'], time() - 3600, "/");
            }
            session_start();
            $_SESSION['one_service_admin_username'] = $_POST['username'];
            $_SESSION['one_service_admin_password'] = $_POST['password'];
            header("Location: ../Views/admin/admin-dashboard.php");
        }
        else
        {
            header("Location: ../Views/admin/admin-signin.php?signin=false");
        }

    }
    else
    {
        header("Location: ../Views/admin/admin-signin.php?signin=false");
    }
        

    //check if the username and password are correct
    // if($_POST['username'] == $admin_username && $_POST['password'] == $admin_password) {
    //     if(isset($_POST['remember'])) {
    //         setcookie('one_service_admin_username', $_POST['username'], time() + (86400 * 30), "/");
    //         setcookie('one_service_admin_password', $_POST['password'], time() + (86400 * 30), "/");
    //     }
    //     else {
    //         setcookie('one_service_admin_username', $_POST['username'], time() - 3600, "/");
    //         setcookie('one_service_admin_password', $_POST['password'], time() - 3600, "/");
    //     }
    //     session_start();
    //     $_SESSION['one_service_admin_username'] = $_POST['username'];
    //     $_SESSION['one_service_admin_password'] = $_POST['password'];
    //     header("Location: ../Views/admin/admin-dashboard.php");
    // }
    // else {
    //     header("Location: ../Views/admin/admin-signin.php?signin=false");
    // }
?>