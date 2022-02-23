<?php
    session_start();
    function isAdminNotSignedIn()
    {
        if(!isset($_SESSION['one_service_admin_username']) && !isset($_SESSION['one_service_admin_password'])) {
            header('Location: admin-sign-in.php');
        }
    }
?>