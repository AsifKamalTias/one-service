<?php
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

    function workerIdGenerator()
    {

        $workers = getWorkers();
        $no_of_workers = count($workers);
        $id_of_last_worker = $workers[$no_of_workers-1]['worker_id'];
        $generatedId = "w-".((string)(((int)(substr($id_of_last_worker, 2)))+1));
        return $generatedId;

        // $workers = getWorkers();
        // $worker_count = 1;
        // foreach($workers as $worker)
        // {
        //    $worker_count++;
        // }
        // $generatedId = "w-".$worker_count;
        // return $generatedId;
    }
?>