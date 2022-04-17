<?php
    include '../../Controllers/admin-signin-stateCheck.php';
    if(isAdminSignedIn()==false) {
        header('Location: admin-signin.php');
    }

    include '../../Controllers/moderator-info.php';
    $moderators_info = getModerators();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Moderator</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="header">
        <h1>Add Moderator</h1>
        <div class="header-links">
            <a id="btn-dashboard" href="./admin-dashboard.php"> < Dashboard</a>
            <a id="btn-profile" href="../../Views/admin/profile"><i class="fas fa-user"></i> Profile </a>
            <a id="btn-signout" href="../../Controllers/admin-signout-action.php?signout=true">Sign Out</a>
        </div>
    </div>
    <div class="form-container">
        <div class="form-wrapper">
            <div class="upper">
                <h1>Add</h1>
                <hr>
            </div>
            <form id="add-moderator-form" class="edit-form" action="../../Controllers/add-moderator-action.php" method="POST">
                <div class="form-control">
                    <label for="moderator_username">Moderator Username:</label>
                    <input type="text" name="moderator_username" id="moderator_username">
                    <small id="moderator-username-error"></small>
                </div>
                <div class="form-control">
                    <label for="moderator_password">Moderator Password:</label>
                    <input type="password" name="moderator_password" id="moderator_password">
                    <small id="moderator-password-error"></small>
                </div>
                <button type="submit">Add</button>
            </form>
        </div>
    </div>
    <script src="./js/add-moderator-validation.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</body>
</html>