<?php
    include '../../../Controllers/admin-signin-stateCheck.php';
    if(isAdminSignedIn()==false) {
        header('Location: ../admin-signin.php');
    }

    include '../../../Controllers/admin-info.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Profile | Admin</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="header">
        <h1>Admin Profile</h1>
        <div class="header-links">
            <a id="btn-dashboard" href="../admin-dashboard.php"> < Dashboard</a>
            <a id="btn-signout" href="../../../Controllers/admin-signout-action.php?signout=true">Sign Out</a>
        </div>
    </div>
    <div class="list">
        <div class="item">
            <p>Username: <?php echo getAdminUsername() ?></p>
        </div>
        <div class="item">
            <p>Password: <?php echo getAdminPassword() ?></p>
        </div>
    </div>
    <div class="action-btn-area">
        <a class="action-btn" href="./edit.php"><i class="fa fa-pen"></i> Edit Profile</a>
    </div>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</body>
</html>