<?php
    include '../../Models/service.php';
    function getServices()
    {        
        $services = getServicesInfo();
        return $services;
    }

    function getService($service_id)
    {
        $service = getServiceInfo($service_id);
        return $service;
    }

    function generateServiceId()
    {
        $services = getServices();
        $no_of_services = count($services);
        $id_of_last_service = $services[$no_of_services-1]['service_id'];
        $generatedId = "s-".((string)(((int)(substr($id_of_last_service, 2)))+1));
        return $generatedId;
    }
?>