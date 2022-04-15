<?php
    include '../Models/admin.php';
    if(isset($_POST['username']) && isset($_POST['password']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        // if(empty($username) || empty($password)) {
        //     header('Location: ../Views/admin/profile/edit.php?edit=false&error=empty');
        // }
        // else if(strlen($password) <8)
        // {
        //     header('Location: ../Views/admin/profile/edit.php?edit=false&error=password');
        // }
        setAdminProfileUserName($username);
        setAdminProfilePassword($password);
        updateAdminInfo($username, $password);
        header('Location: ../Views/admin/profile/edit.php?edit=true');
    }
?>