<?php
    function getServicesInfo()
    {
        $services_data = file_get_contents("../../Models/servicesInfo.json");
        $json=json_decode($services_data, true);
        return $json;
    }

    function getServiceInfo($service_id)
    {
        $services_data = file_get_contents("../../Models/servicesInfo.json");
        $json=json_decode($services_data, true);
        foreach($json as $service) {
            if($service['service_id'] == $service_id) {
                return $service;
            }
        }
    }

    function setService($service_id, $service_name, $service_price)
    {
        $services_data = file_get_contents("../Models/servicesInfo.json");
        $json=json_decode($services_data, true);
        $service = array(
            "service_id" => $service_id,
            "service_name" => $service_name,
            "service_price" => $service_price
        );
        array_push($json, $service);
        $json = json_encode($json);
        file_put_contents("../Models/servicesInfo.json", $json);
    }

    function updateService($service_id, $service_name, $service_price)
    {
        $services_data = file_get_contents("../Models/servicesInfo.json");
        $json=json_decode($services_data, true);
        foreach($json as $key => $service) {
            if($service['service_id'] == $service_id) {
                $json[$key]['service_name'] = $service_name;
                $json[$key]['service_price'] = $service_price;
            }
        }
        $json = json_encode($json);
        file_put_contents("../Models/servicesInfo.json", $json);
    }

    function removeService($service_id)
    {
        $services_data = file_get_contents("../Models/servicesInfo.json");
        $json=json_decode($services_data, true);
        foreach($json as $key => $service) {
            if($service['service_id'] == $service_id) {
                unset($json[$key]);
            }
        }
        $json = json_encode($json);
        file_put_contents("../Models/servicesInfo.json", $json);
    }
?>