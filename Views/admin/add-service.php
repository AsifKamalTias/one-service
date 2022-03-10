<?php
    include '../../Controllers/admin-signin-stateCheck.php';
    if(isAdminSignedIn()==false) {
        header('Location: admin-signin.php');
    }

    include '../../Controllers/service-info.php';
    $service_info = getServices();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Service</title>
</head>
<body>
    <a href="./admin-dashboard.php"> Back to Dashboard</a>
    <h1>Add Service</h1>
    <hr>
    <form action="../../Controllers/add-service-action.php" method="GET">
        <label for="service_id">Service Id: </label>
        <input type="text" name="service_id" value="<?php echo generateServiceId(); ?>">
        <br><br>
        <label for="service_name">Service Name:</label>
        <input type="text" name="service_name" id="service_name">
        <br><br>
        <label for="service_price">Service Price:</label>
        <input type="text" name="service_price" id="service_price">
        <br><br>
        <input type="submit" value="Add Service">
    </form>
    
</body>
</html>