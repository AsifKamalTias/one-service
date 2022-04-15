<?php
    include '../../Models/customer.php';
    function getCustomers()
    {        
        // $customers = getCustomersInfo();
        $customers = getCustomersFromDB();
        return $customers;
    }

    // function getCustomer($customer_id)
    // {
    //     // $customer = getCustomerInfo($customer_id);
    //     $customer = getCustomerFromDB($customer_id);
    //     return $customer;
    // }

    function customerName($customer_id)
    {
        $customerName = getCustomerName($customer_id);
        return $customerName;
    }
    function customerUsername($customer_id)
    {
        $customerUsername = getCustomerUsername($customer_id);
        return $customerUsername;
    }
    function customerAddress($customer_id)
    {
        $customerAddress = getCustomerAddress($customer_id);
        return $customerAddress;
    }
    function customerPhone($customer_id)
    {
        $customerPhone = getCustomerPhone($customer_id);
        return $customerPhone;
    }
    function customerEmail($customer_id)
    {
        $customerEmail = getCustomerEmail($customer_id);
        return $customerEmail;
    }
    function customerPassword($customer_id)
    {
        $customerPassword = getCustomerPassword($customer_id);
        return $customerPassword;
    }
    function customerBlockStatus($customer_id)
    {
        $customerBlockStatus = getCustomerBlockStatus($customer_id);
        return $customerBlockStatus;
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