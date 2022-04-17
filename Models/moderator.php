<?php
   //json
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

    function setModerator($moderator_username, $moderator_password)
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

    //db
    function getModeratorsFromDB()
    {
        $sqlConnection = mysqli_connect("localhost", "root", "", "one-service-db") or die("Connection failed: " . mysqli_connect_error());
        $sql = "SELECT * FROM moderatorinfo";
        $result = mysqli_query($sqlConnection, $sql) or die("Query failed: " . mysqli_error($sqlConnection));
        if(mysqli_num_rows($result) > 0) {
            return $result;
        }
        else{
            return false;
        }
    }

    function getModeratorUsername($moderator_id)
    {
        $sqlConnection = mysqli_connect("localhost", "root", "", "one-service-db") or die("Connection failed: " . mysqli_connect_error());
        $sql = "SELECT moderator_username FROM moderatorinfo WHERE moderator_id = '$moderator_id'";
        $result = mysqli_query($sqlConnection, $sql) or die("Query failed: " . mysqli_error($sqlConnection));
        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                return $row['moderator_username'];
            }
        }
        else{
            return false;
        }
    }

    function getModeratorPassword($moderator_id)
    {
        $sqlConnection = mysqli_connect("localhost", "root", "", "one-service-db") or die("Connection failed: " . mysqli_connect_error());
        $sql = "SELECT moderator_password FROM moderatorinfo WHERE moderator_id = '$moderator_id'";
        $result = mysqli_query($sqlConnection, $sql) or die("Query failed: " . mysqli_error($sqlConnection));
        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                return $row['moderator_password'];
            }
        }
        else{
            return false;
        }
    }

    function addModerator($moderator_username, $moderator_password)
    {
        $sqlConnection = mysqli_connect("localhost", "root", "", "one-service-db") or die("Connection failed: " . mysqli_connect_error());
        $sql = "INSERT INTO moderatorinfo (moderator_username, moderator_password) VALUES ('$moderator_username', '$moderator_password')";
        $result = mysqli_query($sqlConnection, $sql) or die("Query failed: " . mysqli_error($sqlConnection));
    }

    function editModerator($moderator_id, $moderator_username, $moderator_password)
    {
        $sqlConnection = mysqli_connect("localhost", "root", "", "one-service-db") or die("Connection failed: " . mysqli_connect_error());
        $sql = "UPDATE moderatorinfo SET moderator_username = '$moderator_username', moderator_password = '$moderator_password' WHERE moderator_id = '$moderator_id'";
        $result = mysqli_query($sqlConnection, $sql) or die("Query failed: " . mysqli_error($sqlConnection));
    }

    function deleteModerator($moderator_id)
    {
        $sqlConnection = mysqli_connect("localhost", "root", "", "one-service-db") or die("Connection failed: " . mysqli_connect_error());
        $sql = "DELETE FROM moderatorinfo WHERE moderator_id = '$moderator_id'";
        $result = mysqli_query($sqlConnection, $sql) or die("Query failed: " . mysqli_error($sqlConnection));
    }
?>