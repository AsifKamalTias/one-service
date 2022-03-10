<?php
    //edited directory
    include '../Models/worker.php';

    if(isset($_GET['worker_id']) && $_GET['verify'] == 'true') {
        verifyWorker($_GET['worker_id']);
    }
    else if(isset($_GET['worker_id']) && $_GET['verify'] == 'false') {
        unverifyWorker($_GET['worker_id']);
    }
    else{
        header("Location: ../Views/admin/admin-dashboard.php");
    }
    header('Location: ../Views/admin/view-workers.php');
?>