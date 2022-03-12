<?php
    function getModeratorsInfo()
    {
        $moderators_data = file_get_contents("../../Models/moderatorsInfo.json");
        $json=json_decode($moderators_data, true);
        return $json;
    }

    function getModeratorInfo($moderator_id)
    {
        $moderators_data = file_get_contents("../../Models/moderatorsInfo.json");
        $json=json_decode($moderators_data, true);
        foreach($json as $moderator) {
            if($moderator['moderator_id'] == $moderator_id) {
                return $moderator;
            }
        }
    }

    function setModerator($moderator_id, $moderator_username, $moderator_password)
    {
        $moderators_data = file_get_contents("../Models/moderatorsInfo.json");
        $json=json_decode($moderators_data, true);
        $moderator = array(
            "moderator_id" => $moderator_id,
            "moderator_username" => $moderator_username,
            "moderator_password" => $moderator_password
        );
        array_push($json, $moderator);
        $json = json_encode($json);
        file_put_contents("../Models/moderatorsInfo.json", $json);
    }

    function updateModerator($moderator_id, $moderator_username, $moderator_password)
    {
        $moderators_data = file_get_contents("../Models/moderatorsInfo.json");
        $json=json_decode($moderators_data, true);
        foreach($json as $key => $moderator) {
            if($moderator['moderator_id'] == $moderator_id) {
                $json[$key]['moderator_username'] = $moderator_username;
                $json[$key]['moderator_password'] = $moderator_password;
            }
        }
        $json = json_encode($json);
        file_put_contents("../Models/moderatorsInfo.json", $json);
    }

    function removeModerator($moderator_id)
    {
        $moderators_data = file_get_contents("../Models/moderatorsInfo.json");
        $json=json_decode($moderators_data, true);
        foreach($json as $key => $moderator) {
            if($moderator['moderator_id'] == $moderator_id) {
                unset($json[$key]);
            }
        }
        $json = json_encode($json);
        file_put_contents("../Models/moderatorsInfo.json", $json);
    }
?>