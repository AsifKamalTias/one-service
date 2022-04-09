<?php
    include '../../Controllers/admin-signin-stateCheck.php';
    if(isAdminSignedIn()==true) {
        header('Location: admin-dashboard.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin | OneService</title>
    <style>
        p.invalid-auth{
            color: red;
        }
    </style>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <h1 class="site-title">OneService</h1>
    <form action="../../Controllers/admin-signin-action.php" method="POST">
        <h3>Admin Sign In</h3>
        <p class="invalid-auth">
            <?php
                if(isset($_GET['signin']) && $_GET['signin'] == 'false') {
                    echo "Invalid username or password. Please try again!";
                }
            ?>
        </p>
        <label for="username">Username</label>
        <input class="text-box" type="text" id="username" name="username" placeholder="Username">
        <label for="password">Password</label>
        <input class="text-box" type="password" id="password" name="password" placeholder="Password">
        <input type="checkbox" name="remember" id="remember">
        <label class="checkbox-label" for="remember">Remember me</label><br><br>
        <input class="signin-button" type="submit" value="Sign in">
    </form>
    <!-- <div class="container">
        <h1>Admin Sign In</h1>
        <p class="invalid-auth">
            <?php
                if(isset($_GET['signin']) && $_GET['signin'] == 'false') {
                    echo "Invalid username or password. Please try again.";
                }
            ?>
        </p>
        <div class="form-container">
            <form action="../../Controllers/admin-signin-action.php" method="POST">
                <label for="username">Username</label><br>
                <input type="text" name="username" id="username" placeholder="type username.."><br><br>
                <label for="password">Password</label><br>
                <input type="password" name="password" id="password" placeholder="type password.."><br><br>
                <input type="checkbox" name="remember" id="remember">
                <label for="remember">Remember me</label><br><br>
                <input type="submit" value="Sign in">
            </form>
        </div>
    </div> -->
</body>
</html>