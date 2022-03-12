<?php
    include '../../Models/moderator.php';
    function getModerators()
    {        
        $moderators = getModeratorsInfo();
        return $moderators;
    }

    function getModerator($moderator_id)
    {
        $moderator = getModeratorInfo($moderator_id);
        return $moderator;
    }

    function generateModeratorId()
    {
        $moderators = getModerators();
        $no_of_moderators = count($moderators);
        $id_of_last_moderator = $moderators[$no_of_moderators-1]['moderator_id'];
        $generatedId = "m-".((string)(((int)(substr($id_of_last_moderator, 2)))+1));
        return $generatedId;
    }
?>