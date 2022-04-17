<?php
    include '../Models/moderator.php';
    if(isset($_POST['moderator_id']) && isset($_POST['moderator_username']) && isset($_POST['moderator_password']))
    {
        $moderator_id = $_POST['moderator_id'];
        $moderator_username = $_POST['moderator_username'];
        $moderator_password = $_POST['moderator_password'];
        updateModerator($moderator_id, $moderator_username, $moderator_password);
        editModerator($moderator_id, $moderator_username, $moderator_password);
        header('Location: ../Views/admin/view-moderators.php?edit=true');
    }
    else
    {
        header('Location: ../Views/admin/view-moderators.php?edit=false&error=empty');
    }
?>