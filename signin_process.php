<?php
include('connection.php');
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $username=stripcslashes($username);
    $username=mysqli_real_escape_string($con,$username);
    $sql="SELECT user_id, password FROM users WHERE username='$username'";
    $result=mysqli_query($con, $sql);
    if ($result){
        $row=mysqli_fetch_assoc($result);
        $stored_hashed_password=$row['password'];
        if (password_verify($password, $stored_hashed_password)){
            $_SESSION['user_id']=$row['user_id']; // Saving user_id in session
            header("Location: additional_details.html");
            exit(); // Always exit after redirection
        }
        else{
            echo "Login failed. Invalid username or password.";
        }
    }
    else{
        echo "Login failed. Invalid username or password.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./output.css">
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full bg-white p-8 rounded-lg shadow-lg text-center">
        <h2 class="text-2xl font-semibold mb-6">User Dashboard</h2>

        <div class="mb-4">
            <a href="additional_details.html"
                class="block bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-md text-center mb-2">
                Fill Your Details Here
            </a>
            <a href="display_details.php"
                class="block bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-md text-center">
                Display Details
            </a>
        </div>
    </div>
</body>
</html>
