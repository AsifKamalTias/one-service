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
    <a href="../../Controllers/admin-signout-action.php?signout=true">Sign Out</a>
    <br>
    <a href="../../Views/admin/profile">View Profile</a>
    <br>
    <a href="../../Views/admin/view-workers.php">View Workers</a>
    <br>
    <a href="../../Views/admin/view-customers.php">View Customers</a>
    <br>
    <a href="../../Views/admin/view-moderators.php">View Moderators</a>
    <br>
    <a href="../../Views/admin/view-services.php">View Services</a>
    <br>
    <a href="../../Views/admin/view-orders.php">View Orders</a>
    <br>
    <a href="../../Views/admin/view-income-history.php">View Income History</a>
</body>
</html>