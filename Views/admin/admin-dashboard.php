<?php
    include '../../Controllers/admin-signin-stateCheck.php';
    if(isAdminSignedIn()==false) {
        header('Location: admin-signin.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin | OneService</title>
</head>
<body>
    <h1>Admin Dashboard</h1>
    <hr>
    <a href="../../Views/admin/view-workers.php">View Workers</a>
    <br>
    <a href="../../Controllers/admin-signout-action.php?signout=true">Sign Out</a>
</body>
</html>