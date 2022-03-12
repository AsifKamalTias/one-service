<?php
    include '../../Controllers/admin-signin-stateCheck.php';
    if(isAdminSignedIn()==false) {
        header('Location: admin-signin.php');
    }

    include '../../Controllers/moderator-info.php';
    $moderator_info = getModerators();

    if(isset($_GET['moderator_id']))
    {
        $selectedModeratorId = $_GET['moderator_id'];
        $selectedModeratorName = getModerator($selectedModeratorId)['moderator_username'];
        $selectedModeratorPrice = getModerator($selectedModeratorId)['moderator_password'];
    }
    
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Moderator</title>
<body>
    <a href="./admin-dashboard.php"> Back to Dashboard</a>
    <h1>Edit Moderator</h1>
    <hr>
    <form action="../../Controllers/edit-moderator-action.php" method="POST">
        <label for="moderator_id">Moderator Id: </label>
        <input type="text" name="moderator_id" value="<?php echo $selectedModeratorId ?>">
        <br><br>
        <label for="moderator_username">Moderator Username:</label>
        <input type="text" name="moderator_username" id="moderator_username" value="<?php echo $selectedModeratorName ?>">
        <br><br>
        <label for="moderator_password">Moderator Password:</label>
        <input type="text" name="moderator_password" id="moderator_password" value="<?php echo $selectedModeratorPrice ?>">
        <br><br>
        <input type="submit" value="Edit Moderator">
    </form>
    
</body>
</html>