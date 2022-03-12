<?php
    include '../../Controllers/admin-signin-stateCheck.php';
    if(isAdminSignedIn()==false) {
        header('Location: admin-signin.php');
    }

    include '../../Controllers/customer-info.php';
    //$customers_info = getCustomers();

    if(isset($_GET['customer_id']))
    {
        $selectedCustomerId = $_GET['customer_id'];
        $selectedCustomerName = getCustomer($selectedCustomerId)['customer_name'];
        $selectedCustomerUsername = getCustomer($selectedCustomerId)['customer_username'];
        $selectedCustomerAddress = getCustomer($selectedCustomerId)['customer_address'];
        $selectedCustomerPhone = getCustomer($selectedCustomerId)['customer_phone'];
        $selectedCustomerEmail = getCustomer($selectedCustomerId)['customer_email'];
        $selectedCustomerPassword = getCustomer($selectedCustomerId)['customer_password'];
        $selectedCustomerBlockStatus = getCustomer($selectedCustomerId)['customer_blockStatus'];
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Customer</title>
</head>
<body>
    <a href="./admin-dashboard.php"> Back to Dashboard</a>
    <h1>Edit Customer</h1>
    <hr>
    <form action="../../Controllers/edit-customer-action.php" method="POST">
        <label for="customer_id">Customer Id: </label>
        <input type="text" name="customer_id" value="<?php echo $selectedCustomerId; ?>">
        <br><br>
        <label for="customer_name">Customer Name:</label>
        <input type="text" name="customer_name" id="customer_name" value="<?php echo $selectedCustomerName; ?>">
        <br><br>
        <label for="customer_username">Customer Username:</label>
        <input type="text" name="customer_username" id="customer_username" value="<?php echo $selectedCustomerUsername; ?>">
        <br><br>
        <label for="customer_address">Customer Address:</label>
        <input type="text" name="customer_address" id="customer_address" value="<?php echo $selectedCustomerAddress; ?>">
        <br><br>
        <label for="customer_phone">Customer Phone:</label>
        <input type="phone" name="customer_phone" id="customer_phone" value="<?php echo $selectedCustomerPhone; ?>">
        <br><br>
        <label for="customer_email">Customer Email:</label>
        <input type="email" name="customer_email" id="customer_email" value="<?php echo $selectedCustomerEmail; ?>">
        <br><br>
        <label for="customer_password">Customer Password:</label>
        <input type="password" name="customer_password" id="customer_password" value="<?php echo $selectedCustomerPassword; ?>">
        <br><br>
        <label for="customer_blockStatus">Customer Block Status:</label>
        <input type="radio" name="customer_blockStatus" value="blocked"> Blocked
        <input type="radio" name="customer_blockStatus" value="unblocked"> Unblocked
        <br><br>
        <input type="submit" value="Edit Customer">
    </form>
    
</body>
</html>