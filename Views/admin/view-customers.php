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
    <style>
        table {
            border: 1px solid black;
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            text-align: left;
            padding: 8px;
            border: 1px solid black;
        }
        p.invalid{
            color: red;
        }
        p.valid{
            color: green;
        }
    </style>
</head>
<body>
    <a href="./admin-dashboard.php"> Back to Dashboard</a>
    <h1>Customers Information</h1>
    <hr>
    <a href="./add-customer.php">Add Customer</a>
    <p class="valid">
        <?php
            if(isset($_GET['add']) && $_GET['add'] == 'true') {
                echo "Customer added successfully!";
            } 
            else if(isset($_GET['edit']) && $_GET['edit'] == 'true') {
                echo "Customer edited successfully!";
            }
            else if(isset($_GET['remove']) && $_GET['remove'] == 'true') {
                echo "Customer removed successfully!";
            }
            else
            {
                echo "";
            }
        ?>
    </p>
    <p class="invalid">
        <?php
            if(isset($_GET['add']) && $_GET['add'] == 'false') {
                if(isset($_GET['error']) && $_GET['error'] == 'empty') {
                    echo "Please, fill up all the fields properly. Try again.";
                }
                else if(isset($_GET['error']) && $_GET['error'] == 'phone-password')
                {
                    echo "Phone Number must be numaric and Password must be at least 8 characters long. Try again.";
                }
                else {
                    echo "Something went wrong. Please, fill up all the fields properly. Try again.";
                }
            }
            else if(isset($_GET['edit']) && $_GET['edit'] == 'false') {
                if(isset($_GET['error']) && $_GET['error'] == 'empty') {
                    echo "Please, fill up all the fields properly. Try again.";
                }
                else if(isset($_GET['error']) && $_GET['error'] == 'phone-password')
                {
                    echo "Phone Number must be numaric and Password must be at least 8 characters long. Try again.";
                }
                else {
                    echo "Something went wrong. Please, fill up all the fields properly. Try again.";
                }
            }
            else if(isset($_GET['remove']) && $_GET['remove'] == 'false') {
                echo "Something went wrong. Can not remove. Try again.";
            }
            else
            {
                echo "";
            }
        ?>
    </p>
    <br><br>
    <table border:"1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Username</th>
                <th>Address</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>Block Status</th>
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
                        echo "<td><a href='./edit-customer.php?customer_id=".$customer['customer_id']."' >Edit</a></td>";
                        echo "<td><a href='../../Controllers/remove-customer.php?customer_id=".$customer['customer_id']."' >Remove</a></td>";
                    ?>
                    <?php
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>