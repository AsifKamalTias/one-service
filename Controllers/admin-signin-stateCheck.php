<?php
    session_start();
    function isAdminSignedIn()
    {
        if(!isset($_COOKIE['one_service_admin_username']) && !isset($_COOKIE['one_service_admin_password'])) {
            if(!isset($_SESSION['one_service_admin_username']) && !isset($_SESSION['one_service_admin_password'])) {
                return false;
            }
            else {
                return true;
            }
        }
        else
        {
            $username = $_COOKIE['one_service_admin_username'];
            $password = $_COOKIE['one_service_admin_password'];
            $_SESSION['one_service_admin_username'] = $username;
            $_SESSION['one_service_admin_password'] = $password;
            return true;
        }
    }

?>