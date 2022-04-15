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
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="header">
        <h1>Admin Dashboard</h1>
        <div class="header-links">
            <a id="btn-profile" href="../../Views/admin/profile"><i class="fas fa-user"></i> Profile </a>
            <a id="btn-signout" href="../../Controllers/admin-signout-action.php?signout=true">Sign Out</a>
        </div>
    </div>
    <div class="list">
        <div class="item" id="view-workers">
            <a href="../../Views/admin/view-workers.php"><i class="fa fa-arrow-right"></i> View Workers</a>
        </div>
        <div class="item" id="view-customers">
            <a href="../../Views/admin/view-customers.php"><i class="fa fa-arrow-right"></i> View Customers</a>
        </div>
        <div class="item" id="view-moderators">
            <a href="../../Views/admin/view-moderators.php"><i class="fa fa-arrow-right"></i> View Moderators</a>
        </div>
        <div class="item" id="view-services">
            <a href="../../Views/admin/view-services.php"><i class="fa fa-arrow-right"></i> View Services</a>
        </div>
        <div class="item" id="view-orders">
            <a href="../../Views/admin/view-orders.php"><i class="fa fa-arrow-right"></i> View Orders</a>
        </div>
        <div class="item" id="view-income-history">
            <a href="../../Views/admin/view-income-history.php"><i class="fa fa-arrow-right"></i> View Income History</a>
        </div>
    </div>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="./js/style.js"></script>
</body>
</html>