<?php
    include '../Models/admin.php';
    if(isset($_POST['username']) && isset($_POST['password']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        if(empty($username) || empty($password)) {
            header('Location: ../Views/admin/profile/edit.php?edit=false');
        }
        else {
            setAdminProfileUserName($username);
            setAdminProfilePassword($password);
            header('Location: ../Views/admin/profile/edit.php?edit=true');
        }
    }
?>