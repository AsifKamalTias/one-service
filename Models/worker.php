<?php
    function getWorkersInfo() {
        //edited directory
        $workers_data = file_get_contents("../../Models/workersInfo.json");
        $json=json_decode($workers_data, true);
        return $json;
    }

    function getWorkerInfo($worker_id) {
        //edited directory
        $workers_data = file_get_contents("../../Models/workersInfo.json");
        $json=json_decode($workers_data, true);
        foreach($json as $worker) {
            if($worker['worker_id'] == $worker_id) {
                return $worker;
            }
        }
    }

    function varifyWorker($worker_id) {
        $workers_data = file_get_contents("../Models/workersInfo.json");
        $json=json_decode($workers_data, true);
        foreach($json as $key => $worker) {
            if($worker['worker_id'] == $worker_id) {
                $json[$key]['is_workerVarified'] = "true";
            }
        }
        file_put_contents("../Models/workersInfo.json", json_encode($json));
    }

    function unvarifyWorker($worker_id) {
        $workers_data = file_get_contents("../Models/workersInfo.json");
        $json=json_decode($workers_data, true);
        foreach($json as $key => $worker) {
            if($worker['worker_id'] == $worker_id) {
                $json[$key]['is_workerVarified'] = "false";
            }
        }
        file_put_contents("../Models/workersInfo.json", json_encode($json));
    }   
?>