<?php
    function getAdminUserName() {
        $admin_data = file_get_contents("../Models/adminInfo.json");
        $json=json_decode($admin_data, true);
        $admin_username = $json['admin'][0]['username'];
        return $admin_username;
    }

    function getAdminProfileUserName() {
        $admin_data = file_get_contents("../../../Models/adminInfo.json");
        $json=json_decode($admin_data, true);
        $admin_username = $json['admin'][0]['username'];
        return $admin_username;
    }

    function setAdminProfileUserName($username)
    {
        $admin_data = file_get_contents("../Models/adminInfo.json");
        $json=json_decode($admin_data, true);
        $json['admin'][0]['username'] = $username;
        file_put_contents("../Models/adminInfo.json", json_encode($json));
    }
    
    function getAdminPassword()
    {
        $admin_data = file_get_contents("../Models/adminInfo.json");
        $json=json_decode($admin_data, true);
        $admin_password = $json['admin'][0]['password'];
        return $admin_password;
    }

    function getAdminProfilePassword()
    {
        $admin_data = file_get_contents("../../../Models/adminInfo.json");
        $json=json_decode($admin_data, true);
        $admin_password = $json['admin'][0]['password'];
        return $admin_password;
    }

    function setAdminProfilePassword($password)
    {
        $admin_data = file_get_contents("../Models/adminInfo.json");
        $json=json_decode($admin_data, true);
        $json['admin'][0]['password'] = $password;
        file_put_contents("../Models/adminInfo.json", json_encode($json));
    }
?>