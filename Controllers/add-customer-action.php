<?php
    include '../Models/customer.php';
    if(isset($_POST['customer_id']) && isset($_POST['customer_name']) && isset($_POST['customer_username']) && isset($_POST['customer_address']) && isset($_POST['customer_phone']) && isset($_POST['customer_email']) && isset($_POST['customer_password']) && $_POST['customer_blockStatus'])
    {
        if($_POST['customer_id'] != "" && $_POST['customer_name'] != "" && $_POST['customer_username'] != "" && $_POST['customer_address'] != "" && $_POST['customer_phone'] != "" && $_POST['customer_email'] != "" && $_POST['customer_password'] != "")
        {
            $customer_id = $_POST['customer_id'];
            $customer_name = $_POST['customer_name'];
            $customer_username = $_POST['customer_username'];
            $customer_address = $_POST['customer_address'];
            $customer_phone = $_POST['customer_phone'];
            $customer_email = $_POST['customer_email'];
            $customer_password = $_POST['customer_password'];
            $customer_blockStatus = $_POST['customer_blockStatus'];
            if(is_numeric($customer_phone) && strlen($customer_password)>=8)
            {   
                setCustomer($customer_id, $customer_name, $customer_username, $customer_address, $customer_phone, $customer_email, $customer_password, $customer_blockStatus);
                header('Location: ../Views/admin/view-customers.php?add=true');
            }
            else
            {
                header('Location: ../Views/admin/view-customers.php?add=false&error=phone-password');
            }
        }
        else
        {
            header('Location: ../Views/admin/view-customers.php?add=false&error=empty');
        }
    }
    else
    {
        header('Location: ../Views/admin/view-customers.php?add=false&error=empty');
    }
    
?>