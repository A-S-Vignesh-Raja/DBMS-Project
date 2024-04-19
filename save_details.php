<?php
include('connection.php');
$address=$_POST['address'];
$role=$_POST['role'];
$salary=$_POST['salary'];
$phone=$_POST['phone'];
$address=mysqli_real_escape_string($con,$address);
$role=mysqli_real_escape_string($con,$role);
$salary=mysqli_real_escape_string($con,$salary);
$phone=mysqli_real_escape_string($con,$phone);
$sql="INSERT INTO user_details(address,role,salary,phone)VALUES('$address','$role','$salary','$phone')";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./output.css">
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full bg-white p-8 rounded-lg shadow-lg text-center">
        <h2 class="text-2xl font-semibold mb-6">User Dashboard</h2>

        <div class="mb-4">
            <a href="display_details.php"
                class="block bg-blue-500 hover:bg-blue-600 text-white font-semibold py-3 px-6 rounded-lg shadow-md transition duration-300 ease-in-out">
                Display Details
            </a>
        </div>
    </div>
</body>
</html>