<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="container p-8 bg-white shadow-lg rounded-lg border border-gray-300">
        <h1 class="text-4xl font-bold mb-6 text-center text-blue-600">Login</h1>
        <form method="POST" action="{{ route('login.submit') }}" class="w-full max-w-md">
            @csrf
            @if ($errors->any())
                <div class="mb-4 text-red-500">
                    {{ $errors->first() }}
                </div>
            @endif
            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-semibold mb-2">Email</label>
                <input type="email" name="email" value="{{ old('email') }}" required class="shadow-md appearance-none border border-gray-300 rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700 text-sm font-semibold mb-2">Password</label>
                <input type="password" name="password" required class="shadow-md appearance-none border border-gray-300 rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-4 rounded focus:outline-none focus:shadow-outline w-full transition duration-200">Login</button>
            <p class="mt-4 text-center text-gray-600">Don't have an account? <a href="/register" class="text-blue-600 hover:underline">Register here</a></p>
        </form>
    </div>
</body>
</html>
