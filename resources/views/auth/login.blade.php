<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="flex items-center justify-center h-screen">
        <div class="w-full max-w-md">
            <div class="bg-white rounded-lg shadow-lg p-8">
                <h2 class="text-2xl font-bold text-yellow-500 text-center">Welcome!</h2>
                <p class="text-gray-500 text-center mb-4">Please sign in to your account</p>
                
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-4">
                        <label for="user_id" class="block text-gray-700">User ID</label>
                        <input id="user_id" type="text" name="user_id" required autofocus 
                               class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500"
                               placeholder="Enter user id">
                    </div>

                    <div class="mb-6">
                        <label for="password" class="block text-gray-700">Password</label>
                        <input id="password" type="password" name="password" required 
                               class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500"
                               placeholder="Enter your password">
                    </div>

                    <div class="flex items-center justify-between">
                        <button type="submit" class="w-full bg-yellow-500 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-700">
                            Sign In
                        </button>
                    </div>
                </form>

                <p class="text-center text-gray-400 mt-6">Press Enter to input password</p>
            </div>
        </div>
    </div>
    
    <!-- Decorative Circles -->
    <div class="absolute bottom-0 left-0 m-4">
        <div class="flex space-x-2">
            <div class="bg-orange-500 w-10 h-10 rounded-full"></div>
            <div class="bg-yellow-400 w-10 h-10 rounded-full"></div>
            <div class="bg-red-500 w-10 h-10 rounded-full"></div>
        </div>
    </div>
    <div class="absolute bottom-0 right-0 m-4">
        <div class="flex space-x-2">
            <div class="bg-red-500 w-10 h-10 rounded-full"></div>
            <div class="bg-yellow-400 w-10 h-10 rounded-full"></div>
            <div class="bg-orange-500 w-10 h-10 rounded-full"></div>
        </div>
    </div>
</body>
</html>
