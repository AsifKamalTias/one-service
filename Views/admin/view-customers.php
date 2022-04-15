<?php
    include '../../Controllers/admin-signin-stateCheck.php';
    if(isAdminSignedIn()==false) {
        header('Location: admin-signin.php');
    }

    include '../../Controllers/customer-info.php';
    $customers_info = getCustomers();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Customers Information - Admin | OneService</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="header">
            <h1>Customers Information</h1>
            <div class="header-links">
                <a id="btn-dashboard" href="./admin-dashboard.php"> < Dashboard</a>
                <a id="btn-profile" href="../../Views/admin/profile"><i class="fas fa-user"></i> Profile </a>
                <a id="btn-signout" href="../../Controllers/admin-signout-action.php?signout=true">Sign Out</a>
            </div>
    </div>
    <div class="add-btn-area">
        <a class="add-btn" href="./add-customer.php"><i class="fa fa-plus"></i> Add Customer</a>
    </div>
    <div class="feedback-success">
        <?php
            if(isset($_GET['add']) && $_GET['add'] == 'true') {
                echo "<p>Customer added successfully!</p>";
            } 
            else if(isset($_GET['edit']) && $_GET['edit'] == 'true') {
                echo "<p>Customer edited successfully!</p>";
            }
            else if(isset($_GET['remove']) && $_GET['remove'] == 'true') {
                echo "<p>Customer removed successfully!</p>";
            }
            else
            {
                echo "";
            }
        ?>
    </div>
    <div class="feedback-fail">
        <?php
            if(isset($_GET['add']) && $_GET['add'] == 'false') {
                
                echo "<p>Something went wrong! Cannot add customer. Try again!</p>";
    
            }
            else if(isset($_GET['edit']) && $_GET['edit'] == 'false') {
                echo "<p>Something went wrong! Cannot edit customer. Try again!</p>";
            }
            else if(isset($_GET['remove']) && $_GET['remove'] == 'false') {
                echo "Something went wrong! Cannot remove customer. Try again!";
            }
            else
            {
                echo "";
            }
        ?>
    </div>
    <br><br>
    <table class="info-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Username</th>
                <th>Address</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>Block Status</th>
                <th colspan="2">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($customers_info as $customer) {
                    echo "<tr>";
                    echo "<td>" . $customer['customer_id'] . "</td>";
                    echo "<td>" . $customer['customer_name'] . "</td>";
                    echo "<td>" . $customer['customer_username'] . "</td>";
                    echo "<td>" . $customer['customer_address']."</td>";
                    echo "<td>" . $customer['customer_phone']."</td>";
                    echo "<td>" . $customer['customer_email']."</td>";
                    echo "<td>" . $customer['customer_blockStatus']."</td>";
                    ?>
                    <?php
                        echo "<td><a href='./edit-customer.php?customer_id=".$customer['customer_id']."' ><i class='fa fa-pen'></i></a></td>";
                        echo "<td><a href='../../Controllers/remove-customer.php?customer_id=".$customer['customer_id']."' ><i class='fa fa-trash'></i></a></td>";
                    ?>
                    <?php
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</body>
</html>