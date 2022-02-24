<?php
    //edited directory
    include '../../Models/worker.php';
    function getWorkers()
    {        
        $workers = getWorkersInfo();
        return $workers;
    }

    function getWorker($worker_id)
    {
        $worker = getWorkerInfo($worker_id);
        return $worker;
    }
?>