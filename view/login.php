<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

  <div class="bg-white shadow-lg rounded-lg w-full max-w-md p-8">
    <h2 class="text-2xl font-bold text-gray-800 text-center mb-6">Login to Your Account</h2>

    <form action="#" method="POST" class="space-y-5">
      <div>
        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
        <input type="email" id="email" name="email" placeholder="you@example.com" required
          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500" />
      </div>

      <div>
        <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
        <input type="password" id="password" name="password" placeholder="********" required
          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500" />
      </div>

      <div class="flex items-center justify-between">
        <label class="flex items-center space-x-2">
          <input type="checkbox" class="h-4 w-4 text-purple-600 focus:ring-purple-500 border-gray-300 rounded" />
          <span class="text-sm text-gray-700">Remember me</span>
        </label>
        <a href="#" class="text-sm text-purple-600 hover:underline">Forgot password?</a>
      </div>

      <button type="submit" 
        class="w-full bg-purple-600 hover:bg-purple-700 text-white font-semibold py-2 px-4 rounded-lg transition">
        Login
      </button>
    </form>
  </div>

</body>
</html>
 