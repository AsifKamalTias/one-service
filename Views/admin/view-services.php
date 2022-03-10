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
    <title>Workers Information - Admin | OneService</title>
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
    <h1>Services</h1>
    <hr>
    <p class="valid">
        <?php
            if(isset($_GET['add']) && $_GET['add'] == 'true') {
                echo "Service added successfully!";
            } 
            else if(isset($_GET['edit']) && $_GET['edit'] == 'true') {
                echo "Service edited successfully!";
            }
            else if(isset($_GET['remove']) && $_GET['remove'] == 'true') {
                echo "Service removed successfully!";
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
                echo "Something went wrong. Please, fill up all the fields properly. Try again.";
            } 
            else if(isset($_GET['edit']) && $_GET['edit'] == 'false') {
                echo "Something went wrong. Please, fill up all the fields properly. Try again.";
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
    <a href="./add-service.php">Add Service</a>
    <br><br>
    <table border:"1">
        <thead>
            <tr>
                <th>Service Id</th>
                <th>Service Name</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($service_info as $service) {
                    echo "<tr>";
                    echo "<td>" . $service['service_id'] . "</td>";
                    echo "<td>" . $service['service_name'] . "</td>";
                    echo "<td>" . $service['service_price'] . "</td>";
            ?>
                <?php
                    echo "<td><a href='./edit-service.php?service_id=".$service['service_id']."' >Edit</a></td>";
                    echo "<td><a href='../../Controllers/remove-service.php?service_id=".$service['service_id']."' >Remove</a></td>";
                ?>
                    <?php
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>