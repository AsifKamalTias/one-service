<?php
    include '../../Controllers/admin-signin-stateCheck.php';
    if(isAdminSignedIn()==false) {
        header('Location: admin-signin.php');
    }

    include '../../Controllers/customer-info.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Customer</title>
</head>
<body>
    <a href="./admin-dashboard.php"> Back to Dashboard</a>
    <h1>Add Customer</h1>
    <hr>
    <form action="../../Controllers/add-customer-action.php" method="POST">
        <label for="customer_id">Customer Id: </label>
        <input type="text" name="customer_id" value="<?php echo generatedCustomerId(); ?>">
        <br><br>
        <label for="customer_name">Customer Name:</label>
        <input type="text" name="customer_name" id="customer_name">
        <br><br>
        <label for="customer_username">Customer Username:</label>
        <input type="text" name="customer_username" id="customer_username">
        <br><br>
        <label for="customer_address">Customer Address:</label>
        <input type="text" name="customer_address" id="customer_address">
        <br><br>
        <label for="customer_phone">Customer Phone:</label>
        <input type="phone" name="customer_phone" id="customer_phone">
        <br><br>
        <label for="customer_email">Customer Email:</label>
        <input type="email" name="customer_email" id="customer_email">
        <br><br>
        <label for="customer_password">Customer Password:</label>
        <input type="password" name="customer_password" id="customer_password">
        <br><br>
        <label for="customer_blockStatus">Customer Block Status:</label>
        <input type="radio" name="customer_blockStatus" value="blocked"> Blocked
        <input type="radio" name="customer_blockStatus" value="unblocked"> Unblocked
        <br><br>
        <input type="submit" value="Add Customer">
    </form>
    
</body>
</html>