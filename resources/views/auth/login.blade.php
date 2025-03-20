<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<div class="bg-gray-100 h-screen flex justify-center items-center">

<div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
  <h2 class="text-2xl font-bold text-center mb-6 text-gray-700">Login</h2>
  
  <form action="{{route ('login')}}" method="POST" class="space-y-4">
    @csrf
    <div>
      <label for="username" class="block text-sm font-medium text-gray-600">Email</label>
      <input type="email" name="email" required placeholder="Enter your username"
        class="mt-2 px-4 py-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
    </div>
    <div>
      <label for="password" class="block text-sm font-medium text-gray-600">Password</label>
      <input type="password" name="password" required placeholder="Enter your password"
        class="mt-2 px-4 py-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
    </div>
    <div>
      <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-lg font-semibold hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
        Login
      </button>
    </div>
  </form>
  <div class="mt-4 text-center">
    <a href="#" class="text-sm text-blue-500 hover:underline">Forgot your password?</a>
  </div>
</div>
</div>
</body>
</html>