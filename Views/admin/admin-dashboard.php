<?php
    // session_start();
    include '../../Controllers/admin-signin-stateCheck.php';
    isAdminNotSignedIn();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin | OneService</title>
</head>
<body>
    <h1>Admin Dashboard</h1>
    <a href="../../Controllers/admin-signout-action.php?signout=true">Sign Out</a>
</body>
</html>