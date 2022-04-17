<?php
    include '../../Controllers/admin-signin-stateCheck.php';
    if(isAdminSignedIn()==false) {
        header('Location: admin-signin.php');
    }

    // include '../../Controllers/customer-info.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Customer</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="header">
        <h1>Add Customer</h1>
        <div class="header-links">
            <a id="btn-dashboard" href="./admin-dashboard.php"> < Dashboard</a>
            <a id="btn-profile" href="../../Views/admin/profile"><i class="fas fa-user"></i> Profile </a>
            <a id="btn-signout" href="../../Controllers/admin-signout-action.php?signout=true">Sign Out</a>
        </div>
    </div>

    <div class="form-container">
        <div class="form-wrapper add-customer-form-wrapper">
                <div class="upper">
                    <h1>Add</h1>
                    <hr>
                </div>
                <form onsubmit="return validate()" id="add-customer-form" class="edit-form" action="../../Controllers/add-customer-action.php" method="POST">
                    <div class="form-control">
                        <label for="customer_name">Customer Name</label>
                        <input type="text" name="customer_name" id="customer_name">
                        <small id="customer-name-error">Customer name cannot be empty!</small>
                    </div>
                    <div class="form-control">
                        <label for="customer_username">Customer Username</label>
                        <input type="text" name="customer_username" id="customer_username">
                        <small id="customer-username-error">Customer username cannot be empty!</small>
                    </div>
                    <div class="form-control">
                        <label for="customer_address">Customer Address</label>
                        <input type="text" name="customer_address" id="customer_address">
                        <small id="customer-address-error">Customer address cannot be empty!</small>
                    </div>
                    <div class="form-control">
                        <label for="customer_phone">Customer Phone</label>
                        <input type="phone" name="customer_phone" id="customer_phone">
                        <small id="customer-phone-error">Customer phone cannot be empty!</small>
                    </div>
                    <div class="form-control">
                        <label for="customer_email">Customer Email</label>
                        <input type="email" name="customer_email" id="customer_email">
                        <small id="customer-email-error">Customer email cannot be empty!</small>
                    </div>
                    <div class="form-control">
                        <label for="customer_password">Customer Password</label>
                        <input type="password" name="customer_password" id="customer_password">
                        <small id="customer-password-error">Customer password cannot be empty!</small>
                    </div>
                    <div class="form-control-radio">
                        <label class="radio-label" for="customer_blockStatus">Customer Block Status</label>
                        <br>
                        <input class="radio-input" type="radio" id="customer_blocked" name="customer_blockStatus" value="blocked"> Blocked
                        <input class="radio-input" type="radio" id="customer_unblocked" name="customer_blockStatus" value="unblocked"> Unblocked
                        <small id="customer-block-status-error">Select customer block status!</small>
                    </div>
                    <button type="submit">Add</button>
                </form>
        </div>
    </div>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="./js/add-customer-validation.js"></script>
</body>
</html>