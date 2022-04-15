<?php
    include '../../../Models/admin.php';

    //json
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


    //database
    function getAdminUsername()
    {
        $username = getAdminUsernameFromDB();
        return $username;
    }

    function getAdminPassword()
    {
        $password = getAdminPasswordFromDB();
        return $password;
    }
    
?>