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
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="header">
        <h1>Edit Profile</h1>
        <div class="header-links">
            <a id="btn-dashboard" href="../admin-dashboard.php"> < Dashboard</a>
            <a id="btn-profile" href="./index.php"><i class="fas fa-user"></i> Profile </a>
            <a id="btn-signout" href="../../../Controllers/admin-signout-action.php?signout=true">Sign Out</a>
        </div>
    </div>
    <div class="form-container">
        <div class="form-wrapper">
            <div class="upper">
				<h1>Update</h1>
                <div class="feedback-success">
                        <?php
                            if(isset($_GET['edit']) && $_GET['edit']== 'true')
                            {
                                echo "<p>Profile updated successfully!</p>";
                            }
                        ?>
                </div>
                <div class="feedback-fail">
                    <?php
                        if(isset($_GET['edit']) && $_GET['edit']== 'false')
                        {
                            echo "<p>Something went wrong! Cannot update profile. Try again!</p>";
                        }
                    ?>
			    </div>
			</div>
            <form id="edit-profile-form" class="edit-form" action="../../../Controllers/admin-profile-edit.php" method="POST">
                <div class="form-control">
                    <label for="username">Username </label>
                    <input type="text" name="username" id="edit-profile-username" value="<?php echo getAdminUsername() ?>">
                    <small id="edit-profile-username-error">Username cannot be empty!</small>
                </div>
                <div class="form-control">
                    <label for="password">Password </label>
                    <input type="text" name="password" id="edit-profile-password" value="<?php echo getAdminPassword() ?>">
                    <small id="edit-profile-password-error">Password Error!</small>
                </div>
                <button type="submit">Save</button>
            </form>
        </div>
    </div>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="../js/edit-profile-validation.js"></script>
</body>
</html>