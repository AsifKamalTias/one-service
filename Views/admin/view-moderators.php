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
    <h1>Moderators Information</h1>
    <hr>
    <a href="./add-moderator.php">Add Moderator</a>
    <p class="valid">
        <?php
            if(isset($_GET['add']) && $_GET['add'] == 'true') {
                echo "Moderator added successfully!";
            } 
            else if(isset($_GET['edit']) && $_GET['edit'] == 'true') {
                echo "Moderator edited successfully!";
            }
            else if(isset($_GET['remove']) && $_GET['remove'] == 'true') {
                echo "Moderator removed successfully!";
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
                else if(isset($_GET['error']) && $_GET['error'] == 'password')
                {
                    echo "Password must be at least 8 characters long.";
                }
                else
                {
                    echo "Something went wrong. Try Again.";
                }
            } 
            else if(isset($_GET['edit']) && $_GET['edit'] == 'false') {
                if(isset($_GET['error']) && $_GET['error'] == 'empty') {
                    echo "Please, fill up all the fields properly. Try again.";
                }
                else if(isset($_GET['error']) && $_GET['error'] == 'password')
                {
                    echo "Password must be at least 8 characters long.";
                }
                else
                {
                    echo "Something went wrong. Try Again.";
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
                <th>Username</th>
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
                        echo "<td><a href='./edit-moderator.php?moderator_id=".$moderator['moderator_id']."' >Edit</a></td>";
                        echo "<td><a href='../../Controllers/remove-moderator.php?moderator_id=".$moderator['moderator_id']."' >Remove</a></td>";
                    ?>
                    <?php
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>