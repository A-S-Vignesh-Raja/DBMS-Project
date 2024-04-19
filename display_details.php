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

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    <link href="./output.css" rel="stylesheet">
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-3xl w-full bg-white p-8 rounded-lg shadow-lg">
        <h2 class="text-2xl font-semibold text-center mb-6">User Details</h2>

        <?php if (mysqli_num_rows($result) > 0) : ?>
            <div class="overflow-x-auto">
                <table class="w-full table-auto">
                    <thead>
                        <tr class="bg-blue-500 text-white">
                            <th class="py-2 px-4">Username</th>
                            <th class="py-2 px-4">Email</th>
                            <th class="py-2 px-4">Address</th>
                            <th class="py-2 px-4">Role</th>
                            <th class="py-2 px-4">Salary</th>
                            <th class="py-2 px-4">Phone</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                            <tr class="border-b border-gray-200">
                                <td class="py-2 px-4"><?php echo $row['username']; ?></td>
                                <td class="py-2 px-4"><?php echo $row['email']; ?></td>
                                <td class="py-2 px-4"><?php echo $row['address']; ?></td>
                                <td class="py-2 px-4"><?php echo $row['role']; ?></td>
                                <td class="py-2 px-4"><?php echo $row['salary']; ?></td>
                                <td class="py-2 px-4"><?php echo $row['phone']; ?></td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        <?php else : ?>
            <p class="text-center text-gray-600">No user details found.</p>
        <?php endif; ?>

    </div>
</body>

</html>

<?php
mysqli_close($con);
?>
