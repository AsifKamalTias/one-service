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
    </style>
</head>
<body>
    <h1>Workers Information</h1>
    <table border:"1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Username</th>
                <th>Gender</th>
                <th>Age</th>
                <th>Phone Number</th>
                <th>Varification Status</th>
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
                    echo "<td>" . $worker['is_workerVarified']."</td>";
                    ?>
                    <td>
                    <?php
                    foreach($worker['worker_workCategories'] as $work_category) {
                        echo $work_category."<br>";
                    }
                    ?>
                    </td>
                    <?php
                        if($worker['is_workerVarified'] == "false") {
                            echo "<td><a href='../../Controllers/worker-varification.php?worker_id=".$worker['worker_id']."&varify=true'>Verify</a></td>";
                        }
                        else {
                            echo "<td><a href='../../Controllers/worker-varification.php?worker_id=".$worker['worker_id']."&varify=false'>Unverify</a></td>";
                        }
                    ?>
                    <?php
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>