<?php
    include '../Models/customer.php';
    if(isset($_GET['customer_id']))
    {
        if($_GET['customer_id'] != "")
        {
            $customer_id = $_GET['customer_id'];
            removeCustomer($customer_id);
            deleteCustomer($customer_id);
            header('Location: ../Views/admin/view-customers.php?remove=true');
        }
        else
        {
            header('Location: ../Views/admin/view-customers.php?remove=false');
        }
    }
    else
    {
        header('Location: ../Views/admin/view-customers.php?remove=false');
    }
?>