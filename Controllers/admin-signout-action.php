<?php
    if($_GET['signout'] == 'true') {
        session_start();
        session_destroy();
        setcookie('one_service_admin_username', "", time() - 3600, "/");
        setcookie('one_service_admin_password', "", time() - 3600, "/");
        header("Location: ../Views/admin/admin-sign-in.php");
    }
    
?>