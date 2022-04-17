<?php
    include '../../Controllers/admin-signin-stateCheck.php';
    if(isAdminSignedIn()==false) {
        header('Location: admin-signin.php');
    }

    include '../../Controllers/moderator-info.php';
    $moderators_info = getModerators();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Moderators Information - Admin | OneService</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="header">
            <h1>Moderators Information</h1>
            <div class="header-links">
                <a id="btn-dashboard" href="./admin-dashboard.php"> < Dashboard</a>
                <a id="btn-profile" href="../../Views/admin/profile"><i class="fas fa-user"></i> Profile </a>
                <a id="btn-signout" href="../../Controllers/admin-signout-action.php?signout=true">Sign Out</a>
            </div>
    </div>
    <div class="add-btn-area">
        <a class="add-btn" href="./add-moderator.php"><i class="fa fa-plus"></i> Add Moderator</a>
    </div>
    <div class="feedback-success">
        <?php
            if(isset($_GET['add']) && $_GET['add'] == 'true') {
                echo "<p>Moderator added successfully!</p>";
            } 
            else if(isset($_GET['edit']) && $_GET['edit'] == 'true') {
                echo "<p>Moderator edited successfully!</p>";
            }
            else if(isset($_GET['remove']) && $_GET['remove'] == 'true') {
                echo "<p>Moderator removed successfully!</p>";
            }
            else
            {
                echo "";
            }
        ?>
    </div>
    <div class="feedback-fail">
        <?php
            if(isset($_GET['add']) && $_GET['add'] == 'false') 
            { 
                echo "<p>Something went wrong. Cannot add moderator. Try Again!</p>";
            } 
            else if(isset($_GET['edit']) && $_GET['edit'] == 'false') 
            {
                echo "<p>Something went wrong. Cannot edit moderator. Try Again!</p>";   
            }
            else if(isset($_GET['remove']) && $_GET['remove'] == 'false') 
            {
                echo "<p>Something went wrong. Cannot remove moderator. Try again!</p>";
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
                <th>Username</th>
                <th colspan="2">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($moderators_info as $moderator) {
                    echo "<tr>";
                    echo "<td>" . $moderator['moderator_id'] . "</td>";
                    echo "<td>" . $moderator['moderator_username'] . "</td>";
                    ?>
                    <?php
                        echo "<td><a href='./edit-moderator.php?moderator_id=".$moderator['moderator_id']."' ><i class='fa fa-pen'></i></a></td>";
                        echo "<td><a href='../../Controllers/remove-moderator.php?moderator_id=".$moderator['moderator_id']."' ><i class='fa fa-trash'></i></a></td>";
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