<?php
    include '../../Controllers/admin-signin-stateCheck.php';
    if(isAdminSignedIn()==false) {
        header('Location: admin-signin.php');
    }

    include '../../Controllers/moderator-info.php';
    //$moderator_info = getModerators();

    if(isset($_GET['moderator_id']))
    {
        $selectedModeratorId = $_GET['moderator_id'];
        $selectedModeratorName = moderatorUsername($selectedModeratorId);
        $selectedModeratorPassword = moderatorPassword($selectedModeratorId);
    }
    
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Moderator</title>
    <link rel="stylesheet" href="./css/style.css">
<body>
    <div class="header">
        <h1>Edit Moderator</h1>
        <div class="header-links">
            <a id="btn-dashboard" href="./admin-dashboard.php"> < Dashboard</a>
            <a id="btn-profile" href="../../Views/admin/profile"><i class="fas fa-user"></i> Profile </a>
            <a id="btn-signout" href="../../Controllers/admin-signout-action.php?signout=true">Sign Out</a>
        </div>
    </div>
    <div class="form-container">
        <div class="form-wrapper">
            <div class="upper">
                <h1>Edit</h1>
                <hr>
                <p>Moderator [<?php echo $selectedModeratorId; ?>]</p>
                <hr>
            </div>
            <form id="edit-moderator-form" class="edit-form" action="../../Controllers/edit-moderator-action.php" method="POST">
                <input type="hidden" id="moderator_id" name="moderator_id" value="<?php echo $selectedModeratorId; ?>">
                <div class="form-control">
                    <label for="moderator_username">Moderator Username:</label>
                    <input type="text" name="moderator_username" id="moderator_username" value="<?php echo $selectedModeratorName; ?>">
                    <small id="moderator-username-error"></small>
                </div>
                <div class="form-control">
                    <label for="moderator_password">Moderator Password:</label>
                    <input type="password" name="moderator_password" id="moderator_password" value="<?php echo $selectedModeratorPassword; ?>">
                    <small id="moderator-password-error"></small>
                </div>
                <button type="submit">Update</button>
            </form>
        </div>
    </div>
    <script src="./js/edit-moderator-validation.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</body>
</html>