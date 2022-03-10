<?php
    include '../Models/service.php';
    if(isset($_GET['service_id']) && isset($_GET['service_name']) && isset($_GET['service_price']))
    {
        if($_GET['service_id'] != "" && $_GET['service_name'] != "" && $_GET['service_price'] != "")
        {
            $service_id = $_GET['service_id'];
            $service_name = strtoupper($_GET['service_name']);
            $service_price = $_GET['service_price'];
            if(is_numeric($service_price))
            {   
                setService($service_id, $service_name, $service_price);
                header('Location: ../Views/admin/view-services.php?add=true');
            }
            else
            {
                header('Location: ../Views/admin/view-services.php?add=false');
            }
        }
        else
        {
            header('Location: ../Views/admin/view-services.php?add=false');
        }
    }
    else
    {
        header('Location: ../Views/admin/view-services.php?add=false');
    }
    
?>