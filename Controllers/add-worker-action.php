<?php
    include '../Models/worker.php';
    if(isset($_GET['worker_id']) && isset($_GET['worker_name']) && isset($_GET['worker_username']) && isset($_GET['worker_password'])&& isset($_GET['worker_gender']) && isset($_GET['worker_age']) && isset($_GET['worker_phone']) && isset($_GET['is_workerVerified']) && isset($_GET['rating']) && isset($_GET['block_status']) && isset($_GET['worker_serviceCategories']) )
    {
        
    }
    else
    {
        header('Location: ../Views/admin/view-services.php?add=false');
    }
    
?>