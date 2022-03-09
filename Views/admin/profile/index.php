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
</head>
<body>
    <a href="../admin-dashboard.php"> Back to Dashboard</a>
    <h1>Profile</h1>
    <hr>
    <p>Username: <?php echo getUserName() ?></p>
    <p>Password: <?php echo getPassword() ?></p>
    <br><br><br>
    <a href="./edit.php">Edit Profile</a>
</body>
</html>