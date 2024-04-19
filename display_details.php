<?php
include('connection.php');
// Assuming you're using session to store user_id after login
session_start();
$user_id = $_SESSION['user_id'];

$sql = "SELECT * 
        FROM users 
        INNER JOIN user_details ON users.user_id = user_details.u_id 
        WHERE users.user_id = '$user_id'";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<h2>User Details</h2>";
    echo "<table border='1'>
            <tr>
                <th>Username</th>
                <th>Email</th>
                <th>Address</th>
                <th>Role</th>
                <th>Salary</th>
                <th>Phone</th>
            </tr>";
    
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['username'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['address'] . "</td>";
        echo "<td>" . $row['role'] . "</td>";
        echo "<td>" . $row['salary'] . "</td>";
        echo "<td>" . $row['phone'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No user details found.";
}

mysqli_close($con);
?>
