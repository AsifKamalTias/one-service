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
    <link rel="stylesheet" href="./css/sign-in.css">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <h1 class="site-title">OneService</h1>
    <form action="../../Controllers/admin-signin-action.php" method="POST" id="sign-in-form">
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
        <small id="username-error"> <i class="fa-solid fa-circle-exclamation"></i> Username cannot be empty!</small>
        <label for="password">Password</label>
        <input class="text-box" type="password" id="password" name="password" placeholder="Password">
        <small id="password-error"> <i class="fa-solid fa-circle-exclamation"></i> Password cannot be empty!</small><br>
        <input type="checkbox" name="remember" id="remember">
        <label class="checkbox-label" for="remember">Remember me</label><br><br>
        <input class="signin-button" type="submit" value="Sign in">
    </form>
    <script src="./js/validation.js"></script>
</body>
</html>