<?php
    include '../Models/moderator.php';
    if(isset($_POST['moderator_username']) && isset($_POST['moderator_password']))
    {
        $moderator_username = $_POST['moderator_username'];
        $moderator_password = $_POST['moderator_password'];
        setModerator($moderator_username, $moderator_password);
        addModerator($moderator_username, $moderator_password);
        header('Location: ../Views/admin/view-moderators.php?add=true');
    }
    else
    {
        header('Location: ../Views/admin/view-moderators.php?add=false&error=empty');
    }
    
?>