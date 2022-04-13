<?php
    //JSON
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



    //Database
    function getAdminUsernameFromDB()
    {
        $admin_username = "";
        $conn = mysqli_connect("localhost", "root", "", "one-service-db");
        $sql = "SELECT admin_username FROM `admin-info`";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $admin_username = $row['admin_username'];
            }
        }
        return $admin_username;
    }

    function getAdminPasswordFromDB()
    {
        $admin_password = "";
        $conn = new mysqli("localhost", "root", "", "one-service-db");
        if($conn->connect_error){
            die("Connection failed: " . $conn->connect_error);
        }
		else{
            $sql = "SELECT * FROM `admin-info`";
			$result=$conn->query($sql);
			if($result->num_rows>0)
			{

            }
        }

        
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $admin_password = $row['admin_password'];
            }
        }
        return $admin_password;
    }

    function checkAdminSignInValid($username, $password)
    {
        $conn = new mysqli("localhost", "root", "", "one-service-db");
        if($conn->connect_error){
            die("Connection failed: " . $conn->connect_error);
        }
        else{
            $sql = "select admin_username, admin_password  from admininfo where admin_username='".$username."' and admin_password='".$password."'";
            $result = mysqli_query($conn, $sql) or die("Query failed: " . mysqli_error($conn));
            if(mysqli_num_rows($result) > 0) {
                return true;
            }
            else {
                return false;
            }
        }
    }

?>