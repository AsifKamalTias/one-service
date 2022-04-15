<?php
    include '../../Controllers/admin-signin-stateCheck.php';
    if(isAdminSignedIn()==false) {
        header('Location: admin-signin.php');
    }

    include '../../Controllers/customer-info.php';
    // $customers_info = getCustomer();
    if(isset($_GET['customer_id']))
    {
        $selectedCustomerId = $_GET['customer_id'];        
        $selectedCustomerName = customerName($selectedCustomerId);
        $selectedCustomerUsername = customerUsername($selectedCustomerId);
        $selectedCustomerAddress = customerAddress($selectedCustomerId);
        $selectedCustomerPhone = customerPhone($selectedCustomerId);
        $selectedCustomerEmail = customerEmail($selectedCustomerId);
        $selectedCustomerPassword = customerPassword($selectedCustomerId);
        $selectedCustomerBlockStatus = customerBlockStatus($selectedCustomerId);
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Customer</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="header">
        <h1>Edit Customer</h1>
        <div class="header-links">
            <a id="btn-dashboard" href="./admin-dashboard.php"> < Dashboard</a>
            <a id="btn-profile" href="../../Views/admin/profile"><i class="fas fa-user"></i> Profile </a>
            <a id="btn-signout" href="../../Controllers/admin-signout-action.php?signout=true">Sign Out</a>
        </div>
    </div>
    <div class="form-container">
        <div class="form-wrapper edit-customer-form-wrapper">
            <div class="upper">
                <h1>Update</h1>
                <hr>
                <p>Customer [<?php echo $selectedCustomerId; ?>]</p>
                <hr>
            </div>
            <form id="edit-customer-form" class="edit-form" action="../../Controllers/edit-customer-action.php" method="POST">
                <input type="hidden" id="customer_id" name="customer_id" value="<?php echo $selectedCustomerId; ?>">
                <div class="form-control">
                    <label for="customer_name">Customer Name</label>
                    <input type="text" id="customer_name" name="customer_name" value="<?php echo $selectedCustomerName; ?>">
                    <small id="customer-name-error"></small>
                </div>
                <div class="form-control">
                    <label for="customer_username">Customer Username</label>
                    <input type="text" id="customer_username" name="customer_username" value="<?php echo $selectedCustomerUsername; ?>">
                    <small id="customer-username-error"></small>
                </div>
                <div class="form-control">
                    <label for="customer_address">Customer Address</label>
                    <input type="text" id="customer_address" name="customer_address" value="<?php echo $selectedCustomerAddress; ?>">
                    <small id="customer-address-error"></small>
                </div>
                <div class="form-control">
                    <label for="customer_phone">Customer Phone</label>
                    <input type="text" id="customer_phone" name="customer_phone" value="<?php echo $selectedCustomerPhone; ?>">
                    <small id="customer-phone-error"></small>
                </div>
                <div class="form-control">
                    <label for="customer_email">Customer Email</label>
                    <input type="text" id="customer_email" name="customer_email" value="<?php echo $selectedCustomerEmail; ?>">
                    <small id="customer-email-error"></small>
                </div>
                <div class="form-control">
                    <label for="customer_password">Customer Password</label>
                    <input type="text" id="customer_password" name="customer_password" value="<?php echo $selectedCustomerPassword; ?>">
                    <small id="customer-password-error"></small>
                </div>
                <div class="form-control-radio">
                    <label for="customer_block_status">Customer Block Status</label><br>
                    <input type="radio" id="customer_blocked" name="customer_blockStatus" value="blocked"> Blocked
                    <input type="radio" id="customer_unblocked" name="customer_blockStatus" value="unblocked"> Unblocked
                    <small id="customer-block-status-error"></small>
                </div>
                <button type="submit">Update</button>
            </form>
        </div>
    </div>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="./js/edit-customer-validation.js"></script>
</body>
</html>