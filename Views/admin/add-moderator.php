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
</head>
<body>
    <a href="./admin-dashboard.php"> Back to Dashboard</a>
    <h1>Add Moderator</h1>
    <hr>
    <form action="../../Controllers/add-moderator-action.php" method="POST">
        <label for="moderator_id">moderator Id: </label>
        <input type="text" name="moderator_id" value="<?php echo generateModeratorId(); ?>">
        <br><br>
        <label for="moderator_username">moderator Username:</label>
        <input type="text" name="moderator_username" id="moderator_username">
        <br><br>
        <label for="moderator_password">Moderator Password:</label>
        <input type="password" name="moderator_password" id="moderator_password">
        <br><br>
        <input type="submit" value="Add moderator">
    </form>
    
</body>
</html>