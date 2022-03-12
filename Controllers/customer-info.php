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

    function generatedCustomerId()
    {
        $customers = getCustomers();
        $no_of_customers = count($customers);
        $id_of_last_customer = $customers[$no_of_customers-1]['customer_id'];
        $generatedId = "c-".((string)(((int)(substr($id_of_last_customer, 2)))+1));
        return $generatedId;
    }
?>