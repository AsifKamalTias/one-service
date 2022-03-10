<?php
    include '../../Controllers/admin-signin-stateCheck.php';
    if(isAdminSignedIn()==false) {
        header('Location: admin-signin.php');
    }

    include '../../Controllers/service-info.php';
    $service_info = getServices();

    if(isset($_GET['service_id']))
    {
        $selectedServiceId = $_GET['service_id'];
        $selectedServiceName = getService($selectedServiceId)['service_name'];
        $selectedServicePrice = getService($selectedServiceId)['service_price'];
    }
    
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Service</title>
<body>
    <a href="./admin-dashboard.php"> Back to Dashboard</a>
    <h1>Edit Service</h1>
    <hr>
    <form action="../../Controllers/edit-service-action.php" method="GET">
        <label for="service_id">Service Id: </label>
        <input type="text" name="service_id" value="<?php echo $selectedServiceId ?>">
        <br><br>
        <label for="service_name">Service Name:</label>
        <input type="text" name="service_name" id="service_name" value="<?php echo $selectedServiceName ?>">
        <br><br>
        <label for="service_price">Service Price:</label>
        <input type="text" name="service_price" id="service_price" value="<?php echo $selectedServicePrice ?>">
        <br><br>
        <input type="submit" value="Edit Service">
    </form>
    
</body>
</html>