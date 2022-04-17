<?php
    include '../Models/moderator.php';
    if(isset($_GET['moderator_id']))
    {
        if($_GET['moderator_id'] != "")
        {
            $moderator_id = $_GET['moderator_id'];
            removeModerator($moderator_id);
            deleteModerator($moderator_id);
            header('Location: ../Views/admin/view-moderators.php?remove=true');
        }
        else
        {
            header('Location: ../Views/admin/view-moderators.php?remove=false');
        }
    }
    else
    {
        header('Location: ../Views/admin/view-moderators.php?remove=false');
    }
?>