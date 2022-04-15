<?php
    include '../Models/customer.php';
    if(isset($_POST['customer_id']) && isset($_POST['customer_name']) && isset($_POST['customer_username']) && isset($_POST['customer_address']) && isset($_POST['customer_phone']) && isset($_POST['customer_email']) && isset($_POST['customer_password']) && $_POST['customer_blockStatus'])
    {
        $customer_id = $_POST['customer_id'];
        $customer_name = $_POST['customer_name'];
        $customer_username = $_POST['customer_username'];
        $customer_address = $_POST['customer_address'];
        $customer_phone = $_POST['customer_phone'];
        $customer_email = $_POST['customer_email'];
        $customer_password = $_POST['customer_password'];
        $customer_blockStatus = $_POST['customer_blockStatus'];

        updateCustomer($customer_id, $customer_name, $customer_username, $customer_address, $customer_phone, $customer_email, $customer_password, $customer_blockStatus);
        $editCustomer = editCustomer($customer_id, $customer_name, $customer_username, $customer_address, $customer_phone, $customer_email, $customer_password, $customer_blockStatus);
        if($editCustomer)
        {
            header('Location: ../Views/admin/view-customers.php?edit=true');
        }
        else
        {
            header('Location: ../Views/admin/view-customers.php?edit=false');
        }
    }
    else
    {
        header('Location: ../Views/admin/view-customers.php?edit=false&error=empty');
    }
    
?>