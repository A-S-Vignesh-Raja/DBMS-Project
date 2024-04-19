<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
    <link rel="stylesheet" href="./output.css">
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8 scrollbar-hide overflow-hidden">
    <form action="register.php" method="post" class="max-w-md w-full bg-white p-8 rounded-lg shadow-lg">
        <h2 class="text-2xl font-semibold text-center mb-6">User Registration Form</h2>

        <div class="mb-4">
            <label for="username" class="block text-sm font-medium text-gray-700">Username:</label>
            <input type="text" id="username" name="username" required
                class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-400">
        </div>

        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Email:</label>
            <input type="email" id="email" name="email" required
                class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-400">
        </div>

        <div class="mb-6">
            <label for="password" class="block text-sm font-medium text-gray-700">Password:</label>
            <input type="password" id="password" name="password" required
                class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-400">
        </div>

        <div>
            <button type="submit"
                class="w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
                
                Register
            </button>
        </div>

        <div class="text-center mt-4">
            <span class="text-sm text-gray-600">Already have an account?</span>
            <a href="signin.html" class="text-sm font-medium text-blue-500 ml-1">Sign in here</a>
        </div>
    </form>
</body>
</html>
