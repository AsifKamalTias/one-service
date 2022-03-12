<?php
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
    function setCustomer($customer_id, $customer_name, $customer_username, $customer_address, $customer_phone, $customer_email, $customer_password, $customer_blockStatus) {
        $customers_data = file_get_contents("../Models/customersInfo.json");
        $json=json_decode($customers_data, true);
        $customer = array(
            "customer_id" => $customer_id,
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
?>