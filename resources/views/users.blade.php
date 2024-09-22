<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
</head>
<body class="container mx-auto flex justify-center items-center bg-gray-100 h-screen">
    <h1 class="username absolute top-0 left-0 px-2">Username: {{ Auth::user()->name }}</h1>
    <table class="table-auto col-span-2 bg-white rounded-lg shadow-md">
        <button class="fixed top-4 right-4"><a href="/users/add" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add User</a></a></button>
        <thead>
            <tr class="bg-gray-300">
                <th class="px-6 py-3 text-left">ID</th>
                <th class="px-6 py-3 text-left">Name</th>
                <th class="px-6 py-3 text-left">Email</th>
                <th class="px-6 py-3 text-left">Created At</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr class="hover:bg-gray-200">
                <td class="px-6 py-4 border-t border-b border-gray-300">{{ $loop->iteration }}</td>
                <td class="px-6 py-4 border-t border-b border-gray-300">{{ $user->name }}</td>
                <td class="px-6 py-4 border-t border-b border-gray-300">{{ $user->email }}</td>
                <td class="px-6 py-4 border-t border-b border-gray-300">{{ $user->created_at->format('d M Y') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
