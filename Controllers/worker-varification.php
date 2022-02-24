<?php
    //edited directory
    include '../Models/worker.php';
    

    if(isset($_GET['worker_id']) && $_GET['varify'] == 'true') {
        varifyWorker($_GET['worker_id']);
    }
    else if(isset($_GET['worker_id']) && $_GET['varify'] == 'false') {
        unvarifyWorker($_GET['worker_id']);
    }
    else{
        header("Location: ../Views/admin/admin-dashboard.php");
    }
    header('Location: ../Views/admin/view-workers.php');
?>