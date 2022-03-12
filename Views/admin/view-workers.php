<?php
    include '../../Controllers/admin-signin-stateCheck.php';
    if(isAdminSignedIn()==false) {
        header('Location: admin-signin.php');
    }

    include '../../Controllers/worker-info.php';
    $workers_info = getWorkers();
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
    <h1>Workers Information</h1>
    <hr>
    <a href="./add-worker.php">Add Worker</a>
    <p class="valid">
        <?php
            if(isset($_GET['add']) && $_GET['add'] == 'true') {
                echo "Worker added successfully!";
            } 
            else if(isset($_GET['edit']) && $_GET['edit'] == 'true') {
                echo "Worker edited successfully!";
            }
            else if(isset($_GET['remove']) && $_GET['remove'] == 'true') {
                echo "Worker removed successfully!";
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
    <br><br>
    <table border:"1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Username</th>
                <th>Gender</th>
                <th>Age</th>
                <th>Phone Number</th>
                <th>Verification Status</th>
                <th>Ratings</th>
                <th>Block Status</th>
                <th>Work Categories</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($workers_info as $worker) {
                    echo "<tr>";
                    echo "<td>" . $worker['worker_id'] . "</td>";
                    echo "<td>" . $worker['worker_name'] . "</td>";
                    echo "<td>" . $worker['worker_username'] . "</td>";
                    echo "<td>" . $worker['worker_gender']."</td>";
                    echo "<td>" . $worker['worker_age']."</td>";
                    echo "<td>" . $worker['worker_phone']."</td>";
                    echo "<td>" . $worker['is_workerVerified']."</td>";
                    echo "<td>" . $worker['rating']."</td>";
                    echo "<td>" . $worker['block_status']."</td>";
                    ?>
                    <td>
                    <?php
                    foreach($worker['worker_workCategories'] as $work_category) {
                        echo $work_category."<br>";
                    }
                    ?>
                    </td>
                    <?php
                        if($worker['is_workerVerified'] == "false") {
                            echo "<td><a href='../../Controllers/worker-verification.php?worker_id=".$worker['worker_id']."&verify=true'>Verify</a></td>";
                        }
                        else {
                            echo "<td><a href='../../Controllers/worker-verification.php?worker_id=".$worker['worker_id']."&verify=false'>Unverify</a></td>";
                        }
                    ?>
                    <?php
                        echo "<td><a href='./edit-worker.php?worker_id=".$worker['worker_id']."' >Edit</a></td>";
                        echo "<td><a href='../../Controllers/remove-worker.php?worker_id=".$worker['worker_id']."' >Remove</a></td>";
                    ?>
                    <?php
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>