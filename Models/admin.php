<?php
    function getAdminUserName() {
        $admin_data = file_get_contents("../Models/adminInfo.json");
        $json=json_decode($admin_data, true);
        $admin_username = $json['admin'][0]['username'];
        return $admin_username;
    }
    
    function getAdminPassword()
    {
        $admin_data = file_get_contents("../Models/adminInfo.json");
        $json=json_decode($admin_data, true);
        $admin_password = $json['admin'][0]['password'];
        return $admin_password;
    }
?>