<?php
    include '../../Controllers/admin-signin-stateCheck.php';
    if(isAdminSignedIn()==false) {
        header('Location: admin-signin.php');
    }

    include '../../Controllers/worker-info.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Worker</title>
</head>
<body>
    <a href="./admin-dashboard.php"> Back to Dashboard</a>
    <h1>Add Worker</h1>
    <hr>
    <form action="../../Controllers/add-worker-action.php" method="POST">
        <label for="worker_id">Worker Id: </label>
        <input type="text" name="worker_id" required value="<?php echo workerIdGenerator()?>"><br><br>
        <label for="worker_name">Worker Name: </label>
        <input type="text" name="worker_name" required placeholder="Worker Name"><br><br>
        <label for="worker_username">Worker Username: </label>
        <input type="text" name="worker_username" required placeholder="Worker Username"><br><br>
        <label for="worker_password">Worker Password: </label>
        <input type="password" name="worker_password" required placeholder="Worker Password"><br><br>
        <label for="worker_gender">Gender: </label>
        <input type="radio" name="worker_gender" value="male"> Male
        <input type="radio" name="worker_gender" value="female"> Female
        <br><br>
        <label for="worker_age">Worker Age: </label>
        <input type="text" name="worker_age" required><br><br>
        <label for="worker_phone">Worker Phone: </label>
        <input type="phone" name="worker_phone" required><br><br>
        <label for="is_workerVerified">Verification Status: </label>
        <input type="radio" name="is_workerVerified" value="true"> True
        <input type="radio" name="is_workerVerified" value="false"> False
        <br><br>
        <label for="rating">Rating: </label>
        <input type="text" name="rating" required><br><br>
        <label for="block_status">Block Status: </label>
        <input type="radio" name="block_status" value="blocked"> Blocked
        <input type="radio" name="block_status" value="unblocked"> Unblocked
        <br><br>

        <label for="work_categories">Work Categories: </label>
        <br>
        <?php
            include '../../Controllers/service-info.php';
            $work_categories = getServices();
            foreach($work_categories as $work_category) {
                echo "<input type='checkbox' name='work_categories[]' value='" . $work_category['service_id'] . "'>" . $work_category['service_name'] . "<br>";
            }
        ?>
        <br><br>
        <input type="submit" value="Add">
    </form>
</body>
</html>