<?php
    function getWorkersInfo() {
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

    function verifyWorker($worker_id) {
        $workers_data = file_get_contents("../Models/workersInfo.json");
        $json=json_decode($workers_data, true);
        foreach($json as $key => $worker) {
            if($worker['worker_id'] == $worker_id) {
                $json[$key]['is_workerVerified'] = "true";
            }
        }
        file_put_contents("../Models/workersInfo.json", json_encode($json));
    }

    function unverifyWorker($worker_id) {
        $workers_data = file_get_contents("../Models/workersInfo.json");
        $json=json_decode($workers_data, true);
        foreach($json as $key => $worker) {
            if($worker['worker_id'] == $worker_id) {
                $json[$key]['is_workerVerified'] = "false";
            }
        }
        file_put_contents("../Models/workersInfo.json", json_encode($json));
    }

    function setWorker($worker_id,$worker_name,$worker_username,$worker_password,$worker_gender, $worker_age, $worker_phone, $is_workerVerified, $rating, $block_status, $work_categories)
    {
        $workers_data = file_get_contents("../Models/workersInfo.json");
        $json=json_decode($workers_data, true);
        $worker = array(
            "worker_id" => $worker_id,
            "worker_name" => $worker_name,
            "worker_username" => $worker_username,
            "worker_password" => $worker_password,
            "worker_gender" => $worker_gender,
            "worker_age" => $worker_age,
            "worker_phone" => $worker_phone,
            "is_workerVerified" => $is_workerVerified,
            "rating" => $rating,
            "block_status" => $block_status,
            "worker_workCategories" => $work_categories
        );
        array_push($json, $worker);
        $json = json_encode($json);
        file_put_contents("../Models/workersInfo.json", $json);
    }
    
?>