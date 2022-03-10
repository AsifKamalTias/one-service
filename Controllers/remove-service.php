<?php
    include '../Models/service.php';
    if(isset($_GET['service_id']))
    {
        if($_GET['service_id'] != "")
        {
            $service_id = $_GET['service_id'];
            removeService($service_id);
            header('Location: ../Views/admin/view-services.php?remove=true');
        }
        else
        {
            header('Location: ../Views/admin/view-services.php?remove=false');
        }
    }
    else
    {
        header('Location: ../Views/admin/view-services.php?remove=false');
    }
?>