<!DOCTYPE html>
<html>
<head>
    <title>Admin | OneService</title>
</head>
<body>
    <?php
        if(!isset($_COOKIE['one_service_admin_username']) && !isset($_COOKIE['one_service_admin_password'])) {
            header('Location: admin-sign-in.php');
        }
        else
        {
            $username = $_COOKIE['one_service_admin_username'];
            $password = $_COOKIE['one_service_admin_password'];
            session_start();
            $_SESSION['one_service_admin_username'] = $username;
            $_SESSION['one_service_admin_password'] = $password;
            header('Location: admin-dashboard.php');
        }
    ?>
</body>
</html>