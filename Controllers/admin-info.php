<?php
    include '../../../Models/admin.php';

    function getUsername()
    {
        $username = getAdminProfileUserName();
        return $username;
    }

    function getPassword()
    {
        $password = getAdminProfilePassword();
        return $password;
    }
    
?>