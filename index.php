<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="register.php" method="post">
        <h2>User Registration Form</h2>
        <div class="space">
            <label for="username">Username:</label>&nbsp;
            <input type="text" id="username" name="username" required><br>
        </div>
        <div class="space">
            <label for="email">Email:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="email" id="email" name="email" required><br>
        </div>
        <div class="space">
            <label for="password">Password:</label>&nbsp;
            <input type="password" id="password" name="password" required><br>
        </div>
        <div class="space">
            <input type="submit" value="Register"><br>
            <?php
                if(isset($_GET['error']) && $_GET['error']=='duplicate'){
                    echo "<p style='color:red;'>Username or email already registered.</p>";
                }
            ?>
            <?php
                if(isset($_GET['success']) && $_GET['success']=='true'){
                    echo "<p style='color:green;'>Registration successful</p>";
                }
            ?>

        </div>
        <div>
            <a href="signin.html"><h4>Already have an account? Sign in here</h4></a>
        </div>
    </form>
</body>
</html>

