<?php
    include '../../Models/customer.php';
    function getCustomers()
    {        
        $customers = getCustomersInfo();
        return $customers;
    }

    function getCustomer($customer_id)
    {
        $customer = getCustomerInfo($customer_id);
        return $customer;
    }
?>