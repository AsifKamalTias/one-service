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
?>