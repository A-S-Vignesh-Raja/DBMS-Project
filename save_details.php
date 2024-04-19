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
if (mysqli_query($con, $sql)){
    echo "<h4>User details saved successfully</h4>";
} 
else{
    echo "Error: ".$sql."<br>".mysqli_error($con);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <h4><a href="display_details.php">Display details</a></h4>
    
</body>
</html>