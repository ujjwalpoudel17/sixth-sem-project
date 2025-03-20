<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Hotel Signup</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">
    
    <div class="flex flex-col md:flex-row min-h-screen items-center justify-center p-6 sm:p-12">
        
        <!-- Signup Form -->
        <div class="w-full max-w-3xl bg-white p-8 rounded-lg shadow-lg">
            <h1 class="text-3xl font-bold text-blue-900 mb-6 text-center">Hotel Signup</h1>

            <form class="space-y-4">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-gray-600">Owner's First Name</label>
                        <input type="text" required class="w-full p-2 border rounded-md focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <label class="block text-gray-600">Owner's Last Name</label>
                        <input type="text" required class="w-full p-2 border rounded-md focus:ring-2 focus:ring-blue-500">
                    </div>
                </div>

                <div>
                    <label class="block text-gray-600">Email Address</label>
                    <input type="email" required class="w-full p-2 border rounded-md focus:ring-2 focus:ring-blue-500">
                </div>

                <div>
                    <label class="block text-gray-600">Phone Number</label>
                    <input type="tel" required class="w-full p-2 border rounded-md focus:ring-2 focus:ring-blue-500">
                </div>
                <div>
                    <label class="block text-gray-600">Hotel Name</label>
                    <input type="text" required class="w-full p-2 border rounded-md focus:ring-2 focus:ring-blue-500">
                </div>
                <div>
                    <label class="block text-gray-600">Address</label>
                    <input type="text" required class="w-full p-2 border rounded-md focus:ring-2 focus:ring-blue-500">
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-gray-600">Password</label>
                        <input type="password" required class="w-full p-2 border rounded-md focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <label class="block text-gray-600">Confirm Password</label>
                        <input type="password" required class="w-full p-2 border rounded-md focus:ring-2 focus:ring-blue-500">
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-gray-600">PAN Card</label>
                        <input type="file" class="w-full p-2 border rounded-md">
                    </div>
                    <div>
                        <label class="block text-gray-600">Citizenship</label>
                        <input type="file" class="w-full p-2 border rounded-md">
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-gray-600">Passport</label>
                        <input type="file" class="w-full p-2 border rounded-md">
                    </div>
                    <div>
                        <label class="block text-gray-600">Hotel Photo</label>
                        <input type="file" class="w-full p-2 border rounded-md">
                    </div>
                </div>

                <div class="text-center">
                    <a href="#" class="text-blue-600 hover:underline">Already Signed In? Login Here</a>
                </div>

                <button type="submit" class="w-full bg-blue-700 text-white py-2 rounded-md hover:bg-blue-800 focus:ring-2 focus:ring-blue-500">
                    Submit
                </button>
            </form>
        </div>

    </div>

</body>
</html>
