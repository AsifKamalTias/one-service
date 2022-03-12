<?php
    include '../../../Controllers/admin-signin-stateCheck.php';
    if(isAdminSignedIn()==false) {
        header('Location: ../admin-signin.php');
    }
    include '../../../Controllers/admin-info.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Profile | Admin</title>
    <style>
        p.invalid-edit{
            color: red;
        }
        p.valid-edit{
            color: green;
        }
    </style>
</head>
<body>
    <a href="../admin-dashboard.php"> Back to Dashboard</a>
    <h1>Edit Profile</h1>
    <hr>
    <p class = "invalid-edit">
    <?php
        if(isset($_GET['edit']) && $_GET['edit']== 'false')
        {
            if(isset($_GET['error']))
            {
                if($_GET['error'] == 'empty')
                {
                    echo "Cannot Update. Please fill up all the fields.";
                }
                else if($_GET['error'] == 'password')
                {
                    echo "Cannot Update. Password must be longer than 7 characters.";
                }
            }
        }
    ?>
    </p>
    <p class = "valid-edit">
    <?php
        if(isset($_GET['edit']) && $_GET['edit']== 'true')
        {
            echo "Profile updated successfully.";
        }
    ?>
    </p>
    <form action="../../../Controllers/admin-profile-edit.php" method="POST">
        <label for="username">Username: </label>
        <input type="text" name="username" value="<?php echo getUserName() ?>">
        <br><br>
        <label for="password">Password: </label>
        <input type="text" name="password" value="<?php echo getPassword() ?>">
        <br><br>
        <input type="submit" value="Save">
    </form>
</body>
</html>