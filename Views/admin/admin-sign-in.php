<!DOCTYPE html>
<html>
<head>
    <title>Admin | OneService</title>
    <style>
        p.invalid-auth{
            color: red;
        }
    </style>
</head>
<body>
    <h1>Admin Sign in</h1>
    <p class="invalid-auth">
        <?php
            if(isset($_GET['signin']) && $_GET['signin'] == 'false') {
                echo "Invalid username or password. Please try again.";
            }
        ?>
    </p>
    <form action="../../Controllers/admin-signin-action.php" method="POST">
        <label for="username">Username</label>
        <input type="text" name="username" id="username"><br><br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password"><br><br>
        <input type="checkbox" name="remember" id="remember">
        <label for="remember">Remember me</label><br><br>
        <input type="submit" value="Sign in">
    </form>
</body>
</html>