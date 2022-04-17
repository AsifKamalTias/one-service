<?php
    //json
    function getCustomersInfo() {
        $customers_data = file_get_contents("../../Models/customersInfo.json");
        $json=json_decode($customers_data, true);
        return $json;
    }

    function getCustomerInfo($customer_id) {
        $customers_data = file_get_contents("../../Models/customersInfo.json");
        $json=json_decode($customers_data, true);
        foreach($json as $customer) {
            if($customer['customer_id'] == $customer_id) {
                return $customer;
            }
        }
    }
    function setCustomer($customer_name, $customer_username, $customer_address, $customer_phone, $customer_email, $customer_password, $customer_blockStatus) {
        $customers_data = file_get_contents("../Models/customersInfo.json");
        $json=json_decode($customers_data, true);
        $customer = array(
            "customer_name" => $customer_name,
            "customer_username" => $customer_username,
            "customer_address" => $customer_address,
            "customer_phone" => $customer_phone,
            "customer_email" => $customer_email,
            "customer_password" => $customer_password,
            "customer_blockStatus" => $customer_blockStatus
        );
        array_push($json, $customer);
        $json_data = json_encode($json);
        file_put_contents("../Models/customersInfo.json", $json_data);
    }

    function updateCustomer($customer_id, $customer_name, $customer_username, $customer_address, $customer_phone, $customer_email, $customer_password, $customer_blockStatus) {
        $customers_data = file_get_contents("../Models/customersInfo.json");
        $json=json_decode($customers_data, true);
        foreach($json as $key => $customer) {
            if($customer['customer_id'] == $customer_id) {
                $json[$key]['customer_name'] = $customer_name;
                $json[$key]['customer_username'] = $customer_username;
                $json[$key]['customer_address'] = $customer_address;
                $json[$key]['customer_phone'] = $customer_phone;
                $json[$key]['customer_email'] = $customer_email;
                $json[$key]['customer_password'] = $customer_password;
                $json[$key]['customer_blockStatus'] = $customer_blockStatus;
            }
        }
        $json = json_encode($json);
        file_put_contents("../Models/customersInfo.json", $json);
    }

    function removeCustomer($customer_id) {
        $customers_data = file_get_contents("../Models/customersInfo.json");
        $json=json_decode($customers_data, true);
        foreach($json as $key => $customer) {
            if($customer['customer_id'] == $customer_id) {
                unset($json[$key]);
            }
        }
        $json = json_encode($json);
        file_put_contents("../Models/customersInfo.json", $json);
    }

    //database
    function getCustomersFromDB()
    {
        $sqlConnection = mysqli_connect("localhost", "root", "", "one-service-db") or die("Connection failed: " . mysqli_connect_error());
        $sql = "SELECT * FROM customerinfo";
        $result = mysqli_query($sqlConnection, $sql) or die("Query failed: " . mysqli_error($sqlConnection));
        if(mysqli_num_rows($result) > 0) {
            return $result;
        }
        else{
            return false;
        }
    }

    function getCustomerFromDB($customer_id)
    {
        $sqlConnection = mysqli_connect("localhost", "root", "", "one-service-db") or die("Connection failed: " . mysqli_connect_error());
        $sql = "SELECT * FROM customerinfo WHERE customer_id = '$customer_id'";
        $result = mysqli_query($sqlConnection, $sql) or die("Query failed: " . mysqli_error($sqlConnection));
        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                return $row;
            }
        }
        else{
            return false;
        }
    }

    function getCustomerName($customer_id)
    {
        $sqlConnection = mysqli_connect("localhost", "root", "", "one-service-db") or die("Connection failed: " . mysqli_connect_error());
        $sql = "SELECT customer_name FROM customerinfo WHERE customer_id = '$customer_id'";
        $result = mysqli_query($sqlConnection, $sql) or die("Query failed: " . mysqli_error($sqlConnection));
        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                return $row['customer_name'];
            }
        }
        else{
            return false;
        }
    }

    function getCustomerUsername($customer_id)
    {
        $sqlConnection = mysqli_connect("localhost", "root", "", "one-service-db") or die("Connection failed: " . mysqli_connect_error());
        $sql = "SELECT customer_username FROM customerinfo WHERE customer_id = '$customer_id'";
        $result = mysqli_query($sqlConnection, $sql) or die("Query failed: " . mysqli_error($sqlConnection));
        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                return $row['customer_username'];
            }
        }
        else{
            return false;
        }
    }

    function getCustomerAddress($customer_id)
    {
        $sqlConnection = mysqli_connect("localhost", "root", "", "one-service-db") or die("Connection failed: " . mysqli_connect_error());
        $sql = "SELECT customer_address FROM customerinfo WHERE customer_id = '$customer_id'";
        $result = mysqli_query($sqlConnection, $sql) or die("Query failed: " . mysqli_error($sqlConnection));
        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                return $row['customer_address'];
            }
        }
        else{
            return false;
        }
    }

    function getCustomerPhone($customer_id)
    {
        $sqlConnection = mysqli_connect("localhost", "root", "", "one-service-db") or die("Connection failed: " . mysqli_connect_error());
        $sql = "SELECT customer_phone FROM customerinfo WHERE customer_id = '$customer_id'";
        $result = mysqli_query($sqlConnection, $sql) or die("Query failed: " . mysqli_error($sqlConnection));
        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                return $row['customer_phone'];
            }
        }
        else{
            return false;
        }
    }

    function getCustomerEmail($customer_id)
    {
        $sqlConnection = mysqli_connect("localhost", "root", "", "one-service-db") or die("Connection failed: " . mysqli_connect_error());
        $sql = "SELECT customer_email FROM customerinfo WHERE customer_id = '$customer_id'";
        $result = mysqli_query($sqlConnection, $sql) or die("Query failed: " . mysqli_error($sqlConnection));
        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                return $row['customer_email'];
            }
        }
        else{
            return false;
        }
    }

    function getCustomerPassword($customer_id)
    {
        $sqlConnection = mysqli_connect("localhost", "root", "", "one-service-db") or die("Connection failed: " . mysqli_connect_error());
        $sql = "SELECT customer_password FROM customerinfo WHERE customer_id = '$customer_id'";
        $result = mysqli_query($sqlConnection, $sql) or die("Query failed: " . mysqli_error($sqlConnection));
        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                return $row['customer_password'];
            }
        }
        else{
            return false;
        }
    }

    function getCustomerBlockStatus($customer_id)
    {
        $sqlConnection = mysqli_connect("localhost", "root", "", "one-service-db") or die("Connection failed: " . mysqli_connect_error());
        $sql = "SELECT customer_blockStatus FROM customerinfo WHERE customer_id = '$customer_id'";
        $result = mysqli_query($sqlConnection, $sql) or die("Query failed: " . mysqli_error($sqlConnection));
        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                return $row['customer_blockStatus'];
            }
        }
        else{
            return false;
        }
    }

    function addCustomer($customer_name, $customer_username, $customer_address, $customer_phone, $customer_email, $customer_password, $customer_blockStatus)
    {
        $sqlConnection = mysqli_connect("localhost", "root", "", "one-service-db") or die("Connection failed: " . mysqli_connect_error());
        $sql = "INSERT INTO customerinfo (customer_name, customer_username, customer_address, customer_phone, customer_email, customer_password, customer_blockStatus) VALUES ('$customer_name', '$customer_username', '$customer_address', '$customer_phone', '$customer_email', '$customer_password', '$customer_blockStatus')";
        $result = mysqli_query($sqlConnection, $sql) or die("Query failed: " . mysqli_error($sqlConnection));
        if($result) {
            return true;
        }
        else {
            return false;
        }
    }

    function editCustomer($customer_id, $customer_name, $customer_username, $customer_address, $customer_phone, $customer_email, $customer_password, $customer_blockStatus)
    {
        $sqlConnection = mysqli_connect("localhost", "root", "", "one-service-db") or die("Connection failed: " . mysqli_connect_error());
        $sql = "UPDATE customerinfo SET customer_name = '$customer_name', customer_username = '$customer_username', customer_address = '$customer_address', customer_phone = '$customer_phone', customer_email = '$customer_email', customer_password = '$customer_password', customer_blockStatus = '$customer_blockStatus' WHERE customer_id = '$customer_id'";
        $result = mysqli_query($sqlConnection, $sql) or die("Query failed: " . mysqli_error($sqlConnection));
        if($result) {
            return true;
        }
        else {
            return false;
        }
    }

    
?>