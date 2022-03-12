<!DOCTYPE html>
<html>
<head>
    <title>Admin | OneService</title>
</head>
<body>
    <?php
        include '../../Controllers/admin-signin-stateCheck.php';
        if(isAdminSignedIn()==true) {
            header('Location: admin-dashboard.php');
        }
        else
        {
            header('Location: admin-signin.php');
        }
    ?>
</body>
</html>