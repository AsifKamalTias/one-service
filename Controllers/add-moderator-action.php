<?php
    include '../Models/moderator.php';
    if(isset($_POST['moderator_id']) && isset($_POST['moderator_username']) && isset($_POST['moderator_password']))
    {
        if($_POST['moderator_id'] != "" && $_POST['moderator_username'] != "" && $_POST['moderator_password'] != "")
        {
            $moderator_id = $_POST['moderator_id'];
            $moderator_username = $_POST['moderator_username'];
            $moderator_password = $_POST['moderator_password'];
            if($moderator_password>=8)
            {   
                setModerator($moderator_id, $moderator_username, $moderator_password);
                header('Location: ../Views/admin/view-moderators.php?edit=true');
            }
            else
            {
                header('Location: ../Views/admin/view-moderators.php?add=false&error=password');
            }
        }
        else
        {
            header('Location: ../Views/admin/view-moderators.php?add=false&error=empty');
        }
    }
    else
    {
        header('Location: ../Views/admin/view-moderators.php?add=false&error=empty');
    }
    
?>